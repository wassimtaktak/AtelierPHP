<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>affichage</title>
</head>
<body>
    <h2>affichage des clubs</h2>
<?php
 $id = $_POST["id"];
 $nom = $_POST["nom"];
 $description = $_POST["description"];
 $adresse = $_POST["Adresse"];
 $domaine = $_POST["domaine"];
 if (empty($id) || empty($nom) || empty($description) || empty($adresse) || empty($domaine)) {
    echo "Champs manquants";
} else {
    echo "<table border='1'>
            <tr>
                <th>ID</th>
                <th>Nom</th>
                <th>Description</th>
                <th>Adresse</th>
                <th>Domaine</th>
            </tr>
            <tr>
                <td>$id</td>
                <td>$nom</td>
                <td>$description</td>
                <td>$adresse</td>
                <td>$domaine</td>
            </tr>
        </table>";
}
?>
</body>
</html>