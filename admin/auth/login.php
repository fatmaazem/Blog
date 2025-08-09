<?php 
// require_once('../../app/config.php');
session_start();
define("URL","http://127.0.0.1/startbootstrap-clean-blog-gh-pages");
?> 
<?php require_once('../../app/helpers.php') ?> 
<?php if(isset($_SESSION['auth'])){redirect(URL."/admin");} ?>

 <!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Login</title>
  </head>
  <body>
        <div class="container ">
            <div class="row">
                <div class="col-8 mx-4 border p-3">
                    <h1 class="text-center my-4 border p-3"> Login</h1>
                    <form action="<?php echo URL."/admin/action/auth/login.php"?>" class="form border p-3" method="POST">
                            <?php require_once('../../inc/alert.php') ?>
                              <div class="mb-3">
                                    <label for="">User Name</label>
                                    <input type="text" name="username" class="form-control">
                                </div>
                                <div class="mb-3">
                                    <label for="">Password</label>
                                    <input type="password" name="password" class="form-control">

                                </div>
                                 <div class="mb-3">
                    <input type="submit" value="save" class="form-control bg-success">
                </div>
                    </form>

                </div>

            </div>
        </div>
 

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    
  </body>
</html>