<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Home</title>
    <link rel="stylesheet" href="styles.css">
    <style>
                * {
                    margin: 0;
                    padding: 0;
                }
            </style>
</head>
<body>
    <div class="grid-container">
        <div class="content">
            <!-- Logo and welcome message... -->
            <img src="1024.png" alt="App Logo" class="photo">
            <p>
                <?php
                if (isset($_GET['fn'])) {
                    $firstname = $_GET['fn'];
                    echo "Welcome back " . $firstname . "!";
                } elseif (isset($_GET['firstname'])) {
                    $firstname = $_GET['firstname'];
                    echo "Welcome " . $firstname . "!";
                } 
                ?>
            </p>

            <!-- Menu bar... -->
            <nav>
                <ul>
                    <li><a href="http://localhost/PitchDataPHP/homepage.php">Home</a></li>
                    <li><a href="http://localhost/PitchDataPHP/dailyLog.php">Daily Log</a></li>
                    <li><a href="http://localhost/PitchDataPHP/calendar.php">Calendar</a></li>
                    <li><a href="http://localhost/PitchDataPHP/about.php">About</a></li>
                    <li class="logout"><a href="http://localhost/PitchDataPHP/signIn.php">Log Out</a></li>
                </ul>
            </nav>
        </div>
    </div>
</body>
</html>
