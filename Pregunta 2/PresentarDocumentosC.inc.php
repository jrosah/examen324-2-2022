  
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tramites</title>
    <link href="./css/bootstrap.min.css" rel="stylesheet" />
    <link href="./css/style.css" rel="stylesheet" />
</head>

<body>
    <div class="container">
        <h4> Usuario: <?php echo $usuario; ?> </h4>
        <hr>

    </div>

    <div class="container">

        <div class="card">
            <div class="card-header bg-success text-white">
                <center>
                    <h1>Presentar Documentos</h1>
                    <hr>
                </center>
            </div>
            <div class="card-body text-start">

                <div class="container-md mt-5   ">
                    <div class="row text-start">
                        <div class="col-md-6 offset-md-3">
                                <fieldset>
                                    <label for="disabledTextInput" class="form-label">Usuario</label>
                                    <div class="mb-3">
                                        <input type="text" id="disabledTextInput" class="form-control" placeholder="" value="<?php echo $usuarioc;?>" name="usuarioc">
                                    </div>
                                    <label for="disabledTextInput" class="form-label">Nombre Completo</label>
                                    <div class="mb-3">
                                        <input type="text" id="disabledTextInput" class="form-control" placeholder="" value="<?php echo $nombreCompleto;?>" name="nombreCompleto">
                                    </div>
                                    <label for="disabledTextInput" class="form-label">CI</label>
                                    <div class="mb-3">
                                        <input type="text" id="disabledTextInput" class="form-control" placeholder="" value="<?php echo $ci;?>" name="ci">
                                    </div>
                                    <label for="disabledTextInput" class="form-label">Extensión</label>
                                    <div class="mb-3">
                                        <input type="text" id="disabledTextInput" class="form-control" placeholder="" value="<?php echo $extension;?>" name="extension">
                                    </div>
                                    <label for="disabledTextInput" class="form-label">Direccion</label>
                                    <div class="mb-3">
                                        <input type="text" id="disabledTextInput" class="form-control" placeholder="" value="<?php echo $direccion;?>" name="direccion">
                                    </div>
                                    <label for="disabledTextInput" class="form-label">Correo electrónico</label>
                                    <div class="mb-3">
                                        <input type="text" id="disabledTextInput" class="form-control" placeholder="" value="<?php echo $correo;?>" name="correo">
                                    </div>
                                    <label for="disabledTextInput" class="form-label">Telefono/Celular</label>
                                    <div class="mb-3">
                                        <input type="text" id="disabledTextInput" class="form-control" placeholder="" value="<?php echo $telefono;?>" name="telefono">
                                    </div>
                                    <div class="mb-3">
                                        <div class="mb-3">
                                            <label for="disabledTextInput" class="form-label">Cargue los documentos solicitados</label>

                                            <label for="formFileMultiple" class="form-label"></label>
                                            <input class="form-control" type="file" id="formFileMultiple" multiple>
                                        </div>
                                    </div>
                                </fieldset>
                        </div>
                    </div>

                </div>
            </div>

             
        </div>

    </div>



    <script src="./js/bootstrap.bundle.min.js"></script>
</body>

</html>