<?php
require_once('../../app/config.php');
require_once('../../database/connection.php');
require_once('../../app/helpers.php');


$sql = "SELECT * FROM `users` ORDER BY id DESC";
$result = mysqli_query($conn, $sql);

require_once('../inc/header.php');
?>

<div class="container">
  <div class="row">
    <div class="col-12">
      <h1>Users page</h1>
      <?php require_once("../../inc/alert.php"); ?>

      <table class="table table-bordered">
        <thead class="table-light">
          <tr>
             <th>ID</th>
            <th>Name</th>
            <th> User Name</th>
             <th>Action</th>
           
           
           
          </tr>
        </thead>
        <tbody>
          <?php while($user = mysqli_fetch_assoc($result)): ?>
            <tr>
              <td><?= $user['id']; ?></td>
               
              <td><?= htmlentities($user['name']); ?></td>
              <td><?= htmlentities($user['username']); ?></td>
             
              <td>
                <a href="<?= URL; ?>/admin/users/edit.php?id=<?= $user['id']; ?>" class="btn btn-sm btn-info">Edit</a>
               <a href="<?= URL; ?>/admin/action/users/delete.php?id=<?= $user['id']; ?>" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure you want to delete this user?');">Delete</a>

              </td>
            </tr>
          <?php endwhile; ?>
        </tbody>
      </table>
    </div>
  </div>
</div>

<?php require_once('../inc/footer.php'); ?>
