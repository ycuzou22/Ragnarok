<?php
session_start();

$characterId = isset($_GET['character_id']) ? $_GET['character_id'] : '';
$characterName = isset($_GET['character_name']) ? $_GET['character_name'] : '';
$characterDescription = isset($_GET['character_description']) ? $_GET['character_description'] : '';

$_SESSION['character_id'] = $characterId;
$_SESSION['character_name'] = $characterName;
$_SESSION['character_description'] = $characterDescription;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/welcome.css">
    <link rel="stylesheet" href="css/details.css">
    <title>Character Details</title>
</head>
<body>
    <div class="character-details">
    <div class="character-image">
            <?php
                if ($characterId == 1) {
                    echo '<img id="character-image" src="assets/ragnar_le_viking.webp" alt="Character Image">';
                } else if($characterId == 2) {
                    echo '<img id="character-image" src="assets/Cracker.jpg" alt="Character Image">';
                } else if($characterId == 3) {
                    echo '<img id="character-image" src="assets/royal.jpg" alt="Character Image">';
                } else if($characterId == 4) {
                    echo '<img id="character-image" src="assets/tonnerre.jpg" alt="Character Image">';
                }
            ?>
        </div>
        <div class="character-description">
            <h2 id="character-name"><?php echo ucfirst(str_replace('_', ' ', $characterName)); ?></h2>
            <p id="character-info"><?php echo $characterDescription; ?></p>
            <br>
            <br>
            <a href="http://127.0.0.1/siteTP/welcome.php" class="btn-return">Retour</a>
        </div>
    </div>
</body>
</html>

