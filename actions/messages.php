<?php
session_start();
require_once('../database/connection.php');
require_once('../app/helpers.php');

$errors = [];


if ($_SERVER['REQUEST_METHOD'] === "POST") {


    $name = sanitize($_POST['name']);
    $email = sanitize($_POST['email']);
    $phone = sanitize($_POST['phone']);
    $message = sanitize($_POST['message']);

    if (empty($email)) {
        $errors[] = "Email is required!";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = "Please enter a valid email address!";
    }

    if (empty($name)) {
        $errors[] = "Name is required!";
    }

    if (empty($phone)) {
        $errors[] = "Phone is required!";
    }

    if (empty($message)) {
        $errors[] = "Message is required!";
    }

    
    if (!empty($errors)) {
        $_SESSION['errors'] = $errors;
        header("Location: ../contact.php");
        exit();
    } else {
       
        $sql = "INSERT INTO `messages` (`name`, `email`, `phone`, `content`) 
                VALUES ('$name', '$email', '$phone', '$message')";
        $result = mysqli_query($conn, $sql);

        if ($result) {
            $_SESSION['success'] = "Your message has been sent successfully!";
            header("Location: ../contact.php");
            exit();
        } else {
            $_SESSION['errors'] = ["Something went wrong while saving your message!"];
            header("Location: ../contact.php");
            exit();
        }
        redirct['../contact.php'];
    }

} else {
    die("This method is not supported!");
}


