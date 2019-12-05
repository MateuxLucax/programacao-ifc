// Seção de direitos autorais
var dataAtual = new Date();
var anoAtual = dataAtual.getFullYear();
document.getElementById("copyright-js").innerHTML = " &copy; " + anoAtual + " Equipe 5";

// Smooth scroll
$(document).ready(function () {
    $("a.scrollLink").click(function (event) {
        event.preventDefault();
        $("html, body").animate({ scrollTop: $($(this).attr("href")).offset().top }, 500);
    });
  });

// Redireciona

function redirecionaSimula() {
    window.location.href = "simula/";
}