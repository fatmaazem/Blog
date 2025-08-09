<?php

session_start();
define("URL","http://127.0.0.1/startbootstrap-clean-blog-gh-pages");
require_once('../../../database/connection.php');
require_once('../../../app/helpers.php');


// $title =sanitize($_POST['title']);
// $publisher =sanitize($_POST['publisher']);
// $content =sanitize($_POST['content']);


foreach ($_POST as $key => $value) {
    $$key = sanitize($value);
}

//validation


//insert into database
$errors =[];
    if ($_SERVER['REQUEST_METHOD'] == "POST") {


if (empty($username) || empty($password)) {

 
    
            $errors[] = "user name or password not correct!";
        } 

        //validation

        if (empty($errors)) {

               $sql="SELECT *FROM users where username='$username'";
                $result=mysqli_query($conn,$sql);
                $user =mysqli_fetch_assoc($result);


    if (password_verify($password,$user['password'])) {
        $_SESSION['auth'] = $user; 
       // var_dump( $_SESSION['auth']);
        


        redirect(URL."/admin/index.php");
 
    }else{
        $errors[] = "user name or password not correct!";
       $_SESSION['errors'] = $errors;
                
            redirect(URL."/admin/auth/login.php");
   }

            
        }else {
            // $_SESSION['errors'] = $errors;
                    $_SESSION['errors'] = ["User not found. Please create an account."];

            redirect(URL. "/admin/users/created.php"); 
        }
        


    }else{
        die("this method is not supported");
    }


    

