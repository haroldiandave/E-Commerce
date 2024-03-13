
<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "firstconnection";
    $conn = new mysqli($servername, $username, $password, $database);

    if ($_SERVER["REQUEST_METHOD"] == "POST"){

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

        $insert = "INSERT INTO student_table (Student_No, Student_ID, Last_Name, First_Name, Middle_Name, 
        Address, Contact_No, Email_Address, Birthday, Age, Religion) VALUES ('', '$studentID', '$lastName', 
        '$firstName', '$middleName', '$address', '$contact', '$email', '$birth', '$age', '$religion')";
        mysqli_query($conn, $insert);
    }
?>
