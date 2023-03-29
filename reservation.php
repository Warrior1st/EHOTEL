<?php
include "cnx.php";
if(isset($_POST["hotel"]) && isset($_POST["adresse"]) && isset($_POST["caracteristique"])){
    $hotel=$_POST["hotel"];
    $adresse=$_POST["adresse"];
    $caract=$_POST["caracteristique"];

    $req= mysqli_query($link,"select * from hotel where nom like '%$hotel%' or adresse like '%$adresse%'");
    while($row = mysqli_fetch_assoc($req)) {
        $name = $row['nom'];
        $phone = $row['phone'];
    
        echo "<div>";
        echo "<h2>$name</h2>";
        echo "<p>$phone</p>";
        echo "</div>";
    }
}
?>
