<?php 
require_once('conexion.php'); // Ensure the path is correct and accessible
// $conn = new mysqli("localhost","root","","mimedik");
/// resto del codigo
$consul = $mysqli->query("select medico.*, especialidad.descipcion as especialidad  from medico, especialidad WHERE  medico.id_especialidad = especialidad.id");

                          
while ($fill = $consul->fetch_assoc()) {
   
//   echo '<p value="' . $fill['id'] . '">' . $fill['nombres'] . ' --> $' . $fill['id_especialidad'] . ' <smail class="text-red">'.$fill['apellidos'].'</smail>  </p>';
}
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
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
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"/>
    <link rel="stylesheet" href="css/fontawesome.css"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">


    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Mimedikdiseño Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

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
                        <a href="service.html" class="nav-link nav-item">Servicios Medicos</a>
                        <!-- <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Servicios Medicos</a>
                            <div class="dropdown-menu m-0">
                                 <a href="sedeSucre.html" class="dropdown-item active">SUCRE</a>
                                <a href="sedeBoyaca.html" class="dropdown-item">BOYACÁ</a>
                                <a href="sedeLaboratorio.html" class="dropdown-item">LABORATORIO</a>
                                
                            </div>
                        </div> -->
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Sedes</a>
                            <div class="dropdown-menu m-0">
                                 <a href="sedeSucre.html" class="dropdown-item active">SUCRE</a>
                                <a href="sedeBoyaca.html" class="dropdown-item">BOYACÁ</a>
                                <a href="sedeLaboratorio.html" class="dropdown-item">LABORATORIO</a>
                                
                            </div>
                        </div>
                        <a href="team.php" class="nav-item nav-link active">Staff Medico</a>
                        <!-- <a href="service.html" class="nav-item nav-link">Servicios Medicos</a> -->
                        <!-- <a href="blog.html" class="nav-item nav-link">Blog</a> -->
                     
                        <a href="contact.html" class="nav-item nav-link">Contact</a>
                    </div>
                 
                </div>
            </nav>

            <!-- Header Start -->
            <div class="container-fluid bg-breadcrumb">
                <div class="container text-center py-5" style="max-width: 900px;">
                    <h4 class="text-white display-4 mb-4 wow fadeInDown" data-wow-delay="0.1s">Staff Medico</h4>
                    <ol class="breadcrumb d-flex justify-content-center mb-0 wow fadeInDown" data-wow-delay="0.3s">
                        <li class="breadcrumb-item"><a href="index.html">Inicio</a></li> 
                        <li class="breadcrumb-item ">Staff Medico</li>
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
        <div class="container-fluid team py-5">
            <div class="container py-5">
                <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
                    <h4 class="text-uppercase text-primary">Medicos</h4>
                    <h1 class="display-3 text-capitalize mb-3">Contamos con los medicos más capacitados.</h1>
                    <p class="mb-5 fs-5 text-black fadeInLeft animated" data-animation="fadeInLeft" data-delay="1.5s" style="animation-delay: 1.5s;"> Encuentra un médico según tu necesidad, en <strong> Mimedik</strong> contamos con un staff altamente capacitado para atenderte. </p> 
                    <h1>Buscar medico</h1>
                    <input type="text" id="search" onKeyDown="Buscar()" class="form-control" placeholder="Buscar...">
                    <div id="results" class="row mt-3"></div>
                </div>
                
                 
                
              
                <div class="row g-4" id="card-Medico">
                    <?php 
                    //  $sql = "SELECT medico.*, especialidad.descipcion as especialidad  FROM medico, especialidad WHERE  medico.id_especialidad = especialidad.id"; // Cambia 'cards' por tu tabla
                     $sql = "SELECT * FROM medicos"; // Cambia 'cards' por tu tabla
                     // $result = mysqli_query($conn, $sql);
                     $consul = $mysqli->query($sql);
                 
                     if (mysqli_num_rows($consul) > 0) {
                         while ($row = mysqli_fetch_assoc($consul)) {
                             echo ' <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.4s" id="card-Medico">';
                             echo '<div class="team-item p-4">';
                             echo '<div class="team-inner rounded">';
                                 echo '<div class="team-img">';
                                     echo '<img src="img/team-2.jpg" class="img-fluid rounded-top w-100" alt="Image">';
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
                                     echo '<p class="mb-2">' . $row['especialidad'] . '</p>';
                                     echo '<p class="mb-0">' . $row['horario'] . '</p>';
                                 echo '</div>';
                             echo '</div>';
                         echo '</div>';
                         echo '</div>';
                          
                         }
                     } else {
                         echo '<p>No se encontraron resultados.</p>';
                     }
                    ?>
                   <!-- //aqui  el card de medicos -->
                </div>
            </div>
        </div>
        <!-- Team End -->

            <!-- Footer Start -->
            <div class="container-fluid footer  wow fadeIn" data-wow-delay="0.2s">
                <div class="container py-5">
                    <div class="row g-5 mb-5 align-items-center">
                        <div class="col-lg-7">
                            <div class="position-relative mx-auto">
                                <img src="img/logo-white.png" alt="Logo" class="w-25">
                            </div>
                        </div>
                        <div class="col-lg-5">
                            <div class="d-flex align-items-center justify-content-center justify-content-lg-end">
                                <a class="btn btn-secondary btn-md-square rounded-circle me-3" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-secondary btn-md-square rounded-circle me-3" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-secondary btn-md-square rounded-circle me-3" href=""><i class="fab fa-instagram"></i></a>
                                <a class="btn btn-secondary btn-md-square rounded-circle me-0" href=""><i class="fab fa-linkedin-in"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="row g-5">
                        <div class="col-md-6 col-lg-6 col-xl-3">
                            <div class="footer-item d-flex flex-column">
                                <div class="footer-item">
                                    <h3 class="text-white mb-4"><i class="fas fa-map text-primary me-3"></i>SUCRE</h3>
                                    <p class="  text-white">Sucre entre Guayas y 9 de Mayo (diagonal a almacenes TÍA)
                                        TELF. (07) 2924324 – EXT. 100
                                        LUNES A VIERNES – 08H00 A 20H00
                                        SÁBADO – 08H00 A 15H00
                                        
                                         </p>
                                </div>
                             
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-6 col-xl-3">
                            <div class="footer-item d-flex flex-column">
                                <div class="footer-item text-center">
                                    <h3 class="text-white mb-4"><i class="fas fa-map  text-primary me-3"></i> BOYACÁ</h3>
                                    <span class="p-1 text-white">Boyacá entre Tarqui y Colón (frente a la puerta de emergencias del HTD) </span>
                                    <span class="text-white">  TELF. (07) 2924324 – EXT. 200  (07) 2933962</span>
                                    <span class="text-white">  LUNES A SÁBADO – 07H00 A 20H00</span>
                                    <span class="text-white">    DOMINGO – 08H00 A 15H00</span>
                                         
                                </div> 
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-6 col-xl-3">
                            <div class="footer-item d-flex flex-column">
                                <div class="footer-item text-center">
                                    <h3 class="text-white mb-4"><i class="fas fa-map  text-primary me-3"></i> LABORATORIO</h3>
                                    <span class="p-1 text-white">Buenavista y Boyacá ( junto a farmacia Cruz Azul)</span>
                                    <span class="text-white"> TELF. (07) 2924324 – EXT. 124 (07) 2960355</span>
                                    <span class="text-white"> LUNES A VIERNES – 07H00 A 22H00</span>
                                    
                                    <span class="text-white"> SÁBADO – 07H00 A 20H00 - DOMINGO – 08H00 A 15H00</span>
                                         
                                </div> 
                            </div>                        
                        </div>
                        <!-- <div class="col-md-6 col-lg-6 col-xl-3">
                            <div class="footer-item d-flex flex-column">
                                <h4 class="text-white mb-4">Contact Info</h4>
                                <a href="#"><i class="fa fa-map-marker-alt me-2"></i> 123 Street, New York, USA</a>
                                <a href="mailto:info@example.com"><i class="fas fa-envelope me-2"></i> info@example.com</a>
                                <a href="mailto:info@example.com"><i class="fas fa-envelope me-2"></i> info@example.com</a>
                                <a href="tel:+012 345 67890"><i class="fas fa-phone me-2"></i> +012 345 67890</a>
                                <a href="tel:+012 345 67890" class="mb-3"><i class="fas fa-print me-2"></i> +012 345 67890</a>
                            </div>
                        </div> -->
                    </div>
                </div>
            </div>
            <!-- Footer End -->

        
       
        <!-- Copyright Start -->
        <div class="container-fluid copyright py-4">
            <div class="container">
                <div class="row g-4 align-items-center">
                    <div class="col-md-6 text-center text-md-start mb-md-0">
                        <span class="text-body"><a href="#" class="border-bottom text-white"><i class="fas fa-copyright text-light me-2"></i> Copyright 2024 MIMEDIK S.A</a> Todos los derechos reservados.</span> 
                    </div>
                   
                </div>
            </div>
        </div>
        <!-- Copyright End --> 


        <!-- Back to Top -->
        <a href="#" class="btn btn-secondary btn-lg-square rounded-circle back-to-top"><i class="fa fa-arrow-up"></i></a>   

        
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
    <script  type="text/javascript">
    

  function Buscar(){
        var query = $('#search').val();
        console.log(query,'ingreso');
        $.ajax({
            url: 'consulta.php',
            method: 'POST',
            data: {query: query},
            success: function(data){
                $('#card-Medico').html("");
                console.log(data,'dataaaaaaaaa');

                $('#card-Medico').html(data);
            }
        });
    };
    </script>
    </body>

</html>