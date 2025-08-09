<?php

$conn = mysqli_connect("localhost","root","","blog_site");
if(!$conn){
    die("eror in connection");
}






$sql_site_info ="SELECT * FROM`site_info` LIMIT 1";
$result_site_info = mysqli_query($conn,$sql_site_info);
$site_info = mysqli_fetch_assoc($result_site_info);
// var_dump($site_info);
// die;
