<?php
try {
    $connexion = new PDO('mysql:host=localhost;dbname=chat;charset=utf8', 'testDB', 'testDBmdp');
    $connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    $connexion->beginTransaction();
    }
    
    catch(PDOException $e){
        echo "Erreur : " . $e->getMessage();
    }
?>