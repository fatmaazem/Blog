<?php
require_once('../app/config.php');
require_once('../app/helpers.php');
  require_once('inc/header.php'); ?>

  <div class="container">
    <div class="row">
        <div class="col-12">
            <h1>  Home page</h1>
            <h2><?php echo $_SESSION['auth']['name'];?></h2>
            <?php
            if (!isset($_SESSION['auth'])) {
    redirect(URL."/admin/auth/login.php");
;
            }
            ?>
    </div>
  </div>
</div>
  <?php  require_once('inc/footer.php'); ?>
  