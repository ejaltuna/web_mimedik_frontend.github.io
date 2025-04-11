<?php
include 'conexion.php';

if (isset($_POST['query'])) {
 
    $query = addslashes($_POST['query']);
    $sql = "SELECT * FROM medicos WHERE nombre LIKE '%$query%'"; // Cambia 'cards' por tu tabla
    // $sql = "SELECT Médico.*, especialidad.descipcion as especialidad  FROM Médico, especialidad WHERE Médico.nombres LIKE '%$query%' AND Médico.id_especialidad = especialidad.id"; // Cambia 'cards' por tu tabla
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
}
?>