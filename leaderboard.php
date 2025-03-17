<?php
session_start(); // Ensure the session is started

// Check if user is logged in
if (!isset($_SESSION["username"])) {
    header("Location: signin.php"); // Redirect to sign-in page
    exit();
}

include "../includes/db.php"; // Ensure correct path to database connection

$username = $_SESSION["username"];

// Fetch leaderboard data
$sql = "SELECT username, score FROM users ORDER BY score DESC LIMIT 10";
$result = $conn->query($sql);

$leaderboard = [];
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $leaderboard[] = $row;
    }
}

// Fetch current user's rank and score
$user_rank = "N/A";
$user_score = "N/A";

$sql_user = "SELECT username, score FROM users ORDER BY score DESC";
$result_user = $conn->query($sql_user);

$rank = 1;
while ($row = $result_user->fetch_assoc()) {
    if ($row["username"] === $username) {
        $user_rank = $rank;
        $user_score = $row["score"];
        break;
    }
    $rank++;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Leaderboard</title>
    <link rel="stylesheet" href="../assets/css/styles.css">

</head>
<body>
    <div class="background">
        <img src="../assets/images/leaderboard.png" class="leaderboard-title" alt="Leaderboard">
        
        <!-- Leaderboard Table -->
        <div class="leaderboard-container">
            <table>
                <tr>
                    <th>RANK</th>
                    <th>NAME</th>
                    <th>SCORE</th>
                </tr>
                <?php
                $rank = 1;
                foreach ($leaderboard as $row) {
                    echo "<tr>
                            <td>" . $rank . "</td>
                            <td>" . htmlspecialchars($row["username"]) . "</td>
                            <td>" . $row["score"] . "</td>
                          </tr>";
                    $rank++;
                }
                ?>
            </table>
        </div>

        <!-- User's Score -->
        <p class="user-score">YOUR RANK: <?php echo $user_rank; ?></p>
        <p class="user-score">YOUR SCORE: <?php echo $user_score; ?></p>

        <!-- Back Button -->
        <a href="lobby.php">
            <img src="../assets/images/back-button.png" class="back-button" alt="Back">
        </a>
    </div>
</body>
</html>
