<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página de la Empresa</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/home.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
</head>

<body>

    <div class="container-fluid d-flex flex-column justify-content-center align-items-center" style="height: 100vh;">
        <div class="row w-100 upper-section-border">
            <!-- Sección superior -->
            <div class="col-2 text-left right-section-border">
                <img src="URL_DEL_LOGO" alt="Logo de la Empresa" class="img-fluid" style="max-width: 200px;">
            </div>
            <div class="col-10 text-left ">
                <h1>Bienvenido, <span id="nombreUsuario">Nombre del Usuario</span></h1>
            </div>
        </div>
        <div class="row w-100 mt-5">
            <!-- Sección inferior -->
            <div class="col-2">
                <!-- Menú -->
                <nav>
                    <ul class="list-unstyled mb-3">
                        <li class="mb-2">
                            <i class="fas fa-chevron-down"></i> Tramites Depósito a Plazo Fijo
                        </li>
                        <li class="ml-3 mb-1">
                            <button type="button" class="btn btn-link p-0" style="text-align: left;">Apertura de Cuenta
                                DPF</button>
                        </li>
                        <li class="ml-3">
                            <button type="button" class="btn btn-link p-0" style="text-align: left;">Cancelación de
                                Cuenta DPF</button>
                        </li>
                    </ul>
                    <ul class="list-unstyled mb-3">
                        <li class="mb-2">
                            <i class="fas fa-chevron-down"></i> Devoluciones
                        </li>
                        <li class="ml-3">
                            <button type="button" class="btn btn-link p-0" style="text-align: left;">Devolución por
                                descuento</button>
                        </li>
                    </ul>
                    <ul class="list-unstyled mt-2 ml-4">
                        <button type="submit" class="btn btn-secondary">Salir</button>
                    </ul>
                </nav>
            </div>
            <div class="col-10">
                <!-- Formulario -->
                <form>
                    <div class="form-group">
                        <label for="correo">Correo Electrónico</label>
                        <input type="email" class="form-control" id="correo"
                            placeholder="Ingrese su correo electrónico">
                    </div>
                    <button type="submit" class="btn btn-primary">Enviar Código</button>
                </form>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>