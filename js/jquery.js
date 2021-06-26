$(document).ready(function () {
    $(".nav-s").focus(function () {
        $(".s-box").show(300)
    });
    $(".nav-s").focusout(function () {
        $(".s-box").hide(300)
    });
});

$(document).ready(function () {

    var UI = document.getElementsByClassName("UITheme");

    $("#mudarTema").click(function () {
        $(".b-cca").toggleClass("cl-b_tc");
        $(".btt-t").toggleClass("cl-b_tc");
        $(".maskk").toggleClass("cl-bd-te");
        $("body").toggleClass("cl-bd-te");

        $(UI).toggleClass("cl-b_te");
    });
});

$(document).ready(function () {

    /* Box account */

    $("#configuraConta").click(function () {
        $(".a-box").toggle(300);
        $(".n-box").hide(300);
        e.stopPropagation();
    });

    $("#configAbox").click(function () {
        $(".b-a").hide(300);
        $(".b-cb").show(300);
    });

    $("#acssbAbox").click(function () {
        $(".b-a").hide(300);
        $(".b-ab").show(300);
    });

    /* Config > princ */

    $("#cbABox").click(function () {
        $(".b-a").show(300);
        $(".b-ab").hide(300);
        $(".b-cb").hide(300);
    });

    /* acess > princ */

    $("#cbABoxa").click(function () {
        $(".b-a").show(300);
        $(".b-ab").hide(300);
        $(".b-cb").hide(300);
    });

    /* Box Notf */

    $("#notificacoes").click(function () {
        $(".a-box").hide(300);
        $(".n-box").toggle(300);
        e.stopPropagation();
    });

    /* Box creat */

    $("#criacao").click(function () {
        $(".c-box").fadeIn(300);
        e.stopPropagation();
    });

    $(".bodySel").click(function () {
        $(".a-box").hide(300);
        $(".n-box").hide(300);
    });

    $(".mk-c").click(function () {
        $(".c-box").fadeOut(300);
        e.stopPropagation();
    });

    /* Selecao de aba */

    $("#Home").click(function () {
        $(".home").fadeIn(500);
        $(".friends").fadeOut(200);
        $(".saves").fadeOut(200);
        $(".groups").fadeOut(200);
    });

    $("#Pages").click(function () {
        $(".pages").fadeIn(500);
        $(".home").fadeOut(200);
        $(".saves").fadeOut(200);
        $(".groups").fadeOut(200);
    });

    $("#Saves").click(function () {
        $(".saves").fadeIn(500);
        $(".friends").fadeOut(200);
        $(".home").fadeOut(200);
        $(".groups").fadeOut(200);
    });

    $("#Groups").click(function () {
        $(".groups").fadeIn(500);
        $(".saves").fadeOut(200);
        $(".friends").fadeOut(200);
        $(".home").fadeOut(200);
    });

    /* Selecao aba perfil */

    $("#pubsP").click(function () {
        $(".pubs").fadeIn(500);
        $(".medias").fadeOut(200);
        $(".friends").fadeOut(200);
        $(".abouts").fadeOut(200);
    });

    $("#mediaP").click(function () {
        $(".medias").fadeIn(500);
        $(".pubs").fadeOut(200);
        $(".saves").fadeOut(200);
        $(".friends").fadeOut(200);
    });

    $("#friendsP").click(function () {
        $(".friends").fadeIn(500);
        $(".medias").fadeOut(200);
        $(".pubs").fadeOut(200);
        $(".medias").fadeOut(200);
    });

    $("#aboutP").click(function () {
        $(".abouts").fadeIn(500);
        $(".medias").fadeOut(200);
        $(".friends").fadeOut(200);
        $(".pubs").fadeOut(200);
    });
});
