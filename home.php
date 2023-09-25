<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página de la Empresa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="css/home.css">
</head>

<body>

    <div class="container-fluid d-flex flex-column justify-content-center align-items-center" style="height: 100vh;">
        <div class="row w-100 upper-section-border" id="upper-desktop">
            <!-- Sección superior -->
            <div class="col-2 text-left right-section-border d-flex justify-content-center align-items-center">
                <img src="assets/logonavbar.png" alt="Logo de la Empresa" class="img-fluid">
            </div>
            <div class="col-10 text-left ">
                <h1>Bienvenido <span id="nombreUsuario">a Intranet Coosunat</span></h1>
            </div>
        </div>

        <div class="row w-100 upper-section-border" id="upper-movil">
            <!-- Sección superior movil-->
            <div class="col-12 text-left  mt-2">
                <h1>Bienvenido <span id="nombreUsuario">a Intranet Coosunat</span></h1>
            </div>
        </div>

        <div class="row w-100 bottom-section-color">
            <!-- Sección inferior -->
            <div class="col-2 p-0 m-0">
                <!-- Botón del Drawer para dispositivos móviles -->
                <button class="btn btn-primary d-md-none" type="button" id="btn-drawer" data-bs-toggle="offcanvas"
                    data-bs-target="#myDrawer" aria-controls="myDrawer">
                    <i class="fa-solid fa-bars"></i>
                </button>

                <!-- Contenido del Drawer para dispositivos móviles -->
                <div class="offcanvas offcanvas-start d-md-none" tabindex="-1" id="myDrawer">

                    <div class="offcanvas-body">

                        <nav>
                            <ul class="mb-3 p-0">
                                <li class="mb-2 menu-section" data-bs-toggle="collapse" data-bs-target="#tramites"
                                    style="cursor: pointer;">
                                    <i class="fas fa-chevron-down"></i> Tramites Depósito a Plazo Fijo
                                </li>
                                <div id="tramites" class="collapse ms-5">
                                    <li class="mb-1">
                                        <button type="button" class="btn btn-link custom-btn p-0"
                                            style="text-align: left;">Apertura de
                                            Cuenta DPF</button>
                                    </li>
                                    <li>
                                        <button type="button" class="btn btn-link custom-btn p-0"
                                            style="text-align: left;">Cancelación
                                            de
                                            Cuenta DPF</button>
                                    </li>
                                </div>
                            </ul>
                            <ul class="p-0">
                                <li class="mb-2 menu-section" data-bs-toggle="collapse" data-bs-target="#devoluciones"
                                    style="cursor: pointer;">
                                    <i class="fas fa-chevron-down"></i> Devoluciones
                                </li>
                                <div id="devoluciones" class="collapse ms-5">
                                    <li>
                                        <button type="button" class="btn btn-link custom-btn p-0"
                                            style="text-align: left">Devolución
                                            por
                                            descuento</button>
                                    </li>
                                </div>
                            </ul>
                            <ul class="p-0">
                                <li class="mb-2 menu-section" data-bs-toggle="collapse" data-bs-target="#prestamos"
                                    style="cursor: pointer;">
                                    <i class="fas fa-chevron-down"></i>Prestamos
                                </li>
                                <div id="prestamos" class="collapse ms-5">
                                    <li class="mb-1">
                                        <button type="button" class="btn btn-link custom-btn p-0"
                                            style="text-align: left">Autentificación
                                            Biometrica</button>
                                    </li>
                                    <li>
                                        <button type="button" class="btn btn-link custom-btn p-0"
                                            style="text-align: left">Firma
                                            Digital</button>
                                    </li>
                                    <li>
                                        <button type="button" class="btn btn-link custom-btn p-0"
                                            style="text-align: left">Solicitud de
                                            Descuento</button>
                                    </li>
                                </div>
                            </ul>
                            <ul class="list-unstyled">
                                <li class="menu-section">
                                    <button type="submit" class="btn btn-salir">Salir</button>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>

                <!-- Contenido del menú para pantallas más grandes -->
                <div class="d-none d-md-block">
                    <nav>
                        <ul class="mb-3 p-0">
                            <li class="mb-2 menu-section" data-bs-toggle="collapse" data-bs-target="#tramites"
                                style="cursor: pointer;">
                                <i class="fas fa-chevron-down"></i> Tramites Depósito a Plazo Fijo
                            </li>
                            <div id="tramites" class="collapse ms-5">
                                <li class="mb-1">
                                    <button type="button" class="btn btn-link custom-btn p-0"
                                        style="text-align: left;">Apertura de
                                        Cuenta DPF</button>
                                </li>
                                <li>
                                    <button type="button" class="btn btn-link custom-btn p-0"
                                        style="text-align: left;">Cancelación
                                        de
                                        Cuenta DPF</button>
                                </li>
                            </div>
                        </ul>
                        <ul class="p-0">
                            <li class="mb-2 menu-section" data-bs-toggle="collapse" data-bs-target="#devoluciones"
                                style="cursor: pointer;">
                                <i class="fas fa-chevron-down"></i> Devoluciones
                            </li>
                            <div id="devoluciones" class="collapse ms-5">
                                <li>
                                    <button type="button" class="btn btn-link custom-btn p-0"
                                        style="text-align: left">Devolución
                                        por
                                        descuento</button>
                                </li>
                            </div>
                        </ul>
                        <ul class="p-0">
                            <li class="mb-2 menu-section" data-bs-toggle="collapse" data-bs-target="#prestamos"
                                style="cursor: pointer;">
                                <i class="fas fa-chevron-down"></i>Prestamos
                            </li>
                            <div id="prestamos" class="collapse ms-5">
                                <li class="mb-1">
                                    <button type="button" class="btn btn-link custom-btn p-0"
                                        style="text-align: left">Autentificación
                                        Biometrica</button>
                                </li>
                                <li>
                                    <button type="button" class="btn btn-link custom-btn p-0"
                                        style="text-align: left">Firma
                                        Digital</button>
                                </li>
                                <li>
                                    <button type="button" class="btn btn-link custom-btn p-0"
                                        style="text-align: left">Solicitud de
                                        Descuento</button>
                                </li>
                            </div>
                        </ul>
                        <ul class="list-unstyled">
                            <li class="menu-section down-left-section-border">
                                <button type="submit" class="btn btn-salir">Salir</button>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>

            <div id="carouselContainer" class="col-10 mt-5 mb-5 d-flex flex-column align-items-center">


                <!-- Carrusel de imágenes -->
                <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="assets/logoinferior.png" class="d-block w-100" alt="...">
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>
</body>

</html>