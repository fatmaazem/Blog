<?php

 require_once('../../../app/config.php');
 require_once('../../../database/connection.php');
 require_once('../../../app/helpers.php');
 $id = $_GET['id']; 
 $sql = "DELETE FROM `users` WHERE `id`='$id' ";
 $result = mysqli_query($conn,$sql);
if(mysqli_affected_rows($conn)){
    $_SESSION['success'] = "item delete successfuly";
redirect(URL."/admin/users/index.php");
   // echo "tamam";
}//else{
   // echo "no";
//}

//echo $_GET['id'];




