<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lobby - Peel 'n' Catch</title>
    <link rel="stylesheet" href="../assets/css/styles.css">

    <link href="https://fonts.googleapis.com/css2?family=Kablammo&display=swap" rel="stylesheet">
</head>
<body>
    <div class="background">
        <!-- Game Title -->
        <img src="../assets/images/peel-n-catch.png" class="game-title" alt="Peel 'n' Catch">
        <img src="../assets/images/lobby-rectangle.png" class="lobby-rectangle" alt="Rectangle">

        <!-- Navigation Buttons -->
        <div class="button-group">
            <a href="game.php" class="lobby-button">PLAY</a>
            <a href="leaderboard.php" class="lobby-button">LEADERBOARD</a>
            <a href="howtoplay.php" class="lobby-button">HOW TO PLAY</a>
            <a href="logout.php" class="lobby-button">SIGN OUT</a>
        </div>

        <!-- Power & Speaker Icons -->
        <img src="../assets/images/power-removebg-preview1.png" class="power-button" alt="Power">
        <img src="../assets/images/speaker-removebg-preview1.png" class="speaker-button" alt="Speaker">

        <!-- Monkey Character -->
        <img src="../assets/images/monkey-character.png" class="monkey-character" alt="Monkey">
    </div>
</body>
</html>
