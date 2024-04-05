<?php
include("config.php");
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
   
    if (!$db) {
        echo "<script>alert('Connection failed: " . mysqli_connect_error() . "');</script>";
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
        echo "<script>window.location.href='welcome.php';</script>";
        exit(); 
    } else {
        echo "<script>alert('Invalid username or password');</script>";
    }
}
?>

<?php echo '<!DOCTYPE html>'; ?>
<html lang="en">
    <head>  
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="style.css">
        <title>Registration Form</title>
    </head>
    <body>
        <div class="container">
            <form action="registration.php" class="form" method="post">
                <h1><?php echo 'Registration Form'; ?></h1>
                <p><?php echo 'Fill out the form carefully for registration'; ?></p>

                <div class="input-box">
                    <label><?php echo 'Student Name'; ?></label><br>
                    <input type="text" id="first-name" name="first-name" placeholder="First Name" required>
                </div>

                <div class="input-box">
                    <label><?php echo 'Middle Name'; ?></label><br>
                    <input type="text" id="middle-name" name="middle-name" placeholder="" required>
                </div>

                <div class="input-box">
                    <label><?php echo 'Last Name'; ?></label><br>
                    <input type="text" id="last-name" name="last-name" placeholder="" required>
                </div>

                <div class="input-box">
                    <label><?php echo 'Contact No.'; ?></label><br>
                    <input type="text" name="contact" placeholder="Phone No." required>
                </div>


                <div class="input-box">
                    <label><?php echo 'Address'; ?></label><br>
                    <input type="text" name="address" placeholder="" required>
                </div>

                <div class="input-box">
                    <label><?php echo 'Religion'; ?></label><br>
                    <input type="text" name="religion" placeholder="" required>
                </div>

                <div class="input-box">
                    <label><?php echo 'Birthday'; ?></label><br>
                    <input type="date" name="birth" placeholder="" required>
                </div>

                <div class="input-box">
                    <label><?php echo 'Age: '; ?></label><br>
                    <input type="text" name="age" placeholder="" required>
                </div>




                <div class="input-box">
                    <label for="gender"><?php echo 'Gender'; ?></label><br>
                    <select id="gender" name="gender" onchange="updateGender()">
                        <option value=""><?php echo 'Please select'; ?></option>
                        <option value="male"><?php echo 'Male'; ?></option>
                        <option value="female"><?php echo 'Female'; ?></option>
                    </select>
                </div>

                <div class="input-box">
                    <label><?php echo 'Student E-mail'; ?></label><br>
                    <input type="text" name="email" placeholder="example@example.com" required>
                </div>

                <div class="input-box">
                    <label><?php echo 'Student ID'; ?></label><br>
                    <input type="text" name="student-id" placeholder="" required>
                </div>

                <div class="input-box">
                    <label for="list-class"><?php echo 'List of Classes'; ?></label><br>
                    <select id="list-class" name="list-class" onchange="updateGender()">
                        <option value=""><?php echo 'Please select'; ?></option>
                        <option value="ITE61"><?php echo 'Application Development And Emerging Technologies'; ?></option>
                        <option value="ITP64"><?php echo 'Human Computer Interaction 2'; ?></option>
                        <option value="ITP63"><?php echo 'Capstone Project And Research 1'; ?></option>
                        <option value="ITE61"><?php echo 'Integrative Programming And Technologies 1'; ?></option>
                        <option value="ITP64"><?php echo 'Systems Integration And Architecture 2'; ?></option>
                        <option value="ITC61"><?php echo 'Ecommerce Technologies'; ?></option>
                        <option value="ITP61"><?php echo 'Information Assurance And Security 1'; ?></option>
                    </select>
                </div>
            
                <div class="input-box">
                    <label><?php echo 'Username'; ?></label><br>
                    <input type="text" name="username" placeholder="" required>
                </div>

                <div class="input-box">
                    <label><?php echo 'Password'; ?></label><br>
                    <input type="text" name="password" placeholder="" required>
                </div>

                <div class="input-box">
                <label><?php echo 'Confirm Password'; ?></label><br>
                <input type="text" name="confirm_password" placeholder="" required>
                </div>


                <label><input type="checkbox" name="declaration"><?php echo 'I hereby declare that the above information provided is true and correct'; ?></label>


                <button type="submit" class="btn"><?php echo 'Submit'; ?></button>

                <div class="links">
                    Already have account? <a href="login.php">Sign In Now</a>
                </div>

            </form>

        </div>

    </body>
    
</html>