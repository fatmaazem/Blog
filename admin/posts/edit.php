
 <?php require_once('../../app/config.php');
 require_once('../../app/helpers.php');
  require_once('../../database/connection.php'); 
 
 
 $id= $_GET['id'];
 $sql ="SELECT * FROM `posts` WHERE `id`=$id";
 $result =mysqli_query($conn,$sql);
 $post =mysqli_fetch_assoc($result);
// dump($post);
 //var_dump($id);
 //die;
 
 ?>
 
 
 
 <?php require_once('../inc/header.php');?>

 
 
 

  <div class="container">
    <div class="row">
        <div class="col-12">
            <h1> Udate post</h1>
            <?php require_once("../../inc/alert.php"); ?>
           <form action="<?php echo URL;?>/admin/action/posts/update_post.php?id=<?php echo $post['id']; ?>" method="POST" class="form border p-3">


               <div class="mb-3">
                <lable  for="">Post Title</lable>
        
                   <input type="text" name="title" class="form-control" value="<?php echo $post['title'];?>">
                   </div>

                   <div class="mb-3">
                     <lable  for="">Publisher</lable>
        
                   <input type="text" name="publisher" class="form-control"  value="<?=$post['publisher']?>">
                   </div>
                  
 <div class="mb-3">
                <lable  for="">Content</lable>
        
                   <textarea name="content" rows="10" class="form-control"><?= $post['content'] ?></textarea>

                   </div>
                   <div class="mb-3">
              
        
                   <input type="submit" value="save" class="form-control bg-success">
                   </div>
                  
            </form>
         
            
       
    </div>
  </div>

  <?php  require_once('../inc/footer.php'); ?>
  