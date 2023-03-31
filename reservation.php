<?php
include "cnx.php";
if(isset($_POST["hotel"]) && isset($_POST["adresse"]) && isset($_POST["caracteristique"])){
    $hotel=$_POST["hotel"];
    $adresse=$_POST["adresse"];
    $caract=$_POST["caracteristique"];

    $stmt = $link->prepare("SELECT * FROM hotel WHERE adresse LIKE ? ORDER BY classement");
    $hotel = "%{$hotel}%";
    $adresse = "%{$adresse}%";

    $stmt->bind_param("s", $adresse);
    $stmt->execute();
    $result = $stmt->get_result();
    //$row = $result->fetch_assoc();
    //$req= mysqli_query($link,"select * from hotel where nom like '%$hotel%' or adresse like '%$adresse%'");

    $hotels = array();
    while($row = mysqli_fetch_assoc($result)) {
        $hotels[] = array(
            'rank' => $row['classement'],
            'name' => $row['nom'],
            'phone' => $row['phone']
        );
    }
    session_start();
    $_SESSION['hotels'] = $hotels;

    /*foreach ($hotels as $hot) {
        print_r($hot);
    }*/


    /*while($row = mysqli_fetch_assoc($req)) {
        $name = $row['nom'];
        $phone = $row['phone'];
    
        echo "<div>";
        echo "<h2>$name</h2>";
        echo "<p>$phone</p>";
        echo "</div>";
    }*/
    
}
header('Location: index.php');
exit;
?>
