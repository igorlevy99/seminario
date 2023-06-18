<?php
// Inclui o arquivo de conexão com o banco de dados
require_once ('conexao_db.php');

// Inicializa a mensagem de erro
$error = '';

// Verifica se o formulário foi enviado
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Obtém a data e hora atual
    $agora = new DateTime();

    // Obtém os valores enviados pelo formulário
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $telefone = $_POST['telefone'];
    $data_hora = $_POST['data_hora'];

    // Converte a data e hora selecionada em um objeto DateTime
    $data_hora_obj = new DateTime($data_hora);

    // Verifica se a data selecionada é posterior à data atual
    if ($data_hora_obj < $agora) {
        $error = "Por favor, selecione uma data e horário futuro.";
    // Verifica se a hora selecionada é anterior às 08:00
    } else if ($data_hora_obj->format('H:i') < '08:00') {
        $error = "Por favor, selecione um horário após às 08:00.";
    // Verifica se a hora selecionada é posterior às 17:00
    } else if ($data_hora_obj->format('H:i') > '17:00') {
        $error = "Por favor, selecione um horário antes das 17:00.";
    } else {
        // Verifica se a data e hora selecionada está disponível
        $sql = "SELECT * FROM agendamentos WHERE data_hora = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("s", $data_hora);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows > 0) {
            $error = "Este horário já está agendado. Por favor, escolha outro horário.";
        } else {
            // Cria a consulta SQL para inserir o agendamento no banco de dados
            $sql = "INSERT INTO agendamentos (nome, email, telefone, data_hora) VALUES (?, ?, ?, ?)";

            // Prepara a consulta SQL para evitar injeção de SQL
            $stmt = $conn->prepare($sql);

            // Atribui os valores dos parâmetros
            $stmt->bind_param("ssss", $nome, $email, $telefone, $data_hora);

            // Executa a consulta SQL
            if ($stmt->execute()) {
                $error = "Agendamento criado com sucesso!";
            } else {
                $error = "Erro ao criar o agendamento: " . $conn->error;
            }

            // Fecha a consulta SQL e a conexão com o banco de dados
            $stmt->close();
        }
    }
}

// Obtém o dia atual no formato YYYY-MM-DD
$hoje = date('Y-m-d');

// Cria a consulta SQL para buscar os agendamentos do dia atual
$sql = "SELECT * FROM agendamentos WHERE data_hora >= '08:00:00' AND data_hora <= '17:00:00' ORDER BY data_hora";

// Executa a consulta SQL
$result = $conn->query($sql);

// Obtém todos os agendamentos do dia atual
$agendamentos = $result->fetch_all(MYSQLI_ASSOC);

// Fecha a consulta SQL e a conexão com o banco de dados
$result->close();
$conn->close();



?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Sistema de Agendamento</title>
    <link rel="stylesheet" href="">
    <link rel="stylesheet" href="css/agenda.css">
    
    
</head>
<body>
    <h1 class="title">Sistema de Agendamento</h1>

    <?php if ($error !== '' && $error !== 'Agendamento criado com sucesso!'): ?>
        <p style="color: red;"><?php echo $error; ?></p>
        <?php else:?>
        <p style="color: green;"><?php echo $error; ?></p>
    <?php endif; ?>
    <main class="container">
        <h2>Agendar Horário</h2>
        <form method="post">
            <label for="nome">Nome:</label>
            <input type="text" name="nome" required><br><br>

            <label for="email">E-mail:</label>
            <input type="email" name="email" required><br><br>

            <label for="telefone">Telefone:</label>
            <input type="tel" name="telefone" required><br><br>

            <label for="data_hora">Data e Hora:</label>
            <input type="datetime-local" name="data_hora" required><br><br>
            <button type="submit">Agendar</button>
        </form>
    </main>

<h2>Agendamentos Marcados</h2>

    <div class="lista">
    <?php foreach ($agendamentos as $agendamento): ?>
        <div class="item">
            <img src="../seminario/img/logo.jpeg" alt="Foto da Barbearia">
            <tr>
                <h2>Nome: <?php echo $agendamento['nome']; ?></h2>
                <h2>Data e Hora: <?php echo date('d/m/Y H:i', strtotime($agendamento['data_hora'])); ?></h2>
            </tr>
        </div>
        <?php endforeach; ?>
    </div>
    
</body>
</html>

