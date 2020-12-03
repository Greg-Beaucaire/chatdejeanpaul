<?php
include('connexion.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dev5 Messenger</title>
</head>
<body>
    <div class="chat">
    <?php
        $requete = $connexion -> query('SELECT * from `chattb`');
        while ($donnees = $requete->fetch()) {
            echo ("<p class='messageChat'>".$donnees['pseudo']." : ".$donnees['messagechat']."</p>");
        }
    ?>
    </div>
    <form action="chat.php" method="post">
        <input type="text" name="pseudo" id="pseudo" placeholder="Ton pseudo" required >
        <input type="text" name="message" id="message" placeholder="Ton message" required>
        <input type="submit" value="Envoyer">
    </form>
</body>
</html>