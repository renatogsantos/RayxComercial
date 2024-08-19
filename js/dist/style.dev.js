"use strict";

//transforma a cor da barra de navegação navbar quando scroll
$(window).scroll(function () {
  if ($(document).scrollTop() > 1400) {
    $('nav').addClass('hero7');
  } else {
    $('nav').removeClass('hero7');
  }
}); //transforma a cor da barra de navegação quando click

$(document).ready(function () {
  $("button").click(function () {
    $("nav").addClass("hero7");
  });
}); //pede senha para acessar a página de blog

function loginAcess() {
  var login = prompt("Por favor digite a senha de acesso: (Para acessar a página de introdução aos produtos RAYX, solicite o acesso com um de nossos colaboradores na página de contatos RAYX.com.br)");

  if (login == "RAYX2021") {
    alert("Senha correta!");
  } else {
    window.location.href = "https://www.RAYX.com.br";
  }
} //remove a tela de carregamento


function myFunction() {
  var load = document.getElementById("preloader");
  load.remove();
}