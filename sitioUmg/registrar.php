<?php 

include("con_db.php");

if (isset($_POST['register'])) {
    if (strlen($_POST['email']) >= 1  ) {
	    $email = trim($_POST['email']);
	    $password = trim($_POST['password']);
	    $consulta = "INSERT INTO datos(email, pasword) VALUES ('$email','$password')";
	    $resultado = mysqli_query($conex,$consulta);
	    if ($resultado) {
	    	?> 
	    	<h3 class="ok">¡Te has logeado correctamente!</h3>
           <?php
	    } else {
	    	?> 
	    	<h3 class="bad">¡Ups ha ocurrido un error!</h3>
           <?php
	    }
    }   else {
	    	?> 
	    	<h3 class="bad">¡Por favor complete los campos!</h3>
           <?php
    }
}

?>