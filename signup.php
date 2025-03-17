<?php
session_start();
include "../includes/db.php"; // Include database connection
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up - Peel 'n' Catch</title>
    <link rel="stylesheet" href="../assets/css/styles.css">

    <link href="https://fonts.googleapis.com/css2?family=Kablammo&display=swap" rel="stylesheet">
</head>
<body>
    <div class="background">
        <div class="signup-container">
            <img src="../assets/images/SIGNUP.png" class="signup-title" alt="Sign Up">

            <form action="../auth/register.php" method="POST">
                <label for="email">E-MAIL</label>
                <input type="email" id="email" name="email" required>

                <label for="username">USERNAME</label>
                <input type="text" id="username" name="username" required>

                <label for="password">PASSWORD</label>
                <input type="password" id="password" name="password" required>

                <div class="signup-button-container">
                    <button type="submit" class="signup-button"></button>
                </div>

            </form>

            <p class="signin-text">ALREADY AN USER? <a href="signin.php">SIGN-IN</a></p>
        </div>

        <!-- Power Button -->
        <img src="../assets/images/power-removebg-preview1.png" class="power-button" alt="Power">
        
        <!-- Speaker Icon -->
        <img src="../assets/images/speaker-removebg-preview1.png" class="speaker-button" alt="Speaker">

        <!-- Monkey Character -->
        <img src="../assets/images/monkey-character.png" class="monkey-character" alt="Monkey">
    </div>
</body>
</html>
