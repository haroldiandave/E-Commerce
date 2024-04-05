<?php
include("config.php");
session_start();

   
if (!isset($_SESSION['login_user'])) {
    header("location: login.php");
    exit();
}

$username = $_SESSION['login_user'];


$sql = "SELECT * FROM students_table WHERE username = '$username'";
$result = mysqli_query($db, $sql);


if ($result && mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_assoc($result);
   
    $studentID = $row['Student_ID'];
    $firstName = $row['First_Name'];
    $lastName = $row['Last_Name'];
    $middleName = $row['Middle_Name'];
    $address = $row['Address'];
    $religion = $row['Religion'];
    $birth = $row['Birthday'];
    $age = $row['Age'];
    $email = $row['Email_Address'];
} else {
    $errorMessage = "Error: Student information not found.";
}
?>
<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="stylesheet" href="welcome.css">
      <title>Welcome</title>
   </head>
   <body>
      <div class = "container">  
         <h1>Welcome, <?php echo $firstName . " " . $lastName; ?></h1>
         <p>First Name: <?php echo $firstName; ?> <button class="updateButton"><a href="updateStudent.php?field=First_Name&value=<?php echo $firstName; ?>">Update</a></button></p>
         <p>Last Name: <?php echo $lastName; ?> <button class="updateButton"><a href="updateStudent.php?field=Last_Name&value=<?php echo $lastName; ?>">Update</a></button></p>
         <p>Middle Name: <?php echo $middleName; ?> <button class="updateButton"><a href="updateStudent.php?field=Middle_Name&value=<?php echo $middleName; ?>">Update</a></button></p>
         <p>Address: <?php echo $address; ?> <button class="updateButton"><a href="updateStudent.php?field=Address&value=<?php echo $address; ?>">Update</a></button></p>
         <p>Religion: <?php echo $religion; ?> <button class="updateButton"><a href="updateStudent.php?field=Religion&value=<?php echo $religion; ?>">Update</a></button></p>
         <p>Birthday: <?php echo $birth; ?> <button class="updateButton"><a href="updateStudent.php?field=Birthday&value=<?php echo $birth; ?>">Update</a></button></p>
         <p>Age: <?php echo $age; ?> <button class="updateButton"><a href="updateStudent.php?field=Age&value=<?php echo $age; ?>">Update</a></button></p>
         <p>Email Address: <?php echo $email; ?> <button class="updateButton"><a href="updateStudent.php?field=Email_Address&value=<?php echo $email; ?>">Update</a></button></p>
         <form action="logout.php" method="post">
            <button type="submit" class="btn">Logout</button>
        </form>
      </div>   

   </body>

</html>
