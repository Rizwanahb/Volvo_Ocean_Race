<?php
  /*Forsøg på MySQL-serverforbindelse. Koden viser MySQL
    server med standardindstilling (bruger 'root' uden adgangskode) */
include 'config.php';
$con=mysqli_connect("$host","$username","$password", "$database") or die("Server Error");

  
// select query bruges for at hente data af top 5 fra tabel ranking i MYSql
$sql = "SELECT * FROM ranking ORDER BY points DESC";

if($result = mysqli_query($con, $sql)){
    if(mysqli_num_rows($result) > 0){
      //mysqli_fetch_array returnerer en array, der svarer til den hentede row eller null,
      // hvis der ikke er flere rækker til resultatsættet
           while($row = mysqli_fetch_array($result)) 
           {           
           $name[]= $row['team_navn'];
           $points[]= $row['points'];       
           }  }
} else
  {
    echo "ERROR: Could not able to execute $sql. ";
  }
 
// lukker forbindelsen.
mysqli_close($con);
?>
