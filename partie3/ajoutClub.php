<?php
include('Club.php');
$id = $_POST["id"];
$nom = $_POST["nom"];
$description = $_POST["description"];
$adresse = $_POST["Adresse"];
$domaine = $_POST["domaine"];
$club1=new Club($id,$nom,$description,$adresse,$domaine);
var_dump($club1);
?>