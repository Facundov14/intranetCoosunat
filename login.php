<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <!-- Añadir el CSS de Bootstrap -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">

    <link rel="stylesheet" href="css/login.css">
</head>

<body>

    <div class="container d-flex align-items-center justify-content-center" style="min-height: 100vh;">
        <div class="row">
            <!-- Div para la imagen -->
            <div class="col-md-6 p-0">
                <img src="assets/img-login.jpg" alt="Imagen de login" class="img-fluid w-100 h-100"
                    style="object-fit: cover;">
            </div>


            <!-- Div para el formulario y footer -->
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body text-center">
                        <div class="mb-4">
                            <h1>¡Hola Socio!</h1>
                        </div>
                        <h2 class="mb-2">Accede a tu cuenta</h2>
                        <h3 class="mb-2">Ingrese sus datos</h3>
                        <form>
                            <div class="form-group text-left mb-3">
                                <label for="correo">Correo Electrónico</label>
                                <input type="email" class="form-control" id="correo"
                                    placeholder="Ingrese su correo electrónico" required>
                            </div>
                            <div class="form-group text-left mb-3">
                                <label for="password">Contraseña</label>
                                <input type="password" class="form-control" id="password"
                                    placeholder="Ingrese su contraseña" required>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-6">
                                    <button type="submit" class="btn btn-primary">Ingresar</button>
                                </div>
                                <div class="col-sm-6 text-right">
                                    <button type="button" class="btn btn-secondary">Aún no tengo cuenta</button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <!-- Footer  -->
                    <div class="footer">
                        <div class="container">
                            <div class="row align-items-center">
                                <div class="col">
                                    <i class="fas fa-phone-alt"></i> Contactanos
                                </div>
                                <div class="col text-center">
                                    ¿Olvidaste tu contraseña?
                                </div>
                                <div class="col text-right">
                                    <i class="fas fa-map-marker-alt"></i> Ubícanos
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>



        </div>
    </div>
    </div>



    <!-- Añadir el JS de Bootstrap y sus dependencias -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>