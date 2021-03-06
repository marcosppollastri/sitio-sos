<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SOS - Dejanos tu CV</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="./public/css/form2.css">
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>

</head>
<body>
    <nav class="navbar navbar-expand navbar-light bg-transparent">
        <div class="ml-4 mt-4">
            <a href="#" class="navbar-brand"><img class="navbar-logo" src="./assets/logo.png" alt="" srcset=""></a>
        </div>
        
    </nav>
    <div class="jumbotron jumbotron-fluid">
        <div class="container">
            <h3 class="text-center">Dejanos tu CV</h3>
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
                                <label for="fecha-de-nacimiento">Fecha de nacimiento</label>
                                <input type="date"
                                  class="form-control" name="fecha-de-nacimiento" id="" aria-describedby="helpId" placeholder="Ingrese su fecha de nacimiento">
                              </div>
                        </div>
                    </div>
                    <!-- second row -->
                    <div class="form-row mt-2">
                        <div class="col-md-4 col-xs-12">
                            <div class="form-group">
                              <label for="dni">DNI</label>
                              <input type="number"
                                class="form-control" name="dni" id="" aria-describedby="helpId" placeholder="Ingrese su número de documento">
                            </div>
                        </div>
                        <div class="col-md-4 col-xs-12">
                            <div class="form-group">
                                <label for="sexo">Sexo</label>
                                  <select class="form-control" name="sexo" id="" placeholder="Seleccione su sexo">
                                    <option value="hombre">Hombre</option>
                                    <option value="mujer">Mujer</option>
                                  </select>
                            </div>
                        </div>
                        <div class="col-md-4 col-xs-12">
                            <div class="form-group">
                                <label for="ciudad">Ciudad de residencia</label>
                                <input type="text"
                                  class="form-control" name="ciudad" id="" aria-describedby="helpId" placeholder="Ingrese su ciudad de residencia">
                              </div>
                        </div>
                    </div>
                    <!-- third row -->
                    <div class="form-row mt-2">
                        <div class="col-md-4 col-xs-12">
                            <div class="form-group">
                                    <div class="form-group">
                                        <label for="provincia">Provincia de Residencia</label>
                                          <select class="form-control" name="provincia" id="" placeholder="Seleccione su provincia">
                                            <option value="Buenos Aires">Bs. As.</option>
                                            <option value="Catamarca">Catamarca</option>
                                            <option value="Chaco">Chaco</option>
                                            <option value="Chubut">Chubut</option>
                                            <option value="CABA">Ciudad Autónoma de Buenos Aires</option>
                                            <option value="Cordoba">Cordoba</option>
                                            <option value="Corrientes">Corrientes</option>
                                            <option value="Entre Rios">Entre Rios</option>
                                            <option value="Formosa">Formosa</option>
                                            <option value="Jujuy">Jujuy</option>
                                            <option value="La Pampa">La Pampa</option>
                                            <option value="La Rioja">La Rioja</option>
                                            <option value="Mendoza">Mendoza</option>
                                            <option value="Misiones">Misiones</option>
                                            <option value="Neuquen">Neuquen</option>
                                            <option value="Rio Negro">Rio Negro</option>
                                            <option value="Salta">Salta</option>
                                            <option value="San Juan">San Juan</option>
                                            <option value="San Luis">San Luis</option>
                                            <option value="Santa Cruz">Santa Cruz</option>
                                            <option value="Santa Fe">Santa Fe</option>
                                            <option value="Sgo. del Estero">Sgo. del Estero</option>
                                            <option value="Tierra del Fuego">Tierra del Fuego</option>
                                           <option value="Tucuman">Tucuman</option>
                                          </select>
                                    </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-xs-12">
                            <div class="form-group">
                              <label for="domicilio">Domicilio</label>
                              <input type="text" class="form-control" name="domicilio" id="" aria-describedby="helpId" placeholder="Ingrese su domicilio">
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
                    <!-- forth row -->
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
                                <label for="area">Área</label>
                                <input type="text"
                                  class="form-control" name="area" id="" aria-describedby="helpId" placeholder="Ingrese su área">
                              </div>
                        </div>
                        <div class="col-md-4 col-xs-12">
                            <div class="form-group">
                                <label for="puesto">Postulación para el puesto</label>
                                <input type="text"
                                  class="form-control" name="puesto" id="" aria-describedby="helpId" placeholder="Ingrese el puesto que desea">
                              </div>
                        </div>
                    </div>
                    <div class="form-row mt-2">
                        
                        <div class="col-12">
                            <div class="form-group">
                                <div class="form-row">
                                    <div class="col"><label for="cv" class="">Curriculum Vitae</label>
                                    </div>
                                </div>
                                
                              <input type="file" class="form-control-file" name="cv" id="input-cv" placeholder="" aria-describedby="fileHelpId">
                              <input type="button" class="btn btn-secondary" value="Seleccionar archivo" onclick="document.getElementById('input-cv').click();" />
                            </div>
                        </div>

                    </div>

<style>
    .recaptcha {
        display: flex;
        flex-direction: row;
        justify-content: center;
        text-align: center;
        width: 100%;
    }

    .g-recaptcha {
        width: 100% !important;
    }

</style>

                    <div class="form-row mt-2">
                        <div class="col recaptcha">
                            <div class="g-recaptcha" data-sitekey="your_site_key"></div>
                            <!-- <small>Recaptcha será implementado y centrado en el futuro</small> -->
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
      <button type="button" class="btn btn-link" href="#">Portal postventa</button>

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