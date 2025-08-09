<?php

$conn = mysqli_connect("localhost", "root", "", "blog_site");
if (!$conn) {
    die("Connection error");
}


for ($i = 1; $i <= 10; $i++) {
    $password = password_hash("123456", PASSWORD_DEFAULT);
    $sql = "INSERT INTO `users`(`name`, `password`, `username`)
            VALUES('Test Name $i', '$password', 'username-$i')";
    mysqli_query($conn, $sql);
}


for ($i = 1; $i <= 50; $i++) {
    $user_id = rand(1, 10);
    $sql = "INSERT INTO `posts`(`title`, `publisher`, `content`, `user_id`)
            VALUES(
                'Test Title $i',
                'Test Publisher $i',
                'Lorem ipsum dolor sit amet, consectetur adipisicing elit...',
                '$user_id'
            )";
    mysqli_query($conn, $sql);
}

// Insert `messages`
for ($i = 1; $i <= 50; $i++) {
    $sql = "INSERT INTO `messages`(`name`, `email`, `phone`, `content`)
            VALUES(
                'Test Name',
                'test$1@eraasoft.com',
                '01008430991',
                'Lorem ipsum dolor sit amet, consectetur adipisicing elit...'
            )";
    mysqli_query($conn, $sql);
}

//  Insert `site_info`
$sql = "INSERT INTO `site_info`(`site_name`, `phone`, `linked_in`, `facebook`, `twitter`, `bio`)
        VALUES(
            'Blog Data',
            '01008430991',
            'https://www.linkedin.com',
            'https://www.facebook.com',
            'https://www.twitter.com',
            'Lorem ipsum dolor sit amet, consectetur adipisicing elit...'
        )";
mysqli_query($conn, $sql);

echo "tamam";

?>
