<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Sign In!</title>
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
            <h2>Sign In</h2>
            <form action="signInLogic.php" method="post">
                <label for="username">Username/Email:</label><br>
                <input type="text" id="username" name="username" required><br><br>

                <label for="password">Password:</label><br>
                <input type="password" id="password" name="password" required><br><br>

                <input type="submit" value="Sign In">
            </form>

            <p>Don't have an account?</p>

            <form action="signUp.php" method="post">
                <button type="submit">Sign Up</button>
            </form>
        </div>
    </div>
</body>
</html>
