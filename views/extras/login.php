<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Ingreso Usuarios A.C.A.I</title>

    <link rel="icon" href="../clienSide/images/simbolo.jpg" type="image/x-icon">

    <!-- ================= Favicon ================== -->
    <!-- Standard -->
    <link rel="shortcut icon" href="http://placehold.it/64.png/000/fff">
    <!-- Retina iPad Touch Icon-->
    <link rel="apple-touch-icon" sizes="144x144" href="http://placehold.it/144.png/000/fff">
    <!-- Retina iPhone Touch Icon-->
    <link rel="apple-touch-icon" sizes="114x114" href="http://placehold.it/114.png/000/fff">
    <!-- Standard iPad Touch Icon-->
    <link rel="apple-touch-icon" sizes="72x72" href="http://placehold.it/72.png/000/fff">
    <!-- Standard iPhone Touch Icon-->
    <link rel="apple-touch-icon" sizes="57x57" href="http://placehold.it/57.png/000/fff">

    <!-- Styles -->
    <link href="../dashboard/css/lib/font-awesome.min.css" rel="stylesheet">
    <link href="../dashboard/css/lib/themify-icons.css" rel="stylesheet">
    <link href="../dashboard/css/lib/bootstrap.min.css" rel="stylesheet">
    <link href="../dashboard/css/lib/helper.css" rel="stylesheet">
    <link href="../dashboard/css/style.css" rel="stylesheet">
</head>

<body class="bg-dark">

    <div class="unix-login">
        <div class="container-fluid">
            <div class="row justify-content-center" style="background:#7113c7">
                <div class="col-lg-6">
                    <div class="login-content">
                        <div class="login-logo">
                            <a href="index.html"><span>Iniciar sesion</span></a>
                        </div>
                        <div class="login-form">
                            <h4>Iniciar sesion</h4>
                            <form  action="../../controller/iniciarSesion.php" method="POST">
                                <div class="form-group">
                                    <label>Direccion de email</label>
                                    <input type="email" class="form-control" required name="email" placeholder="Email">
                                </div>
                                <div class="form-group">
                                    <label>clave</label>
                                    <input type="password" class="form-control" required name="pass" placeholder="clave">
                                </div>
                                <div class="checkbox">
                                    <label>
										<input type="checkbox"> Recordar datos
									</label>
                                    <label class="pull-right">
										<a href="reset-password.php">Olvidaste la clave?</a>
									</label>

                                </div>
                                <button type="submit" class="btn btn-primary btn-flat m-b-30 m-t-30">Ingresar</button>
                                <div class="social-login-content">
                                    <div class="social-button">
                                        <button type="button" class="btn btn-primary bg-facebook btn-flat btn-addon m-b-10"><i class="ti-facebook"></i>Inicia sesion con Facebook</button>
                                        <button type="button" class="btn btn-primary bg-twitter btn-flat btn-addon m-t-10"><i class="ti-twitter"></i>Inicia sesion con Twitter</button>
                                    </div>
                                </div>
                                <div class="register-link m-t-15 text-center">
                                    <p>No tienes cuenta ? <a href="register.php"> Registrate aqui</a></p>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>

</html>