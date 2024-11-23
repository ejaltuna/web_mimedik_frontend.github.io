<?php

	if(1==1){
		// $variable=addslashes(trim($_GET['seguridad']));

		if(2==2){
 
						$hostname="localhost";
						$username="root";
                        $password="";
              	        $database="mimedik"; 
              	        // $database="farmacias"; 
						 
	$mysqli = new mysqli($hostname, $username,$password, $database ,3306);

		

	if ($mysqli -> connect_errno) {

die( "Fallo la conexio: (" . $mysqli -> mysqli_connect_errno() 

. ") " . $mysqli -> mysqli_connect_error());

}

else{

	echo "";

}


	}else{
die( "Fallo la conexion parametro invalido: 1 "); 


	}
		}else{
die( "Fallo la conexion parametro invalido: 2 "); 


		}

		
						

?>