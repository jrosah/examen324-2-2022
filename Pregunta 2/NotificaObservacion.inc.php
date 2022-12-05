  
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
            <div class="card-header bg-danger text-white">
                <center>
                    <h1>Notificación Observaciones</h1>
                    <hr>
                </center>
            </div>
            <div class="card-body text-start">

                <h3 class="text-dark text-center">Se encontro alguna de las siguientes observaciones!</h3>
                <h4>No cuenta con algun documento de la siguiente lista:</h4>
                <br>
                <ul>
                <li>Certificado de nacimiento Original. </li>
                <li> Fotocopia de Cédula de Identidad.</li>
                <li> Fotocopia LEGALIZADA de Título de Bachiller.</li>
                <li>Certificado de Habilitación - Curso Preuniversitario o Prueba de Suficiencia
                    Académica</li>
                <li> Fotografía fondo celeste claro 3x3</li>
                <li> Ficha personal Impreso a colores (este documento se genera al momento de
                    realizar el registro en http://sia.umsa.bo/registroSIA ). </li></ul>
            </div>

             
        </div>

    </div>



    <script src="./js/bootstrap.bundle.min.js"></script>
</body>

</html>