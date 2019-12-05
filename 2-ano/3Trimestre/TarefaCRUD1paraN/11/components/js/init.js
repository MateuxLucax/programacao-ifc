$(document).ready(function () {
    $('.sidenav').sidenav();
    $('.parallax').parallax();
    $('select').formSelect();
    $('.modal').modal();
    $(".dropdown-trigger").dropdown({
        inDuration: 300,
        outDuration: 225,
        constrainWidth: true,
        hover: true,
        gutter: 0,
        coverTrigger: false,
        alignment: 'right',
        stopPropagation: true
    });
});
