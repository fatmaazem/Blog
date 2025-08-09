<?php  
require_once('database/connection.php');
require_once('inc/header.php');

$sql ="SELECT posts.id AS post_id,posts.title,posts.publisher,posts.content,posts.user_id,posts.created_at,users.name 
       FROM `posts` 
       JOIN `users` ON users.id = posts.user_id";

$result = mysqli_query($conn, $sql);
?>

<!-- Page Header-->
<header class="masthead" style="background-image: url('assets/img/home-bg.jpg')">
    <div class="container position-relative px-4 px-lg-5">
        <div class="row gx-4 gx-lg-5 justify-content-center">
            <div class="col-md-10 col-lg-8 col-xl-7">
                <div class="site-heading">
                    <h1><?php echo $site_info['site_name'];?></h1>
                    <span class="subheading">A Blog Theme by Start Bootstrap</span>
                </div>
            </div>
        </div>
    </div>
</header>

<!-- Main Content-->
<div class="container px-4 px-lg-5">
    <div class="row gx-4 gx-lg-5 justify-content-center">
        <div class="col-md-10 col-lg-8 col-xl-7">
            <?php while ($row = mysqli_fetch_assoc($result)): ?>
                <div class="post-preview">
                    <a href="index.php?page=post&id=<?php echo $row['post_id']; ?>">
                        <h2 class="post-title"><?php echo $row['title'] ?></h2>
                        <h3 class="post-subtitle">Problems look mighty small from 150 miles up</h3>
                    </a>
                    <p class="post-meta">
                        Posted by <a href="#!"><?php echo $row['publisher'] ?></a>
                        on <?php echo date('F j, Y', strtotime($row['created_at'])) ?>
                    </p>
                </div>
                <hr class="my-4" />
            <?php endwhile; ?>
        </div>
    </div>
</div>

<?php require_once('inc/footer.php'); ?>
