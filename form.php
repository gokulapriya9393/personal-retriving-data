<?php
    $servername ="localhost";
    $username ="root";
    $password ="";
    $dbname ='form';

    //create connection
    $conn=new mysqli($servername,$username,$password,$dbname);

    // Check connection
    if($conn->connect_error){
        die("Connection failed: " .$conn->connect_error);
    }

    //create table
    $sql="CREATE TABLE formtable1(
        id INT(6) AUTO_INCREMENT PRIMARY KEY,
        full_name VARCHAR(30),
        email_address VARCHAR(30),
        phone_number BIGINT(10),
        dob VARCHAR(50),
        gender VARCHAR(10),
        address VARCHAR(30),
        password VARCHAR(30),
        country VARCHAR(20),
        state VARCHAR(20),
        city  VARCHAR(20),
        number BIGINT(10)
    )";

    if($conn->query($sql)===TRUE){
        echo "Table formtable1 created successfully";
    }else{
        echo "Error creating table: " .$conn->error;
    }

    //storing inputs with php variables
    $firstname=$_POST['full_name'];
    $emailaddress=$_POST['email_address'];
    $phonenumber=$_POST['phone_number'];
    $dob=$_POST['dob'];
    $gender=$_POST['gender'];
    $address=$_POST['address'];
    $password=$_POST['password'];
    $country=$_POST['dropdown'];
    $state=$_POST['state'];
    $city=$_POST['city'];
    $number=$_POST['number'];

    //insert data into tabele

    $sql="INSERT INTO formtable1(full_name,email_address,phone_number,dob,gender,address,password,country,state,city,number) VALUES('$firstname','$emailaddress','$phonenumber','$dob','$gender','$address',$password,'$country','$state', '$city','$number')";

    if($conn->query($sql)===TRUE) {
        echo "New record created successfully";
    }else{
        echo "Error: "  .$sql ."<br>" .$conn->error;
    }
    $conn->close();
?>

    
  
    
