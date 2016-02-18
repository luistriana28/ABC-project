<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Arkebit</title>
        <script src="js/jquery-2.1.3.js" type="text/javascript"></script>
        <script src="js/bootstrap.js" type="text/javascript"></script>
        <script src="js/app.js" type="text/javascript"></script>
        <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
        <link rel="stylesheet" type="text/css" href="css/login.css">
    </head>
    <body>
        <div class="cover">
            <div class="container">
                <br><br><br><br><br><br><br><br>
                <div class="row">
                    <div class="col-md-4 col-md-offset-4 login">
                        <form id="validaUsuario">
                            <br>
                            <div class="form-group">
                                <img class="center-block" src="img/logo3.png">
                            </div>
                            <div class="form-group">
                                <input name="usuario" class="form-control active" type="text" placeholder="Usuario">
                            </div>
                            <div class="form-group">
                                <input name="pass" class="form-control" type="password" placeholder="Password">
                            </div>
                            <div class="form-group">
                                <button type="button" id="btn_login" class="btn btn-primary btn-block btn-lg" value="Ingresar" name="enviar">Ingresar</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
<script type="text/javascript">
    $('#btn_login').click(function () {
        login();
    });
</script>
