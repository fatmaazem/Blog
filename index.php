<?php
require_once 'database/connection.php';

$page = $_GET['page'] ?? 'home';

include 'inc/header.php';

switch ($page) {
    case 'home':
        include 'pages/home.php';
        break;
    case 'about':
        include 'pages/about.php';
        break;
    case 'post':
        include 'pages/post.php';
        break;
    case 'contact':
        include 'pages/contact.php';
        break;
  
}

include 'inc/footer.php';
?>
