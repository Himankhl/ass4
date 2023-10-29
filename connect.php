
<?php

    $servername="localhost";
    $username="root";
    $password="";
    $database_name="register";

    

    // if ($_SERVER["REQUEST_METHOD"] === "POST") {
    //     $name = $_POST["name"];
    //     $age = $_POST["age"];
    //     $contact = $_POST["contact"];
    //     $email=$_POST["email"];
    //     $state=$_POST["state"];
    //     $city=$_POST["city"];
    //     $pincode=$_POST["pincode"];

    //     $conn=new mysqli_connect($servername,$username,$password,$database_name);
    //     if($conn->connect_error){
    //        die('connection failed : ' .$conn->connection_error);
    // }
    //     else{
    //         $stmt=$conn->prepare("insert into r(name,age,contact,email,state,city,pincode)
    //         values(?,?,?,?,?,?,?)");
    //         $stmt->bind_param("siis",$name,$age,$contact,$email,$state,$city,$pincode);
    //         $stmt->execute();
    //         echo "Registration Succesfull ...";
    //         $stmt->close();
    //         $conn->close();

    // }
    ?>