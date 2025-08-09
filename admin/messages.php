<?php

  require_once('../app/config.php');
  require_once('../database/connection.php'); 
  
 $sql = "SELECT * FROM `messages`";
 $result = mysqli_query($conn,$sql);
// var_dump(mysqli_fetch_assoc($result));
 //die;

 
   require_once('inc/header.php'); 
?>
  <div class="container">
    <div class="row">
        <div class="col-12">
            <h1> messages page</h1>
            <?php require_once("../inc/alert.php"); ?>
          <table class="table table-bordered">
          <thead>
            <tr>
</tr>
<th>Name</th>
<th>Email</th>
<th>Phone</th>
<th>Message</th>
<th>Action</th>
</thead>
<tbady>
    <?php while($message = mysqli_fetch_assoc($result)): ?>
        <tr>
            <td> <?php echo $message['name'] . " - ".  $message['id']; ?></td>
              <td> <?php echo $message['email']; ?></td>
                <td> <?php echo $message['phone']; ?></td>
                  <td> <?php echo $message['content']; ?></td>
              <td>
                <a href="<?php echo URL;?>/admin/action/posts/delete_message.php?id=<?php echo $message['id']; ?>"   
                 class="btn btn-danger">
                 Delete
                 
                </a>
    </td>  
            
        </tr>
        <?php endwhile;?>
</tbady>
   </table> 
    


    </div>
  </div>

  <?php  require_once('inc/footer.php'); ?>
  