<?php
include("config.php");

if(isset($_GET['field']) && isset($_GET['value'])) {
    $field = $_GET['field'];
    $value = $_GET['value'];

    
    $sql = "SELECT * FROM students_table WHERE $field = '$value'";
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
        echo "Error: Student information not found.";
        exit(); 
    }
} else {
    echo "Error: Field and value not provided.";
    exit(); 
}

if(isset($_POST['update'])) {
    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $middleName = $_POST['middleName'];
    $address = $_POST['address'];
    $religion = $_POST['religion'];
    $birth = $_POST['birth'];
    $age = $_POST['age'];
    $email = $_POST['email'];

   
    $sql = "UPDATE students_table SET 
            First_Name = '$firstName',
            Last_Name = '$lastName',
            Middle_Name = '$middleName',
            Address = '$address',
            Religion = '$religion',
            Birthday = '$birth',
            Age = '$age',
            Email_Address = '$email'
            WHERE Student_ID = '$studentID'";

   
    if (mysqli_query($db, $sql)) {
       
        header("location: welcome.php");
        exit();
    } else {
        echo "Error updating record: " . mysqli_error($db);
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="updateStudent.css">
    <title>Update Student Information</title>
</head>
<body>
    <div class="container">
        <h2>Update Student Information</h2>
            <form action="" method="post">
                <input type="hidden" name="studentID" value="<?php echo $studentID; ?>">
                First Name: <input type="text" name="firstName" value="<?php echo $firstName; ?>"><br>
                Last Name: <input type="text" name="lastName" value="<?php echo $lastName; ?>"><br>
                Middle Name: <input type="text" name="middleName" value="<?php echo $middleName; ?>"><br>
                Address: <input type="text" name="address" value="<?php echo $address; ?>"><br>
                Religion: <input type="text" name="religion" value="<?php echo $religion; ?>"><br>
                Birth: <input type="date" name="birth" value="<?php echo $birth; ?>"><br>
                Age: <input type="number" name="age" value="<?php echo $age; ?>"><br>
                Email: <input type="email" name="email" value="<?php echo $email; ?>"><br>
                <input type="submit" name="update" value="Update">
        </form>
        </div>
</body>
</html>
