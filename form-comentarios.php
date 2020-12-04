<?php

$errors = [];
$errorMessage = '';

if (!empty($_POST)) {
    $name = $_POST['nombre'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    if (empty($name)) {
        $errors[] = 'Name is empty';
    }

    if (empty($email)) {
        $errors[] = 'Email is empty';
    } else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = 'Email is invalid';
    }

    if (empty($message)) {
        $errors[] = 'Message is empty';
    }


    if (empty($errors)) {
        $toEmail = 'marcos.p.pollastri@gmail.com';
        $emailSubject = 'Nuevo email desde formulario de comentarios';
        $headers = ['From' => $email, 'Reply-To' => $email, 'Content-type' => 'text/html; charset=iso-8859-1'];

        $bodyParagraphs = ["Name: {$name}", "Email: {$email}", "Message:", $message];
        $body = join(PHP_EOL, $bodyParagraphs);

        if (mail($toEmail, $emailSubject, $body, $headers)) {
            header('Location: index.html');
        } else {
            $errorMessage = 'Hubo un error al enviar el correo. Intentelo nuevamente.';
        }
    } else {
        $allErrors = join('<br/>', $errors);
        $errorMessage = "<p style='color: red;'>{$allErrors}</p>";
    }
}

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SOS - Dejanos tu comentario</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="./public/css/form2.css">
    <!-- <script src="https://www.google.com/recaptcha/api.js" async defer></script> -->

</head>
<body>
    <nav class="navbar navbar-expand navbar-light bg-transparent">
        <div class="ml-4 mt-4">
            <a href="#" class="navbar-brand"><img class="navbar-logo" src="./assets/logo.png" alt="" srcset=""></a>
        </div>
        
    </nav>
    <div class="jumbotron jumbotron-fluid">
        <div class="container">
            <h3 class="text-center">Trabajamos en tus comentarios sobre nuestros servicios</h3>
            <?php echo((!empty($errorMessage)) ? $errorMessage : '') ?>

            <div class="container">
                <form action="#" method="post">
                    <!-- first row -->
                    <div class="form-row mt-5">
                        <div class="col-md-4 col-xs-12">
                            <div class="form-group">
                              <label for="nombre">Nombre</label>
                              <input type="text"
                                class="form-control" name="nombre" id="" aria-describedby="helpId" placeholder="Ingrese su nombre">
                            </div>
                        </div>
                        <div class="col-md-4 col-xs-12">
                            <div class="form-group">
                                <label for="apellido">Apellido</label>
                                <input type="text"
                                  class="form-control" name="apellido" id="" aria-describedby="helpId" placeholder="Ingrese su apellido">
                              </div>
                        </div>
                        <div class="col-md-4 col-xs-12">
                            <div class="form-group">
                                <label for="localidad">Localidad</label>
                                <input type="text"
                                  class="form-control" name="localidad" id="" aria-describedby="helpId" placeholder="Ingrese su localidad de residencia">
                              </div>
                        </div>
                    </div>
                    <!-- second row -->
                    <div class="form-row mt-2">
                        <div class="col-md-4 col-xs-12">
                            <div class="form-group">
                              <label for="patente">Patente/Poliza</label>
                              <input type="number"
                                class="form-control" name="patente" id="" aria-describedby="helpId" placeholder="Ingrese su patente o poliza de seguro">
                            </div>
                        </div>
                        <div class="col-md-4 col-xs-12">
                            <div class="form-group">
                                <label for="compañia">Compañia</label>
                                <input type="text"
                                  class="form-control" name="compañia" id="" aria-describedby="helpId" placeholder="Ingrese su compañia">
                              </div>
                        </div>
                        <div class="col-md-4 col-xs-12">
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email"
                                  class="form-control" name="email" id="" aria-describedby="helpId" placeholder="Ingrese su correo electrónico">
                              </div>
                        </div>
                    </div>
                    <!-- third row -->
                    <div class="form-row mt-2">
                        <div class="col-md-4 col-xs-12">
                            <div class="form-group">
                              <label for="telefono">Télefono</label>
                              <input type="number"
                                class="form-control" name="telefono" id="" aria-describedby="helpId" placeholder="Ingrese su número de telefono">
                                <small>Incluya el código de área. Por ejemplo: 011 999999</small>
                            </div>
                        </div>
                        <div class="col-md-4 col-xs-12">
                            <div class="form-group">
                              <label for="celular">Celular</label>
                              <input type="number"
                                class="form-control" name="celular" id="" aria-describedby="helpId" placeholder="Ingrese su número de celular">
                                <small>Incluya el código de área y el 15. Por ejemplo: 011 15 999999</small>
                            </div>
                        </div>
                        <div class="col-md-4 col-xs-12">
                            <div class="form-group">
                              <label for="preferencia-contacto">Preferencia de contacto</label>
                              <select class="form-control" name="preferencia-contacto" id="">
                                <option>Opción de contacto 1</option>
                                <option>Opción de contacto 2</option>
                                <option>Opción de contacto 3</option>
                              </select>
                            </div>
                        </div>
                    </div>
                    <!-- forth row -->
                    <div class="form-row mt-2">
                        
                        <div class="col-md-12 col-xs-12">
                            <div class="form-group">
                              <label for="message">Mensaje</label>
                              <textarea  rows=4 type="textarea" class="form-control" name="message" id="" aria-describedby="helpId" placeholder="Escribanos un mensaje de algun otro detalle que quiera agregar..."></textarea>
                            </div>
                        </div>
                        
                    </div>
                    <!-- fifth row -->
                    <div class="form-row mt-2">
                        
                        <div class="col-12">
                            <div class="form-group">
                                <label class="hidden" for="file">Seleccionar archivo</label>
                              <input type="file" class="form-control-file hidden" name="file" id="input-file" placeholder="" aria-describedby="fileHelpId">
                              <input type="button" class="btn btn-secondary" value="Seleccionar archivo" onclick="document.getElementById('input-file').click();" />
                            </div>
                        </div>

                    </div>
                    <div class="form-row mt-2">
                        <div class="col">
                            <!-- <div class="g-recaptcha" data-sitekey="your_site_key"></div> -->
                            <!-- <small>Recatcha será implementado y centrado en el futuro</small> -->
                        </div>
                        
                    </div>
                    <div class="form-row mt-2">
                        <div class="col">
                            <button type="submit" class="btn btn-lg btn-danger">Enviar</button>
                        </div>
                        
                    </div>
                </form>
                
            </div>

        </div>
    </div>

  <!-- Footer -->
  <footer class="page-footer">
  
    <div class="links">
      <button type="button" class="btn btn-link">Datos útiles</button>
      <button type="button" class="btn btn-link" onclick="window.location.href='https://consultadeservicios.redsos.com.ar/'">Portal postventa</button>

     <br>
    </div>
    <div class="rights">
      <p>
       <span><b>S.O.S Red de Asistencia</span> <span>Todos los derechos reservados</span></b></p>
      <p>Desarrollado por <a href="" style="color: white; text-decoration: none;"> Damsquad</a></p>
    </div>
  
  </footer>
<!-- Scripts -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="./js/bootstrap.min.js"></script>

</body>
</html>