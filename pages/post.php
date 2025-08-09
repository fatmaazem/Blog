<?php  
require_once('database/connection.php');
 require_once('inc/header.php'); 


$post_id = $_GET['id'] ?? null;
$user_ip = $_SERVER['REMOTE_ADDR'];


if (isset($_POST['submit_comment'])) {
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $comment = mysqli_real_escape_string($conn, $_POST['comment']);
    $sql = "INSERT INTO comments (post_id, username, comment) VALUES ($post_id, '$username', '$comment')";
    mysqli_query($conn, $sql);
    header("Location: index.php?page=post&id=$post_id");
    exit;

}


if (isset($_POST['like_btn'])) {
    $check = mysqli_query($conn, "SELECT * FROM likes WHERE post_id = $post_id AND user_ip = '$user_ip'");
    if (mysqli_num_rows($check) == 0) {
        $sql = "INSERT INTO likes (post_id, user_ip) VALUES ($post_id, '$user_ip')";
        mysqli_query($conn, $sql);
    }
   header("Location: index.php?page=post&id=$post_id");
   exit;

}


if ($post_id) {
   $sql = "SELECT * FROM posts INNER JOIN users ON users.id = posts.user_id WHERE posts.id = '$post_id'";
   $result = mysqli_query($conn, $sql);
   if ($result && mysqli_num_rows($result) > 0) {
       $post = mysqli_fetch_assoc($result);
   } else {
       $sql = "SELECT * FROM posts";
       $result = mysqli_query($conn, $sql);
       $posts = mysqli_fetch_all($result, MYSQLI_ASSOC);
   }
} else {
   $sql = "SELECT * FROM posts";
   $result = mysqli_query($conn, $sql);
   $posts = mysqli_fetch_all($result, MYSQLI_ASSOC);
}
?>


<?php if (isset($post)) : ?>

<!-- Single Post View -->
<header class="masthead" style="background-image: url('assets/img/post-bg.jpg')">
  <div class="container position-relative px-4 px-lg-5">
    <div class="row gx-4 gx-lg-5 justify-content-center">
      <div class="col-md-10 col-lg-8 col-xl-7">
        <div class="post-heading">
          <h1><?php echo $post['title']; ?></h1>
          <h2 class="subheading"><?php echo $post['subtitle'] ?? ''; ?></h2>
          <span class="meta">
            Posted by
            <a href="#!"><?php echo $post['publisher']; ?></a>
            on <?php echo date('F d, Y', strtotime($post['created_at'])); ?>
          </span>
        </div>
      </div>
    </div>
  </div>
</header>


<article class="mb-4">
  <div class="container px-4 px-lg-5">
    <div class="row gx-4 gx-lg-5 justify-content-center">
      <div class="col-md-10 col-lg-8 col-xl-7">
        <p class="border p-2">Created By : <?= $post['name']; ?></p>
        <p><?= nl2br($post['content']); ?></p>

      
        <?php
        $likes_result = mysqli_query($conn, "SELECT COUNT(*) AS total FROM likes WHERE post_id = $post_id");
        $likes = mysqli_fetch_assoc($likes_result)['total'];
        ?>
        <p>Number of like <?= $likes ?></p>

        
        <?php
        $check = mysqli_query($conn, "SELECT * FROM likes WHERE post_id = $post_id AND user_ip = '$user_ip'");
        $already_liked = mysqli_num_rows($check) > 0;
        ?>
        <form method="POST" class="mb-3">
          <button type="submit" name="like_btn" class="btn btn-primary" <?= $already_liked ? 'disabled' : '' ?>>
         Like
          </button>
        </form>

        
        <h4 class="mt-4">Add comment</h4>
        <form method="POST">
          <input type="text" name="username" placeholder="name" class="form-control my-2" required>
          <textarea name="comment" placeholder="comment" class="form-control my-2" required></textarea>
          <button type="submit" name="submit_comment" class="btn btn-success">post a comment</button>
        </form>

        
        <h4 class="mt-4">comments</h4>
        <?php
        $sql = "SELECT * FROM comments WHERE post_id = $post_id ORDER BY created_at DESC";
        $result = mysqli_query($conn, $sql);
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<div class='border rounded p-2 mb-2'><strong>{$row['username']}</strong>: " . nl2br(htmlspecialchars($row['comment'])) . "</div>";
        }
        ?>
      </div>
    </div>
  </div>
</article>

<?php elseif (isset($posts)) : ?>

<!-- All Posts View -->
<div class="container px-4 px-lg-5">
  <h1>All Posts</h1>
  <?php foreach ($posts as $p) : ?>
    <h2><a href="?id=<?php echo $p['id']; ?>"><?php echo $p['title']; ?></a></h2>
    <p><?php echo substr($p['content'], 0, 100); ?>...</p>
  <?php endforeach; ?>
</div>

<?php else : ?>
<p>No posts found.</p>
<?php endif; ?>

<?php require_once('inc/footer.php'); ?>