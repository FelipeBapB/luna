<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Doo</title>

    <!-- CSS Reset -->

    <link rel="stylesheet" href="/css/reset.css">

    <!-- Meu CSS -->

    <link rel="stylesheet" href="/css/learn.css">

    <!-- API Google - Icons -->

    <link href="https://fonts.googleapis.com/css2?family=Material+Icons+Round" rel="stylesheet">

    <!-- API Google - Jquery -->

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <script src="https://rawgit.com/jackmoore/autosize/master/dist/autosize.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>

    <!-- Meu JS -->

    <script type="text/javascript" src="/js/jquery.js"></script>

    <style>
        .m-h {
            display: none;
        }
    </style>


</head>

<body>

    <?php require_once('parts/menu.php') ?>

    <div class="bodySel">

        <div class="p-bgct">

            <!-- Background e foto de perfil -->

            <div class="pbg">

                <img src="/Images/black-wallpaper-20072315092912-scaled.jpg" class="pbgimg" alt="">

                <div class="maskk"></div>

                <img src="/Images/ipo.png" class="bpp" alt="">

            </div>

            <!-- Nome do perfil -->

            <div class="nome-Perfil">

                <nomePerfil>
                    Felipe Baptista
                </nomePerfil>

                <p>Vaisefuder</p>

            </div>

            <!-- Apresentação -->

            <div class="apresentacaoPerfil UITheme cl-b_tc">

                <span>Apresentação</span>

                <div class="hryl"></div> <!-- linha -->

                <div class="aptr">

                    <ul>
                        <li>
                            <span class="material-icons-round">
                                school
                            </span>
                            <span>Cursando <span class="Impop">Sistemas para internet</span> em PUC Minas</span>
                        </li>
                        <li>
                            <span class="material-icons-round">
                                location_on
                            </span>
                            <span>De <span class="Impop">São Paulo</span></span>
                        </li>
                        <li>
                            <span class="material-icons-round">
                                favorite
                            </span>
                            <span>Solteiro</span>
                        </li>
                        <li>
                            <span class="material-icons-round">
                                rss_feed
                            </span>
                            <span>90 seguidores</span>
                        </li>
                    </ul>

                    <div class="hryl"></div> <!-- linha -->

                    <div class="abasp">

                        <div id="pubsP" class="asdss actives">
                            <a>Publicações</a>
                        </div>

                        <div id="mediaP" class="asdss">
                            <a>Midia</a>
                        </div>

                        <div id="friendsP" class="asdss">
                            <a>Amigos</a>
                        </div>

                        <div id="aboutP" class="asdss">
                            <a>Sobre</a>
                        </div>

                    </div>

                </div>

            </div>

            <div class="PerfilSel">

                <div class="pubs">

                    <?php require_once('parts/Emiliapub.php') ?>

                </div>

                <div class="medias">

                    <?php require_once('parts/EmiliaMedia.php') ?>

                </div>

                <div class="friends">

                    <?php require_once('parts/EmiliaFriends.php') ?>

                </div>

                <div class="abouts">

                </div>

            </div>

        </div>

    </div>

    <script>
        var loadFile = function(event) {
            var output = document.getElementById('output');
            output.src = URL.createObjectURL(event.target.files[0]);
        };
        $(function() {
            var textArea = $('#content'),
                hiddenDiv = $(document.createElement('div')),
                content = null;

            textArea.addClass('noscroll');
            hiddenDiv.addClass('hiddendiv');

            $(textArea).after(hiddenDiv);

            textArea.on('keyup', function() {
                content = $(this).val();
                content = content.replace(/\n/g, '<br>');
                hiddenDiv.html(content + '<br class="lbr">');
                $(this).css('height', hiddenDiv.height());
            });
        });
        autosize(document.getElementById("note"));

        $(document).ready(function() {
            $(".asdss").click(function() {
                $(this).addClass("actives");
                $(".asdss").not(this).removeClass("actives");
            });

        });
    </script>

</body>

</html>