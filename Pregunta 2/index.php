<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Workflow - INF324</title>
    <link href="./css/bootstrap.min.css" rel="stylesheet" />
    <link href="./css/style.css" rel="stylesheet" />

</head>

<body>
    <div class="container py-5 h-100 ">
        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-xl-10">
                <div class="card rounded text-black">
                    <div class="row g-0 border border-secondary">

                        <div class="  col-lg-6 text-black">
                            <div class="card-body  p-md-5 mx-md-4">

                                <div class="text-center">
                                    <img src="./img/2.jpeg" style="width: 160px;" alt="logo"><br><br>
                                    <h4 class="mt-1 mb-5 pb-1">INICIAR SESIÓN</h4>
                                </div>
                                <form action="indexcontrol.php" method="GET">
                                    <div class="form-outline mb-4">
                                        <input type="text" id="form2Example11" class="form-control" placeholder="Usuario" name="usuario" />
                                        <label class="form-label visually-hidden" for="form2Example11">Usuario</label>
                                    </div>

                                    <div class="form-outline mb-4">
                                        <input type="password" id="form2Example22" class="form-control" placeholder="Contraseña" name="password" />
                                        <label class="form-label visually-hidden" for="form2Example22">Password</label>
                                    </div>

                                    <div class="text-center pt-1 mb-5 pb-1">
                                        <button class="btn btn-primary btn-block  mb-3" type="submit">INGRESAR</button>

                                    </div>
                                </form>

                            </div>
                        </div>
                        <div class="text-center col-lg-6  d-flex  justify-content-center align-items-center bg-light bg-gradient">
                            <img src="./img/fac.jpg" alt="" width="100%" height="100%">
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>