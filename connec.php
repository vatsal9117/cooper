<?php

    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $PhoneNumber = $_POST['PhoneNumber'];

    //database connection:
    $conn = new mysqli('localhost','root','','test');
    if($conn->connect_error){
        die('Connection Failed : '.$conn->connect_error );
    }else
    {
        $stmt = $conn->prepare("insert into registration(fname,lname,email,password,PhoneNumber)values(?, ?, ?, ?, ?)");
        $stmt->bind_param("ssssi",$fname, $lname, $email, $password, $PhoneNumber);
        $stmt->execute();
        echo "Registration Complete....";
        $stmt->close();
        $conn->close();
    }


?>
