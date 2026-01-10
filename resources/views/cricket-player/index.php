<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Player Search</title>
    <style>
        .center-button {
            display: flex;
            justify-content: center;
            margin-top: 20px;
        }
    </style>
</head>
<body>

<div class="container mt-5">
    <h1 class="text-center">Search Cricket Player</h1>
    <form method="GET" action="player.php" class="mt-4">
        <div class="mb-3">
            <input type="text" class="form-control" name="player_name" placeholder="Enter player name" required>
        </div>
        <button type="submit" class="btn btn-primary">Search</button>
    </form>

    <h2 class="mt-5 text-center">Random Players</h2>
    <ul class="list-group">
        <?php
        // Database connection
       $servername = "localhost";
       $username = "u662933183_cri_profile";
       $password = "Sivam@1009";
       $dbname = "u662933183_cricket_player";

        $conn = new mysqli($servername, $username, $password, $dbname);

        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        // Fetch 10 random players
        $result = $conn->query("SELECT player_name FROM cricketer_profile ORDER BY RAND() LIMIT 10");
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo '<li class="list-group-item"><a href="player.php?player_name=' . urlencode($row['player_name']) . '">' . htmlspecialchars($row['player_name']) . '</a></li>';
            }
        } else {
            echo '<li class="list-group-item">No players found.</li>';
        }
        $conn->close();
        ?>
    </ul>

    <!-- Back to Home Page Button -->
    <div class="center-button">
        <a href="index.php" class="btn btn-secondary">Back to Home Page</a>
    </div>
</div>

</body>
</html>
