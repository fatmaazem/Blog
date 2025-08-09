<?php
require_once('../../app/config.php');
require_once('../../database/connection.php');
require_once('../../app/helpers.php');

?>

<?php require_once('../inc/header.php'); ?>

<div class="container">
  <div class="row">
    <div class="col-12">
      <h1>Create User</h1>
      <?php require_once("../../inc/alert.php"); ?>

      <form action="<?= URL; ?>/admin/action/users/create.php" method="POST" class="form border p-3">
        <div class="mb-3">
          <label for="" class="form-label">User Name</label>
          <input type="text" name="username" id="username" class="form-control" required>
        </div>

        <div class="mb-3">
          <label for="email" class="form-label">Name</label>
          <input type="text" name="name"  class="form-control" required>
        </div>

        <div class="mb-3">
          <label for="phone" class="form-label">Passwrd</label>
          <input type="text" name="password" id="password" class="form-control" required>
        </div>

        <div class="mb-3">
          <input type="submit" value="Save" class="btn btn-success">
        </div>
      </form>
    </div>
  </div>
</div>

<?php require_once('../inc/footer.php'); ?>
