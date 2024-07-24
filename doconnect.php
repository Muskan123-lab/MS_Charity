<?php

    $uname=$_POST['uname'];
    $uemail=$_POST['uemail'];
    $amount=$_POST['amount'];
    $msg=$_POST['msg'];

    //db connection

    $conn=new mysqli('localhost','root','','muskan');
   /* if($conn->_error){
        die('Connection Failed: '.$conn->connect_error);
    }
    else{*/
        $stmt=$conn->prepare("insert into donation(uname, uemail, amount, msg)
        values(?, ?, ?, ?)");
        $stmt->bind_param("ssis",$uname, $uemail, $amount, $msg);
        $stmt->execute();
        echo "Donation succesfull..";
        $stmt->close();
        $conn->close();
    

?>