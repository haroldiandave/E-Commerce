<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "firstconnection";
    $conn = new mysqli($servername, $username, $password, $database);

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        
        $firstName = $_POST['first-name'];
        $middleName = $_POST['middle-name'];
        $lastName = $_POST['last-name'];
        $contact = $_POST['contact'];
        $address = $_POST['address'];
        $religion = $_POST["religion"];
        $birth = $_POST["birth"];
        $age = $_POST["age"];
        $email = $_POST['email'];
        $studentID = $_POST['student-id'];
        $selectedClass = $_POST['list-class'];
        $username = $_POST['username'];
        $password = $_POST['password'];
        $confirm_password = $_POST['confirm_password'];   

        $inspect_username = "SELECT username FROM students_table WHERE Username = '$username'";
        $outcome_username = mysqli_query($conn, $inspect_username);
        if(mysqli_num_rows($outcome_username) > 0) {
            echo "<script>alert('Username already exists. Please use different username.');</script>";
        } else {
        
            $inspect_email = "SELECT * FROM students_table WHERE Email_Address = '$email'";
            $outcome_email = mysqli_query($conn, $inspect_email);
            if (mysqli_num_rows($outcome_email) > 0){
                echo "<script>alert('Email address already exist. Please use different email.');</script>";
            } else {
                if ($password !== $confirm_password) {
                    echo "<script>alert('Password and Confirm Password does not match. Please try again.');</script>";
                } else {
            
                    $insert = "INSERT INTO students_table (Student_No, Student_ID, Last_Name, First_Name, Middle_Name, 
                    Address, Contact_No, Email_Address, Birthday, Age, Religion, Username, Password) VALUES ('', '$studentID', '$lastName', 
                    '$firstName', '$middleName', '$address', '$contact', '$email', '$birth', '$age', '$religion', '$username', '$password')";
                    mysqli_query($conn, $insert);
        
                    
                    echo "<script>alert('Data inserted successfully.');</script>";
                }
            }
        }

    }
?>
