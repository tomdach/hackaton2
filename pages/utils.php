<?php 


function resetId($database, $table){

	$cnx = mysqli_connect("localhost", "root", "admin", "$database") or die("error=".mysqli_connect_errno());

mysqli_query($cnx, "ALTER TABLE $table DROP id");

mysqli_query($cnx, "ALTER TABLE $table ADD `id` INT NOT NULL AUTO_INCREMENT PRIMARY KEY FIRST");

}


?>