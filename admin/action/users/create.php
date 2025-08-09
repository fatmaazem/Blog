<?php

 require_once('../../../app/config.php');
 require_once('../../../database/connection.php');
 require_once('../../../app/helpers.php');
 //var_dump($_POST);
// die;()
$username =sanitize($_POST['username']);
$name =sanitize($_POST['name']);
$password =sanitize($_POST['password']);


$errors=[];
if ($_SERVER['REQUEST_METHOD'] === "POST") {

 if (empty($name)) {
       $errors[] = "name is required!";
    } //elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        //$errors[] = "Please enter a valid email address!";
    


   if(empty($errors)){
      $password  =password_hash($password,PASSWORD_DEFAULT);
        $sql = "INSERT INTO `users` (`username`, `name`, `password`) 
                VALUES ('$username', '$name', '$password')";
        $result = mysqli_query($conn, $sql);
        if(mysqli_affected_rows($conn)){
            $_SESSION['success'] = "data inserted successfuly";
        }
   }else{

        $_SESSION['errors'] =$errors;
        
        
    }
    
    redirect(URL."/admin/users/created.php");
    exit;
 }else{
         die("This method is not supported!");
    }

