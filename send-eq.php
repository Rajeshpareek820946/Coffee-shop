<?php
include_once("admin/config.php");

if($_SERVER['REQUEST_METHOD']='POST'){
    
    $name=$_POST['name'];
    $email=$_POST['email'];
    $phone=$_POST['number']??'';
    $message=$_POST['massage']??'';

    $insQuery="INSERT INTO `enquires`(`name`,`email`,`phone`,`message`,`status`)VALUES('$name','$email','$phone','$message','1')";
    $ins=$conn->query($insQuery);
    // print_r($ins);
    // die();

    if($ins){
        echo "successfull";
        header('location:contact.php');
    }else{
        header('location:contact.php');
    }
}

?>