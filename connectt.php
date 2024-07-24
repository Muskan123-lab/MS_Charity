<?php


    $fname=$_POST['fname'];
    $lname=$_POST['lname'];
    $email=$_POST['email'];
    $pswd=$_POST['pswd'];
    $address=$_POST['address'];
    $number=$_POST['number'];
    $city=$_POST['city'];
    $state=$_POST['state'];
    $options=$_POST['options'];

    //db connection

    $conn=new mysqli('localhost','root','','muskan');
   /* if($conn->_error){
        die('Connection Failed: '.$conn->connect_error);
    }*/
    
        $stmt=$conn->prepare("insert into registration(fname, lname, email, pswd, address, number, city, state, options)
        values(?, ?, ?, ?, ?, ?, ?, ?, ?)");
        $stmt->bind_param("sssssisss",$fname, $lname, $email, $pswd, $address, $number, $city, $state, $options,);
        $stmt->execute();
        echo "you have registred succesfully..";
        $stmt->close();
        $conn->close();
   
?>