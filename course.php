<?php
include 'assets/navbar.php';
$connection = mysqli_connect ("localhost","root","","e_classe_db");
$queery = "SELECT * FROM coures ";
$results = mysqli_query($connection,$queery);
while($row = mysqli_fetch_assoc($results)){
?>



<?php
}
include './js.php';
?>