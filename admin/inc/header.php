<?php ?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
  </head>
  <body>
  <nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
  <ul class="navbar-nav me-auto mb-2 mb-lg-0">
    <!-- Home -->
    <li class="nav-item">
      <a class="nav-link active" aria-current="page" href="<?php echo URL;?>/admin/index.php">Home</a>
    </li>

    <!-- Messages -->
    <li class="nav-item">
      <a class="nav-link" href="<?php echo URL;?>/admin/messages.php">Messages</a>
    </li>

    <!-- Posts Dropdown -->
    <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
        Posts
      </a>
      <ul class="dropdown-menu">
        <li><a class="dropdown-item" href="<?php echo URL;?>/admin/posts/created.php">Add New</a></li>
        <li><a class="dropdown-item" href="<?php echo URL;?>/admin/posts/index.php">View All</a></li>
        <li><hr class="dropdown-divider"></li>
      </ul>
    </li>

    <!-- Users Dropdown -->
    <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
        Users
      </a>
      <ul class="dropdown-menu">
        <li><a class="dropdown-item" href="<?php echo URL;?>/admin/users/created.php">Add New</a></li>
        <li><a class="dropdown-item" href="<?php echo URL;?>/admin/users/index.php">View All</a></li>
        <li><hr class="dropdown-divider"></li>
      </ul>
    </li>

    <!-- Logout -->
    <li class="nav-item">
      <a class="nav-link" href="<?php echo URL;?>/admin/auth/logout.php">Logout</a>
    </li>
  </ul>
</div>

  </div>
</nav>
