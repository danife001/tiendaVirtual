<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title> Registro Usuarios A.C.A.I</title>

    <link rel="icon" href="../view/images/simbolo.jpg" type="image/x-icon">

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
                            <a href="index.html"><span>Registro Usuarios A.C.A.I</span></a>
                        </div>
                        <div class="login-form">
                            <h4>Registrar</h4>
                            <div class="row">
                                <form action="../../controller/insertUserE.php" method="POST">
                                <div class="row">
                                <div class="mb-3 col-md-6">
                      <label for="identificacion" class="form-label">IDENTIFICACION</label>
                      <input type="number" class="form-control" id="identificacion" name="identificacion">
                      </div>

                      <div class="mb-3 col-md-6">
                        <label for="tipoDoc" class="form-label">tipo de documento</label>
                        <select class="form-control" name="tipoDoc" aria-label="Default select example">
                            <option selected>selecione</option>
                            <option value="cc">CC</option>
                            <option value="TI">TI</option>
                            <option value="CE">CE</option>
                          </select>
                      </div>
                        
                        <div class="mb-3 col-md-6">
                          <label for="nombres" class="form-label">Nombres</label>
                          <input type="text" class="form-control" id="nombres" required name="nombres">
                        </div>

                          <div class="mb-3 col-md-6">
                            <label for="apellidos" class="form-label">apellidos</label>
                            <input type="text" class="form-control" id="apellidos" required name="apellidos">
                          </div>

                            <div class="mb-3 col-md-6">
                              <label for="email" class="form-label">email</label>
                              <input type="email" class="form-control" id="email" required name="email">
                            </div>

                            <div class="mb-3 col-md-6">
                              <label for="telefono" class="form-label">telefono</label>
                              <input type="number" class="form-control" id="telefono"  required name="telefono">
                            </div>
                            <div class="mb-3 col-md-6">
                              <label for="clave" class="form-label">clave</label>
                              <input type="text" class="form-control" id="clave" required name="clave">
                            </div>
                            <div class="mb-3 col-md-6">
                              <label for="claveB" class="form-label">confirma clave</label>
                              <input type="text" class="form-control" id="claveB" required name="claveB">
                            </div>
                            <div class="mb-12 col-md-12">
                       

                            <label>
										<input type="checkbox">  Acepto terminos y condiciones
									</label>
                                <button type="submit" class="btn btn-primary btn-flat m-b-30 m-t-30">Registrar</button>
                                <div class="social-login-content">
                                    <div class="social-button">
                                        <button type="button" class="btn btn-primary bg-facebook btn-flat btn-addon m-b-10"><i class="ti-facebook"></i>Registrarse con  facebook</button>
                                        <button type="button" class="btn btn-primary bg-twitter btn-flat btn-addon m-t-10"><i class="ti-twitter"></i>Registrarse con twitter</button>
                                    </div>
                                </div>
                                <div class="register-link m-t-15 text-center">
                                    <p>tienes cuenta ? <a href="login.php"> ingresa </a></p>
                                </div>
                          
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