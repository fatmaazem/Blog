<?php
require_once('../../app/config.php');
require_once('../../database/connection.php'); 

$sql ="SELECT posts.id AS post_id,posts.title,posts.publisher,posts.content,posts.user_id,posts.created_at,users.name FROM `posts` JOIN `users`ON users.id = posts.user_id ";
$result = mysqli_query($conn, $sql);

require_once('../inc/header.php'); 
?>

<div class="container">
  <div class="row">
    <div class="col-12">
      <h1>Posts Page</h1>
      <?php require_once("../../inc/alert.php"); ?>
      <table class="table table-bordered">
        <thead>
          <tr>
            <th>Title</th>
            <th>Publisher</th>
            <th>User</th>
            <th>Content</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
          <?php while($post = mysqli_fetch_assoc($result)): ?> 
            <tr>
              <td> <?php echo $post['title'] . " - ". $post['post_id']; ?></td>
              <td> <?php echo $post['publisher']; ?></td>
              <td> <?php echo $post['name']; ?></td>
              <td> <?php echo $post['content']; ?></td>
              <td>
                <a href="<?php echo URL;?>/admin/posts/edit.php?id=<?php echo $post['post_id']; ?>" class="btn btn-info">
                  Edit
                </a>
                 <a href="<?php echo URL;?>/admin/action/posts/delete_post.php?id=<?php echo $post['post_id']; ?>" class="btn btn-danger">
                  Delete
                </a>
                 
              </td>  
            </tr>
          <?php endwhile; ?>
        </tbody>
      </table> 
    </div>
  </div>
</div>

<?php require_once('../inc/footer.php'); ?>
