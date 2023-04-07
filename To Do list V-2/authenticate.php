<?php
if($_SERVER["REQUEST_METHOD"]=="POST")
{
    include 'login.php';
    $email=$_POST["email"];
    $password=$_POST["password"];
    

    $sql="SELECT email,password FROM `registration` WHERE email='$email' and password='$password'";
    $result=mysqli_query($conn,$sql);
    $num=mysqli_num_rows($result);
    // echo "$num  $email  $password";

    if($num==1)
    {
        echo '<script>alert("Login Successful")</script>';
        header('Location: main.html');
    }
    // else{
    //     echo '<script>alert("Login Unsuccessful")</script>';
    // }
     
}
?>