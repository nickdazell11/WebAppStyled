<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Sign In!</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
        <style>
            .photo {
                width: 300px;
                height: auto;
            }
        </style>
        <img src="1024.png" alt="App Logo" class="photo">
    </div>
<?php
// Database connection parameters
$host = 'localhost'; // XAMPP default host
$dbname = 'users'; // Replace with your database name
$username = 'root'; // XAMPP default username
$password = ''; // XAMPP default password (empty by default)

// Establishing MySQL database connection
try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Error: Could not connect. " . $e->getMessage());
}

// Handling form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Validate inputs
    $username = $_POST['username'];
    $password = $_POST['password'];
    // Check if username and password combo are in the database
    $stmt = $pdo->prepare("SELECT password FROM userData WHERE username = :username");
    $stmt->bindParam(':username', $username);
    $stmt->execute();
    $existingUser = $stmt->fetch(PDO::FETCH_ASSOC);
    if ($existingUser) {
        $hashed_password_from_db = $existingUser['password'];
        if (password_verify($password, $hashed_password_from_db)) {
            // Passwords match, authentication successful
            $stmt2 = $pdo->prepare("SELECT firstname FROM userData WHERE username = :username");
            $stmt2->bindParam(':username', $username);
            $stmt2->execute();
            $existingUserFirstName = $stmt2->fetch(PDO::FETCH_ASSOC);
            if ($existingUserFirstName) {
                $firstname = $existingUserFirstName['firstname'];
                header("Location: http://localhost/PitchDataPHP/homepage.php?fn=" . urlencode($firstname));
                exit();
            }
        } else {
            // Passwords don't match
            echo "Invalid username or password.";
        }
    }
    else {
        echo "<br>User not found, click Sign Up to create a new account!";
    }
}
else {
    echo "<br>Method is not POST";
}
?>
</body>
</html>