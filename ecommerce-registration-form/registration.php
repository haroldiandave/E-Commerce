
<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST"){

        $firstName = $_POST['first-name'];
        $lastName = $_POST['last-name'];
        $gender = $_POST['gender'];
        $email = $_POST['email'];
        $studentID = $_POST['student-id'];
        $selectedClass = $_POST['list-class'];

        echo $firstName;
        echo "<br>";
        echo $lastName;
        echo "<br>";
        echo $gender;
        echo "<br>";
        echo $email;
        echo "<br>";
        echo $studentID;
        echo "<br>";
        echo $selectedClass;
        
    }
?>
