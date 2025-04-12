<?php
require_once('conexion.php'); // Ensure the path is correct and accessible
// $conn = new mysqli("localhost","root","","mimedik");
/// resto del codigo
// header('Content-Type: text/html; charset=utf-8');

// $consul = $mysqli->query("SELECT medico.*, especialidad.descripcion AS especialidad 
// FROM medico 
// JOIN especialidad ON medico.id_especialidad = especialidad.id");


// while ($fill = $consul->fetch_assoc()) {

//     //   echo '<p value="' . $fill['id'] . '">' . $fill['nombres'] . ' --> $' . $fill['id_especialidad'] . ' <smail class="text-red">'.$fill['apellidos'].'</smail>  </p>';
// }
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta charset="UTF-8">

    <title>Mi Medik - Bienvenid@s</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">
    <!-- Icon -->
    <link rel="shortcut icon" href="img/logoIcon.png">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <!-- Icon Font Stylesheet -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" />
    <link rel="stylesheet" href="css/fontawesome.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">


    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Mimedikdiseño Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>
<style>
    #card-Médico {
        display: flex;
        flex-wrap: wrap;
    }

    .team-item {
        width: 100%;
        /* Asegura que cada tarjeta ocupe el 100% del ancho de su contenedor */
        max-width: 300px;
        /* Establece un ancho máximo para las tarjetas */
        height: 430px;
        /* Establece una altura fija para todas las tarjetas */
        margin: 10px;
        /* Espaciado entre tarjetas */
        display: flex;
        flex-direction: column;
        /* Permite que los elementos internos se apilen verticalmente */
    }

    .team-inner {
        flex-grow: 1;
        /* Permite que el contenido interno crezca para llenar el espacio disponible */
    }

    .bg-light {
        flex-shrink: 0;
        /* Evita que la parte inferior de la tarjeta se reduzca */
    }
</style>

<body>
    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <!-- Spinner End -->
    <!-- Navbar & Hero Start -->
    <div class="container-fluid position-relative p-0 montserrat">
        <nav class="navbar navbar-expand-lg navbar-light px-5 px-lg-4 py-3 py-lg-0">
            <a href="" class="navbar-brand p-2">
                <img src="img/Logo.png" alt="Logo">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="fa fa-bars"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav ms-auto py-2">
                    <a href="index.html" class="nav-item nav-link">Inicio</a>
                    <a href="about.html" class="nav-item nav-link">Nosotros</a>
                    <a href="service.html" class="nav-link nav-item">Servicios Médicos</a>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Sedes</a>
                        <div class="dropdown-menu m-0">
                            <a href="sedeSucre.html" class="dropdown-item  ">Mimedik Matriz</a>
                            <a href="sedeBoyaca.html" class="dropdown-item">Mimedik Sucursal</a>
                            <a href="sedeLaboratorio.html" class="dropdown-item">Laboratorio Clínico</a>
                        </div>
                    </div>
                    <a href="team.php" class="nav-item nav-link active">Staff Médico</a>
                    <a href="contact.html" class="nav-item nav-link">Contacto</a>
                </div>
            </div>
        </nav>

        <!-- Header Start -->
        <div class="container-fluid bg-breadcrumb">
            <div class="container text-center py-5" style="max-width: 900px;">
                <h4 class="text-white display-4 mb-4 wow fadeInDown" data-wow-delay="0.1s">Staff Médico</h4>
                <ol class="breadcrumb d-flex justify-content-center mb-0 wow fadeInDown" data-wow-delay="0.3s">
                    <li class="breadcrumb-item"><a href="index.html" style=" color:#e3007e !important;">Inicio</a></li>
                    <li class="breadcrumb-item text-white">Staff Médico</li>
                </ol>
            </div>
        </div>
        <!-- Header End -->
    </div>
    <!-- Navbar & Hero End -->

    <!-- Modal Search Start -->
    <div class="modal fade" id="searchModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-fullscreen">
            <div class="modal-content rounded-0">
                <div class="modal-header">
                    <h4 class="modal-title mb-0" id="exampleModalLabel">Search by keyword</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body d-flex align-items-center">
                    <div class="input-group w-75 mx-auto d-flex">
                        <input type="search" class="form-control p-3" placeholder="keywords" aria-describedby="search-icon-1">
                        <span id="search-icon-1" class="input-group-text btn border p-3"><i class="fa fa-search text-white"></i></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal Search End -->

    <!-- Team Start -->
    <div class="container-fluid team py-3">
        <div class="  py-5">
            <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 900px;">
                <h2 class="display-5 mb-3">Contamos con los Médicos más capacitados.</h2>
                <h4 class="text-uppercase text-primary">Médicos</h4>
                <p class="mb-2 fs-5 text-black fadeInLeft animated" data-animation="fadeInLeft" data-delay="1.5s" style="animation-delay: 1.5s;"> Encuentra un médico según tu necesidad, en <strong> Mimedik</strong> contamos con un staff altamente capacitado para atenderte. </p>
                <h4>Buscar Médico.</h4>
                <input type="text" id="search" onKeyDown="Buscar()" class="form-control animated"  data-animation="fadeInLeft" data-delay="1.5s" placeholder="Buscar...">
                <div id="results" class="row mt-2"></div>
            </div>
            <div class="row g-1" id="card-Médico" style="justify-content: center;">
                <?php
                //  $sql = "SELECT Médico.*, especialidad.descipcion as especialidad  FROM Médico, especialidad WHERE  Médico.id_especialidad = especialidad.id"; // Cambia 'cards' por tu tabla
                $sql = "SELECT * FROM medicos"; // Cambia 'cards' por tu tabla
                // $result = mysqli_query($conn, $sql);
                $consul = $mysqli->query($sql);
                if (mysqli_num_rows($consul) > 0) {
                    while ($row = mysqli_fetch_assoc($consul)) {
                        echo ' <div class="col-sm-4 col-lg-3 col-xl-2 wow fadeInUp" data-wow-delay="0.4s" id="card-Médico">';
                        echo '<div class="team-item p-2">';
                        echo '<div class="team-inner rounded">';
                        echo '<div class="team-img">';
                        echo '<img src="img/team-3.jpg" class="img-fluid rounded-top w-100" alt="Image">';
                        echo '<div class="team-share">';
                        echo '<a class="btn btn-secondary btn-md-square rounded-pill text-white mx-1" href=""><i class="fas fa-share-alt"></i></a>';
                        echo '</div>';
                        echo '<div class="team-icon rounded-pill py-2 px-2">';
                        echo '<a class="btn btn-secondary btn-sm-square rounded-pill mx-1" href=""><i class="fab fa-facebook-f"></i></a>';
                        echo '<a class="btn btn-secondary btn-sm-square rounded-pill me-1" href=""><i class="fab fa-twitter"></i></a>';
                        echo '<a class="btn btn-secondary btn-sm-square rounded-pill me-1" href=""><i class="fab fa-linkedin-in"></i></a>';
                        echo '<a class="btn btn-secondary btn-sm-square rounded-pill me-1" href=""><i class="fab fa-instagram"></i></a>';
                        echo '</div>';
                        echo '</div>';
                        echo '<div class="bg-light rounded-bottom text-center py-2 px-1">';
                        echo '<h6 class="mb-1">' . $row['nombre'] . '</h6>';
                        echo '<small class="mb-2">' . $row['especialidad'] . '</small>';
                        echo '<small class="mb-0">' . $row['horario'] . '</small>';
                        echo '</div>';
                        echo '</div>';
                        echo '</div>';
                        echo '</div>';
                    }
                } else {
                    echo '<p>No se encontraron resultados.</p>';
                }
                ?>
                <!-- //aqui  el card de Médicos -->
            </div>
        </div>
    </div>
    <!-- Team End -->

    <!-- Footer Start -->
    <div class="container-fluid footer wow fadeIn" data-wow-delay="0.2s">
        <div class="container pt-4">
            <div class="row g-5 mb-2 align-items-center">
                <div class="col-lg-7">
                    <div class="position-relative mx-auto">
                        <img src="img/Logo.png" alt="Logo" class="w-25">
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="d-flex align-items-center justify-content-center justify-content-lg-end">
                        <a class="btn btn-secondary btn-md-square rounded-circle me-3" href="#"><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-secondary btn-md-square rounded-circle me-3" href="#"><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-secondary btn-md-square rounded-circle me-3" href="#"><i class="fab fa-instagram"></i></a>
                        <a class="btn btn-secondary btn-md-square rounded-circle me-0" href="#"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
            </div>
            <div class="row g-5 mt-2">
                <div class="col-md-6 col-lg-4">
                    <div class="footer-item">
                        <h3 class="text-white mb-4"><i class="fas fa-map text-primary me-3"></i>SEDE MATRIZ SUCRE</h3>
                        <p class="text-white font-sm">Sucre entre Guayas y 9 de Mayo (diagonal a almacenes TÍA)
                            TELF. (07) 2924324 – EXT. 100 / 099 275 6837
                            LUNES A VIERNES – 08H00 A 20H00
                            SÁBADO – 08H00 A 15H00
                        </p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="footer-item text-center">
                        <h3 class="text-white mb-4"><i class="fas fa-map text-primary me-3"></i>SEDE SUCURSAL BOYACÁ </h3>
                        <p class="text-white font-sm">Boyacá entre Tarqui y Colón (frente a la puerta de emergencias del HTD)
                            TELF. (07) 2933962 – EXT. 200 / 096 292 0333
                            LUNES A VIERNES – 06H30 A 22H00
                            SABADOS – 07H00 A 20H00
                            DOMINGO – 07H00 A 15H00
                        </p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="footer-item text-center">
                        <h3 class="text-white mb-4"><i class="fas fa-map text-primary me-3"></i> LABORATORIO CLÍNICO</h3>
                        <p class="text-white font-sm">Buenavista y Boyacá (junto a farmacia Cruz Azul)
                            TELF. (07) 2960355 – EXT. 124 / 097 917 1127
                            LUNES A VIERNES – 06H30 A 22H00
                            SÁBADO – 07H00 A 20H00 - DOMINGO – 07H00 A 15H00
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->



    <!-- Copyright Start -->
    <div class="container-fluid copyright py-4">
        <div class="container">
            <div class="row g-4 align-items-center">
                <div class="col-md-6 text-center text-md-start mb-md-0">
                    <span class="text-body"><a href="mimedik.ec" class="border-bottom text-white"><i class="fas fa-copyright text-light me-2"></i> Copyright 2025 mimedik</a> <span class="text-white"> Todos los derechos reservados.</span></span>
                    <a href="https://api.whatsapp.com/send?phone=593983365596&amp;text=Hola,%20 estoy%20en%20Mimedik%20enlinea.%20Quisiera%20m%C3%A1s%20informaci%C3%B3n." rel="noreferrer noopener" target="_blank" class=" floatwp"><svg class="floatwp" fill="#fff" height="800px" width="800px" version="1.1" id="Layer_1" viewBox="0 0 308 308">
                            <g id="XMLID_468_">
                                <path id="XMLID_469_" d="M227.904,176.981c-0.6-0.288-23.054-11.345-27.044-12.781c-1.629-0.585-3.374-1.156-5.23-1.156
                        c-3.032,0-5.579,1.511-7.563,4.479c-2.243,3.334-9.033,11.271-11.131,13.642c-0.274,0.313-0.648,0.687-0.872,0.687
                        c-0.201,0-3.676-1.431-4.728-1.888c-24.087-10.463-42.37-35.624-44.877-39.867c-0.358-0.61-0.373-0.887-0.376-0.887
                        c0.088-0.323,0.898-1.135,1.316-1.554c1.223-1.21,2.548-2.805,3.83-4.348c0.607-0.731,1.215-1.463,1.812-2.153
                        c1.86-2.164,2.688-3.844,3.648-5.79l0.503-1.011c2.344-4.657,0.342-8.587-0.305-9.856c-0.531-1.062-10.012-23.944-11.02-26.348
                        c-2.424-5.801-5.627-8.502-10.078-8.502c-0.413,0,0,0-1.732,0.073c-2.109,0.089-13.594,1.601-18.672,4.802
                        c-5.385,3.395-14.495,14.217-14.495,33.249c0,17.129,10.87,33.302,15.537,39.453c0.116,0.155,0.329,0.47,0.638,0.922
                        c17.873,26.102,40.154,45.446,62.741,54.469c21.745,8.686,32.042,9.69,37.896,9.69c0.001,0,0.001,0,0.001,0
                        c2.46,0,4.429-0.193,6.166-0.364l1.102-0.105c7.512-0.666,24.02-9.22,27.775-19.655c2.958-8.219,3.738-17.199,1.77-20.458
                        C233.168,179.508,230.845,178.393,227.904,176.981z"></path>
                                <path id="XMLID_470_" d="M156.734,0C73.318,0,5.454,67.354,5.454,150.143c0,26.777,7.166,52.988,20.741,75.928L0.212,302.716
                        c-0.484,1.429-0.124,3.009,0.933,4.085C1.908,307.58,2.943,308,4,308c0.405,0,0.813-0.061,1.211-0.188l79.92-25.396
                        c21.87,11.685,46.588,17.853,71.604,17.853C240.143,300.27,308,232.923,308,150.143C308,67.354,240.143,0,156.734,0z
                        M156.734,268.994c-23.539,0-46.338-6.797-65.936-19.657c-0.659-0.433-1.424-0.655-2.194-0.655c-0.407,0-0.815,0.062-1.212,0.188
                        l-40.035,12.726l12.924-38.129c0.418-1.234,0.209-2.595-0.561-3.647c-14.924-20.392-22.813-44.485-22.813-69.677
                        c0-65.543,53.754-118.867,119.826-118.867c66.064,0,119.812,53.324,119.812,118.867
                        C276.546,215.678,222.799,268.994,156.734,268.994z"></path>
                            </g>
                        </svg></a>
                </div>

            </div>
        </div>
    </div>
    <!-- Copyright End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-secondary btn-lg-square rounded-circle back-to-top" style="display: none;"><i class="fa fa-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>


    <!-- Mimedikdiseño Javascript -->
    <script src="js/main.js"></script>
    <script type="text/javascript">
        function Buscar() {
            var query = $('#search').val();
            console.log(query, 'ingreso');
            $.ajax({
                url: 'consulta.php',
                method: 'POST',
                data: {
                    query: query
                },
                success: function(data) {
                    $('#card-Médico').html("");
                    console.log(data, 'dataaaaaaaaa');

                    $('#card-Médico').html(data);
                }
            });
        };
    </script>
</body>

</html>