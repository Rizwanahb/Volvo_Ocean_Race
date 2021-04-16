<?php
$username="root"; // brugernavn
$password="";   //adgangskode
$host="localhost"; // localhost (XAMPP) 
$database="volvo_ocean_race"; //  MariaDB  database

$conn = mysqli_connect("$host","$username","$password", "$database");

if (!$conn) {
	echo "Connection failed!";
}

?>