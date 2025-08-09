
 <?php require_once('../../app/config.php'); ?>

 
  <?php require_once('../inc/header.php'); ?>

  <div class="container">
    <div class="row">
        <div class="col-12">
            <h1> Create post</h1>
            <?php require_once("../../inc/alert.php"); ?>
            <form action="<?php echo URL; ?>/admin/action/posts/create_post.php" method="Post" class="form border p-3">
           

               <div class="mb-3">
                <lable  for="">Post Title</lable>
        
                   <input type="text" name="title" class="form-control">
                   </div>

                   <div class="mb-3">
                <lable  for="">Publisher</lable>
        
                   <input type="text" name="publisher" class="form-control">
                   </div>
                  
 <div class="mb-3">
                <lable  for="">Content</lable>
        
                   <textarea name="content" rows="10" class="form-control"></textarea >
                   </div>
                   <div class="mb-3">
              
        
                   <input type="submit" value="save" class="form-control bg-success">
                   </div>
                  
            </form>
         
            
       
    </div>
  </div>

  <?php  require_once('../inc/footer.php'); ?>
  