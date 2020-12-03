<?php 

include('connexion.php');

$pseudo = $_POST['pseudo'];
$messagePost = $_POST['message'];

$requete = "INSERT INTO chattb( pseudo, messagechat) VALUES('$pseudo', '$messagePost')";
$connexion->exec($requete);
$connexion->commit();

header("Location: index.php");
?>