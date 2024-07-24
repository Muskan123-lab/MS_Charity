
<?php

    $cname=$_POST['cname'];
    $cemail=$_POST['cemail'];
    $cmsg=$_POST['cmsg'];

    //db connection

    $conn=new mysqli('localhost','root','','muskan');
   /* if($conn->_error){
        die('Connection Failed: '.$conn->connect_error);
    }
    else{*/
        $stmt=$conn->prepare("insert into contact(cname, cemail, cmsg)
        values(?, ?, ?)");
        $stmt->bind_param("sss",$cname, $cemail, $cmsg);
        $stmt->execute();
        echo "Submitted succesfull..";
        $stmt->close();
        $conn->close();
    

?>