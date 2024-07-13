<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Sign Up!</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="grid-container">
        <div class="content">
            <style>
                .photo {
                    width: 300px;
                    height: auto;
                }
            </style>
            <img src="1024.png" alt="App Logo" class="photo">
            <h2>User Registration</h2>

            <p style="color: red;">
                <?php
                if (isset($_GET['er'])) {
                    $error = $_GET['er'];
                    if ($error == "1") {
                        echo "Username/Email already exists. If you already have an account please Sign In.";
                    }
                }
                ?>
            </p>
            <form action="signUpLogic.php" method="post">
                <label for="firstname">First Name:</label><br>
                <input type="text" id="firstname" name="firstname" required><br><br>

                <label for="lastname">Last Name:</label><br>
                <input type="text" id="lastname" name="lastname" required><br><br>

                <label for="username">Username/Email:</label><br>
                <input type="text" id="username" name="username" required><br><br>

                <label for="password">Password:</label><br>
                <input type="password" id="password" name="password" required><br><br>

                <input type="submit" value="Sign Up">
            </form>

            <p>Already have an account?</p>

            <form action="signIn.php" method="post">
                <button type="submit">Sign In</button>
            </form>
        </div>
    </div>
</body>
</html>
