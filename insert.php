<?php
include "cnx.php";
if(isset($_GET["nom"]) && isset($_GET["prenom"]) && isset($_GET["phone"])  && isset($_GET["mail"])&& isset($_GET["gender"])&& isset($_GET["adresse"])&& isset($_GET["date"])){
    $nom=$_GET["nom"];
    $prenom=$_GET["prenom"];
    $phone=$_GET["phone"];
    $mail=$_GET["mail"];
    $sexe=$_GET["gender"];
    $adresse=$_GET["adresse"];
    $date=$_GET["date"];


    $req= mysqli_query($link,"insert into client(nom,prenom, phone,email,sexe,adresse,date_de_naissance) values ('$nom','$prenom','$phone','$mail','$sexe','$adresse','$date')");
    if($req){
        echo" insertion effectuée ";
    }
    else{
        echo" erreur d'insertion ";
    }
}
?>