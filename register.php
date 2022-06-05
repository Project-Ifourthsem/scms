<?php
require_once "connection.php";

if(isset($_POST['submit'])){
    $fname= $_POST['fname'];
    echo $fname;
    $lname= $_POST['lname'];
    $email= $_POST['email'];
    $password= $_POST['password'];
    $date= $_POST['date'];
    $gender= $_POST['gender'];
    $role= $_POST['role'];
    $sport= $_POST['sport'];
    $addres= $_POST['address'];
}

$sql = "INSERT INTO `register`(`fname`,`lname`,`email`,`password`,`dob`,`gender`,`role`,`sport`,`address`)
 values('$fname','$lname','$email','$password','$date','$gender', '$role', '$sport', '$addres')";

 $reuslt= mysqli_query($conn, $sql);

 if($reuslt==true){
     header("location: login_page.htm");
 }

 mysqli_close($conn);

?>