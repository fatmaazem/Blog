<?php require_once('../../../app/config.php');
 require_once('../../../app/helpers.php');
 require_once('../../../database/connection.php');
  require_once('../../../app/dp.php'); 
  $post = getRow("posts",$_GET['id']);
$id= $_GET['id'];
  foreach($_POST as $name => $value){
    $$name = sanitize($value);
  }
 $sql = "UPDATE `posts` SET 
           `title` = '$title',
           `publisher` = '$publisher',
           `content` = '$content'
        WHERE `id` = '$id'";

 $result = mysqli_query($conn,$sql);

 if(mysqli_affected_rows($conn)){
    $_SESSION['success'] ="data updat successfuly";
 }else{
    $errors ="update error";
 }
redirect(URL."/admin/posts/index.php");
