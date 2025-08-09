<?php

 require_once('../../app/config.php');
 require_once('../../database/connection.php');
 require_once('../../app/helpers.php');
 //var_dump($_POST);
// die;()
$title =sanitize($_POST['title']);
$publisher =sanitize($_POST['publisher']);
$content =sanitize($_POST['content']);


$errors=[];
if ($_SERVER['REQUEST_METHOD'] == "POST") {

 if (empty($title)) {
       $errors[] = "title is required!";
    } //elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        //$errors[] = "Please enter a valid email address!";
    


   if(empty($errors)){
       $user_id=$_SESSION['auth']['id']
        $sql = "INSERT INTO `posts` (`title`, `publisher`, `content`, `user_id`) 
                VALUES ('$title', '$publisher', '$content', '$user_id')";
        $result = mysqli_query($conn, $sql);
        if(mysqli_affected_rows($conn)){
            $_SESSION['success'] = "data inserted successfuly";
        }
   }else{

        $_SESSION['errors'] =$errors;
        
        
    }
    
    redirect(URL."/admin/posts/created.php");
    exit;
 }else{
         die("This method is not supported!");
    }

