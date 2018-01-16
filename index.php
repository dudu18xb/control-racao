<!DOCTYPE html>
<html>
<head>
    <title>Noticias</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no"> <!-- para nao dar zoom -->
    <link rel="stylesheet" type="text/css" href="css/style.css"> <!-- my style compilate -->
    <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css"> <!-- my style compilate -->
    <link rel="stylesheet" type="text/css" href="css/jquery.mmenu.all.css"> <!-- plugin menu responsivo -->
    <link rel="stylesheet" type="text/css" href="css/jquery.mhead.css"> <!-- plugin menu responsivo -->
    <link rel="stylesheet" type="text/css" href="css/responsivo.css"> <!-- plugin menu responsivo -->

    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css"> <!-- boostrap -->
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap-social.css"> <!-- botao redes sociais boostrap -->
    <link rel="stylesheet" type="text/css" href="bootstrap/css/docs.css"> <!-- botao redes sociais boostrap -->
    <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script> <!-- boostrap -->
    <script type="text/javascript" src="bootstrap/js/npm.js"></script> <!-- boostrap -->
    <script type="text/javascript" src="bootstrap/js/docs.js"></script> <!-- icones redes sociais boostrap -->

    <script type="text/javascript" src="js/jquery-3.2.1.min.js"></script> <!-- jquery -->
    <script type="text/javascript" src="js/jquery.mmenu.all.js"></script> <!-- plugin menu responsivo -->
    <script type="text/javascript" src="js/jquery.mhead.js"></script> <!-- plugin menu responsivo -->
    <script type="text/javascript" src="js/modernizr.custom.js"></script> <!-- plugin modernizin -->
    <script type="text/javascript" src="js/wow.min.js"></script> <!-- efeitos de page Wow -->

    <script type="text/javascript">
        new WOW().init();

        function mostraMenu() {
            $("nav").toggle();
        }
        $(function () {

            //	create a menu
            $('#menu').mmenu();

            //	fire the plugin
            $('.mh-head').mhead();

            //	for demo only
            $('a[href^="#/"]').click(function () {
                alert('Thank you for clicking, but that\'s a demo link.');
                return;
            })
        });
        // funcao para rodar os botoes redes sociais
        var _gaq = _gaq || [];
        _gaq.push(['_setAccount', 'UA-42119746-1']);
        _gaq.push(['_trackPageview']);

        (function () {
            var ga = document.createElement('script');
            ga.type = 'text/javascript';
            ga.async = true;
            ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
            var s = document.getElementsByTagName('script')[0];
            s.parentNode.insertBefore(ga, s);
        })();
    </script>
</head>
<body>
<div class="container">
    <div class="well login">
        <h1 class="text-center">
            Tela de Login
        </h1>

        <form name="login" method="post" action="controller/verificar.php" novalidate>

            <div class="control-group">
                <label for="login" class="control-label">
                    Login:
                </label>

                <div class="controls">
                    <input type="text"
                           name="login" required
                           data-validation-required-message="Digite o login"
                           class="form-control">
                </div>
            </div>

            <div class="control-group">
                <label for="senha"
                       class="control-label">
                    Senha:
                </label>
                <div class="controls">
                    <input type="password"
                           name="senha" required
                           data-validation-required-message="Digite sua senha"
                           class="form-control">
                </div>
            </div>

            <button type="submit"
                    class="btn btn-success">
                Logar
            </button>
        </form>
    </div>
</div>

</body>
</html>
