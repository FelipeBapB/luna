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


</head>

<body>

    <?php require_once('parts/menu.php') ?>

    <div class="bodySel">

        <div class="home">

            <?php require_once('parts/home.php') ?>

        </div>

        <div class="pages">

            <?php require_once('parts/pages.php') ?>

        </div>

        <div class="saves">

            <?php require_once('parts/saves.php') ?>

        </div>

        <div class="groups">

            <?php require_once('parts/groups.php') ?>

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
    </script>

</body>

</html>