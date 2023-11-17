<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/login.css">
    <title>Login</title>
</head>

<body>
    <div class="video-background">
        <video autoplay loop muted poster="video-poster.jpg">
            <source src="./res/background2.mp4" type="video/mp4" />
            Your browser does not support the video tag.
        </video>
    </div>
    <div class="center-wrapper">
        <h1>Please Login using your credentials, </h1>

        <div class="login-container">
            <h2>Login</h2>
            <form action="BE/login.php" method="post">
                <label for="username">Username:</label>
                <input type="text" name="username" required>

                <label for="password">Password:</label>
                <input type="password" name="password" required>

                <button type="submit">Login</button>
            </form>
        </div>
        <h2>Don't have an account? <a class="anchor" href="./pages/signup.html">Sign up now!</a></h2>

    </div>
</body>

</html>