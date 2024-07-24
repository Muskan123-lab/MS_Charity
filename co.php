<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

$conn = newmysqli('localhost','root','','test')
if($conn -> connect error){
   die('conntection failed') : '.conn->connect_error'

}else { 
    $stmt=$conn->prepare("insert into registration (fisrtname,lastname,email,message)
        values(?'?,?,?)");
    $stmt->db2_bind_param(sssssi,$firstname,$lastname,$email,$message);
    $stmt->execute();
    echo " succes";
    $stmt->close();
    $conn-> close();
    // code...
}

?>
