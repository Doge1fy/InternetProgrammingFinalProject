<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: login.html"); // Kick them out if not logged in
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Main Menu</title>
</head>
<body>
    <h1>Main Menu</h1>
    <p>Welcome to your student grade dashboard, <?php echo $_SESSION['username']; ?>.</p>

    <div>
        <a href="addgrades.php">
            <button type="button">Add Grades</button>
        </a>
    </div>

    <br>

    <div>
        <a href="grades.php">
            <button type="button">View Grades</button>
        </a>
    </div>
</body>
</html>
