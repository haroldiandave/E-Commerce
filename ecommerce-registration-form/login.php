<?php
include("config.php");
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
   
    if (!$db) {
        die("Connection failed: " . mysqli_connect_error());
    }

    
    $myusername = trim($_POST['username']);
    $mypassword = trim($_POST['password']);

    
    if (empty($myusername)) {
        echo "<script>alert('Username is required');</script>";
    }

   
    if (empty($mypassword)) {
        echo "<script>alert('Password is required');</script>";
    }

    if (empty($myusername) || empty($mypassword)) {
       
        exit();
    }

    
    $myusername = mysqli_real_escape_string($db, $myusername);
    $mypassword = mysqli_real_escape_string($db, $mypassword);

    
    $sql = "SELECT * FROM students_table WHERE username = '$myusername' and password = '$mypassword'";
    $result = mysqli_query($db, $sql);
    $count = mysqli_num_rows($result);

    if ($count == 1) {
        
        $_SESSION['login_user'] = $myusername;
        header("location: welcome.php");
        exit(); 
    } else {
        echo "<script>alert('Invalid username or password');</script>";
    }
}
?>

<?php
    <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <link rel="stylesheet" href="login.css">
            <script src="login.js" defer></script>
            echo"<title>Login Form</title>";
        </head>
        <body>
            <div class="background-container">
                <div class="container">
                    <div class="box form-box">
                        <header>Login</header>
                        <form action="" method="POST">
                            <div class="field input">
                               echo "<label for="username">Username</label>";
                                <input type="text" name="username" id="username" required>
                            </div>
                            <div class="field input">
                               echo "<label for="password">Password</label>";
                                <input type="password" name="password" id="password" required>
                               echo "<img src="eye-close.png" class="toggle-password" onclick="togglePasswordVisibility()">";
                            </div>

                            <div class="field">
                                <input type="submit" class="btn" name="submit" value="Login">
                                <button type="button" class="btn cancel-btn" onclick="window.location.href='homepage.php'">Cancel</button>
                            </div>
                            <div class="links">
                             echo "Don't have an account? <a href="signupform.php">Sign Up Now</a>";
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </body>
    </html>
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="login.css">
    <script src="login.js" defer></script>
    <title>Login Form</title>
</head>
<body>
    <div class="background-container">
        <div class="container">
            <div class="box form-box">
                <header>Login</header>
                <form action="" method="POST">
                    <div class="field input">
                        <label for="username">Username</label>
                        <input type="text" name="username" id="username" required>
                    </div>
                    <div class="field input">
                        <label for="password">Password</label>
                        <input type="password" name="password" id="password" required>
                        <img src="eye-close.png" class="toggle-password" onclick="togglePasswordVisibility()">
                    </div>

                    <div class="field">
                        <input type="submit" class="btn" name="submit" value="Login">
                        <button type="button" class="btn cancel-btn" onclick="window.location.href='homepage.php'">Cancel</button>
                    </div>
                    <div class="links">
                        Don't have an account? <a href="signupform.php">Sign Up Now</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
