<?php

$conn = mysqli_connect("localhost", "root", "", "blog_site");
if (!$conn) {
    die("Connection error");
}

// Drop old tables
mysqli_query($conn, "DROP TABLE IF EXISTS `messages`");
mysqli_query($conn, "DROP TABLE IF EXISTS `posts`");
mysqli_query($conn, "DROP TABLE IF EXISTS `users`");
mysqli_query($conn, "DROP TABLE IF EXISTS `site_info`");

// Create `users`
$sql = "CREATE TABLE IF NOT EXISTS `users` (
    `id` INT PRIMARY KEY AUTO_INCREMENT,
    `name` VARCHAR(80) NOT NULL,
    `username` VARCHAR(80) NOT NULL UNIQUE,
    `password` VARCHAR(200) NOT NULL
)";
mysqli_query($conn, $sql);

// Create `posts`
$sql = "CREATE TABLE IF NOT EXISTS `posts` (
    `id` INT PRIMARY KEY AUTO_INCREMENT,
    `title` VARCHAR(150) NOT NULL,
    `publisher` VARCHAR(80) NOT NULL,
    `content` TEXT NOT NULL,
    `user_id` INT NOT NULL,
    `created_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (user_id) REFERENCES users(id)
)";
mysqli_query($conn, $sql);

// Create `messages`
$sql = "CREATE TABLE IF NOT EXISTS `messages` (
    `id` INT PRIMARY KEY AUTO_INCREMENT,
    `name` VARCHAR(80) NOT NULL,
    `email` VARCHAR(80) NOT NULL,
    `phone` VARCHAR(80) NOT NULL,
    `content` TEXT NOT NULL
)";
mysqli_query($conn, $sql);

// Create `site_info`
$sql = "CREATE TABLE IF NOT EXISTS `site_info` (
    `id` INT PRIMARY KEY AUTO_INCREMENT,
    `site_name` VARCHAR(80) NOT NULL,
    `phone` VARCHAR(80) NOT NULL,
    `linked_in` VARCHAR(800) NOT NULL,
    `twitter` VARCHAR(800) NOT NULL,
    `facebook` VARCHAR(800) NOT NULL,
    `bio` TEXT NOT NULL
)";
mysqli_query($conn, $sql);

echo "tamam";


require_once('seeder.php');

?>
