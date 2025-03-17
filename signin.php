<?php
session_start();
include "../includes/db.php"; // Database connection
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign In - Peel 'n' Catch</title>
    <link rel="stylesheet" href="../assets/css/styles.css">

    <link href="https://fonts.googleapis.com/css2?family=Kablammo&display=swap" rel="stylesheet">
</head>
<body>
    <div class="background">
        <div class="signin-container">
            <img src="../assets/images/SIGNIN.png" class="signin-title" alt="Sign In">
            
            <form action="../auth/login.php" method="POST">
                <label for="username">USERNAME</label>
                <input type="text" id="username" name="username" required>

                <label for="password">PASSWORD</label>
                <input type="password" id="password" name="password" required>

                <button type="submit" class="signin-button">SIGN IN</button>
            </form>

            <p class="signup-text">Don't have an account? <a href="signup.php">SIGN-UP</a></p>
        </div>

        <!-- Power Button -->
        <img src="../assets/images/power-removebg-preview1.png" class="power-button" alt="Power">
        
        <!-- Speaker Icon -->
        <img src="../assets/images/speaker-removebg-preview1.png" class="speaker-button" alt="Speaker">

        <!-- Monkey Pic -->
        <img src="../assets/images/monkey-character.png" class="monkey-character" alt="Monkey">

    </div>
</body>
</html>
