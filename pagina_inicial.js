/* Abre e fecha menu lateral em modo mobile*/

/*constante que pegar informações da classe menu-mobile*/
const menuMobile = document.querySelector('.menu-mobile')
/*constante que pegar informações da tag body*/
const body = document.querySelector('body')

menuMobile.addEventListener('click',() =>{
    /*buscando class que contenha bi-list*/
    menuMobile.classList.contains("bi-list")
    /*Modificando icone conforme click de bi-list para bi-x*/
    ? menuMobile.classList.replace("bi-list","bi-x")
    /*Modificando icone conforme click de bi-x para bi-list*/
    : menuMobile.classList.replace("bi-x","bi-list");
    /*Ativar menu lateral mudando a classe do body*/
    body.classList.toggle("menu-nav-active")
})

/* Fecha o menu quando clicar em algum item e muda o icone */
const navItem = document.querySelectorAll('.nav-item')

navItem.forEach(item => {
    item.addEventListener("click", () => {
        if(body.classList.contains("menu-nav-active")){
            body.classList.remove("menu-nav-active")
            menuMobile.classList.replace("bi-x","bi-list")
        };
    });
});


const texto = "Venha se sentir no auge da masculinidade e elegância com um corte impecável na nossa barbearia.";
const elemento = document.getElementById("subtitle");
let index = 0;

function mostrarLetra() {
  if (index < texto.length) {
    elemento.innerHTML += texto.charAt(index);
    index++;
    setTimeout(mostrarLetra, 100); // tempo em milissegundos entre cada letra
  }
}

mostrarLetra();

