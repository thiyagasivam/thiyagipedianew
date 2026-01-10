<?php
// Database connection (adjust with your credentials)
$servername = "localhost";
$username = "u662933183_cri_profile";
$password = "Sivam@1009";
$dbname = "u662933183_cricket_player";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get the player_name from the URL
if (isset($_GET['player_name'])) {
    $player_name = $_GET['player_name']; // Directly fetch the player_name

    // Prepare and execute the SQL query to fetch player data
    $stmt = $conn->prepare("SELECT * FROM cricketer_profile WHERE player_name = ?");
    $stmt->bind_param("s", $player_name);
    $stmt->execute();
    $result = $stmt->get_result();      

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc(); // Fetch the row once
        ?>
        <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
            <link rel="stylesheet" href="styles.css"> <!-- Include your CSS file -->
            <title><?php echo $row['player_name']; ?> Player Profile: Stats, Rankings, Records, Photos & Videos</title>
            <meta name="description" content="Explore <?php echo $row['player_name']; ?>’s cricket journey, achievements, stats, and rankings. Find records, videos, photos, and all details on this legendary cricketer.">
        </head>
        <body>
        <div class="container mt-4">
            <h2 class="mt-4"><?php echo $row['player_name']; ?> - Batting Career Summary</h2>
            <div class="table-responsive">
            <table class="table table-bordered">
            <thead> 
            <tr>
                 <th>Player Name</th>
                    <th>Format</th>
                    <th>Matches</th>
                    <th>Innings</th>
                    <th>Not Outs</th>
                    <th>Runs</th>
                    <th>High Score</th>
                    <th>Average</th>
                    <th>BF</th>
                    <th>Strike Rate</th>
                    <th>100s</th>
                    <th>200s</th>
                    <th>50s</th>
                    <th>4s</th>
                    <th>6s</th>
                </tr>
                </thead>
                <tbody>
                <?php
                // Array of formats to loop through
                $formats = [
                    ['format' => 'format_1', 'label' => 'Format 1'],
                    ['format' => 'format_2', 'label' => 'Format 2'],
                    ['format' => 'format_3', 'label' => 'Format 3'],
                    ['format' => 'format_4', 'label' => 'Format 4']
                ];
                
                foreach ($formats as $i => $format) {
                    echo "<tr>";
                    // Show player name only in the first row
                    echo $i === 0 ? "<td>{$row['player_name']}</td>" : "<td></td>";
                    echo "<td>{$row[$format['format']]}</td>";
                    echo "<td>{$row[$format['format'] . '_matches']}</td>";
                    echo "<td>{$row[$format['format'] . '_innings']}</td>";
                    echo "<td>{$row[$format['format'] . '_not_out']}</td>";
                    echo "<td>{$row[$format['format'] . '_runs']}</td>";
                    echo "<td>{$row[$format['format'] . '_hs']}</td>";
                    echo "<td>{$row[$format['format'] . '_avg']}</td>";
                    echo "<td>{$row[$format['format'] . '_bf']}</td>";
                    echo "<td>{$row[$format['format'] . '_sr']}</td>";
                    echo "<td>{$row[$format['format'] . '_hundreds']}</td>";
                    echo "<td>{$row[$format['format'] . '_two_hundreds']}</td>";
                    echo "<td>{$row[$format['format'] . '_fifties']}</td>";
                    echo "<td>{$row[$format['format'] . '_fours']}</td>";
                    echo "<td>{$row[$format['format'] . '_sixes']}</td>";
                    echo "</tr>";
                }
                ?>
            </tbody>
            </table>
    </div>
</div>
<?php
    } else {
        echo "<p>Player not found.</p>";
    }
} else {
    echo "<p>No player specified.</p>";
}

// Close the database connection
$conn->close();
?>

<br>
<?php include 'bowl.php';?>

<br>
   <!-- Back to Home Page Button -->
   <div class="center-button">
        <a href="index.php" class="btn btn-secondary">Back to Home Page</a>
    </div>

        </body>
        </html>
