
 <?php require_once('../../app/config.php');
 require_once('../../app/helpers.php');
  require_once('../../database/connection.php'); 
 
 
 $id= $_GET['id'];
 $sql ="SELECT * FROM `users` WHERE `id`=$id";
 $result =mysqli_query($conn,$sql);
 $user =mysqli_fetch_assoc($result);
// dump($post);
 //var_dump($id);
 //die;
 
 ?>
 
 
 
 <?php require_once('../inc/header.php');?>

 
 
 

  <div class="container">
    <div class="row">
        <div class="col-12">
            <h1> Udate user</h1>
            <?php require_once("../../inc/alert.php"); ?>
           <form action="<?php echo URL;?>/admin/action/users/update.php?id=<?php echo $post['id']; ?>" method="POST" class="form border p-3">


               <div class="mb-3">
                <lable  for="">UserName</lable>
        
                   <input type="text" name="username" class="form-control" value="<?php echo $user['username'];?>">
                   </div>

                   <div class="mb-3">
                     <lable  for="">Name</lable>
        
                   <input type="text" name="name" class="form-control"  value="<?=$user['name']?>">
                   </div>
                  
 <div class="mb-3">
                <lable  for="">Password</lable>
        
                   <textarea name="password" rows="10" class="form-control"><?= $user['password'] ?></textarea>

                   </div>
                   <div class="mb-3">
              
        
                   <input type="submit" value="save" class="form-control bg-success">
                   </div>
                  
            </form>
         
            
       
    </div>
  </div>

  <?php  require_once('../inc/footer.php'); ?>
  