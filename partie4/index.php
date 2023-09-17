<?php
include('config.php');
include('Club.php');
$pdo = Config::getConnexion();
$query = "SELECT * FROM club";
$result = $pdo->query($query);
while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
    $club = new Club($row['id'], $row['nom'], $row['description'], $row['adresse'], $row['domaine']);
    $club->afficherClub();
}
?>