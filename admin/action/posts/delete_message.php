<?php

 require_once('../../../app/config.php');
 require_once('../../../database/connection.php');
 require_once('../../../app/helpers.php');
 $id = $_GET['id']; 
 $sql = "DELETE FROM `messages` WHERE `id`='$id' ";
 $result = mysqli_query($conn,$sql);
if(mysqli_affected_rows($conn)){
    $_SESSION['success'] = "item delete successfuly";
redirect(URL."/admin/messages.php");
   // echo "tamam";
}//else{
   // echo "no";
//}

//echo $_GET['id'];