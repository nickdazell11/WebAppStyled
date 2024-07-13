<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Sign Up!</title>
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
        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];
        $username = $_POST['username'];
        $password = $_POST['password'];
        // Check if username already exists
        $stmt = $pdo->prepare("SELECT * FROM userData WHERE username = :username");
        $stmt->bindParam(':username', $username);
        $stmt->execute();
        $existingUser = $stmt->fetch(PDO::FETCH_ASSOC);
        if ($existingUser) {
            header("Location: http://localhost/PitchDataPHP/signUp.php?er=" . urlencode("1"));
            exit();
        }
        // Prepare an SQL INSERT statement
        $sql = "INSERT INTO userData (firstname, lastname, username, password) VALUES (:firstname, :lastname, :username, :password)";

        // Prepare the statement
        $stmt = $pdo->prepare($sql);

        // Bind parameters
        $stmt->bindParam(':firstname', $firstname);
        $stmt->bindParam(':lastname', $lastname);
        $stmt->bindParam(':username', $username);

        // Hash the password before storing it
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);
        $stmt->bindParam(':password', $hashed_password);
        // Attempt to execute the prepared statement
        try {
            $stmt->execute();
            header("Location: http://localhost/PitchDataPHP/homepage.php?firstname=" . urlencode($firstname));
            exit();
        } catch (PDOException $e) {
            die("Error: " . $e->getMessage());
        }
    }
    ?>
</body>
</html>
