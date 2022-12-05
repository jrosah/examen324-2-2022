  
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
            <div class="card-header bg-light ">
                <center>
                    <h1>Verificación de Documentos Completos</h1>
                    <hr>
                </center>
            </div>
            <div class="card-body text-center">

                <h4>REVISIÓN DOCUMENTOS ALUMNOS NUEVOS</h4>

                <div class="container-md mt-5   ">
                    <div class="row text-start">
                        <div class="col-md-6 offset-md-3">
                            <div class="mb-5">
                                <label class="form-check-label" for="flexCheckDefault"> Certificado de Nacimiento Original</label>
                                <input type="checkbox" class="btn-check" id="btn-check-outlined" autocomplete="off">
                                <label class="btn btn-outline-success float-end" for="btn-check-outlined">Documento Revisado</label><br>
                            </div>
                            <div class="mb-5">
                                <label class="form-check-label" for="flexCheckDefault"> Fotocopia de Cédula de Identidad</label>
                                <input type="checkbox" class="btn-check" id="btn-check-outlined1" autocomplete="off">
                                <label class="btn btn-outline-success float-end" for="btn-check-outlined1">Documento Revisado</label><br>
                            </div>
                            <div class="mb-5">
                                <label class="form-check-label" for="flexCheckDefault"> Fotocopia LEGALIZADA de Título de Bachiller </label>
                                <input type="checkbox" class="btn-check" id="btn-check-outlined2" autocomplete="off">
                                <label class="btn btn-outline-success float-end" for="btn-check-outlined2">Documento Revisado</label><br>
                            </div>
                            <div class="mb-5">
                                <label class="form-check-label" for="flexCheckDefault"> Certificado de Habilitación - Curso Preuniversitario</label>
                                <input type="checkbox" class="btn-check" id="btn-check-outlined3" autocomplete="off">
                                <label class="btn btn-outline-success  float-end" for="btn-check-outlined3">Documento Revisado</label><br>
                            </div>
                            <div class="mb-5">
                                <label class="form-check-label" for="flexCheckDefault"> Fotografía fondo celeste claro 3x3 </label>
                                <input type="checkbox" class="btn-check" id="btn-check-outlined4" autocomplete="off">
                                <label class="btn btn-outline-success float-end" for="btn-check-outlined4">Documento Revisado</label><br>
                            </div>
                            <div class="mb-5">
                                <label class="form-check-label" for="flexCheckDefault"> Ficha personal Impreso a colores </label>
                                <input type="checkbox" class="btn-check" id="btn-check-outlined5" autocomplete="off">
                                <label class="btn btn-outline-success float-end" for="btn-check-outlined5">Documento Revisado</label><br>
                            </div>
                        </div>
                    </div>
                    
                </div>






            </div>

             
        </div>

    </div>



    <script src="./js/bootstrap.bundle.min.js"></script>
</body>

</html>