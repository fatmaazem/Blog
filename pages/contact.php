<?php  
session_start();
require_once('database/connection.php');
require_once('inc/header.php');
?>



<!-- Page Header -->
<header class="masthead" style="background-image: url('assets/img/contact-bg.jpg')">
    <div class="container position-relative px-4 px-lg-5">
        <div class="row gx-4 gx-lg-5 justify-content-center">
            <div class="col-md-10 col-lg-8 col-xl-7">
                <div class="page-heading">
                    <h1>Contact Me</h1>
                    <span class="subheading"></span>
                </div>
            </div>
        </div>
    </div>
</header>

<!-- Main Content -->
<main class="mb-4">
    <div class="container px-4 px-lg-5">
        <div class="row gx-4 gx-lg-5 justify-content-center">
            <div class="col-md-10 col-lg-8 col-xl-7">
                <p>Want to get in touch? Fill out the form below to send me a message and I will get back to you as soon as possible!</p>

                
                <?php if (isset($_SESSION['success'])): ?>
                    <div class="alert alert-success text-center p-1">
                        <?= $_SESSION['success']; ?>
                    </div>
                    <?php unset($_SESSION['success']); ?>
                <?php endif; ?>

                
                <?php if (isset($_SESSION['errors']) && is_array($_SESSION['errors'])): ?>
                    <?php foreach ($_SESSION['errors'] as $error): ?>
                        <div class="alert alert-danger text-center p-1">
                            <?= $error; ?>
                        </div>
                    <?php endforeach; ?>
                    <?php unset($_SESSION['errors']); ?>
                <?php endif; ?>

                <!-- Contact Form -->
                <div class="my-5">
                    <form action="actions/messages.php" method="POST">
                        <div class="form-floating mb-3">
                            <input class="form-control" name="name" type="text" placeholder="Enter your name..." required />
                            <label for="name">Name</label>
                        </div>

                        <div class="form-floating mb-3">
                            <input class="form-control" name="email" type="email" placeholder="Enter your email..." required />
                            <label for="email">Email address</label>
                        </div>

                        <div class="form-floating mb-3">
                            <input class="form-control" name="phone" type="tel" placeholder="Enter your phone number..." required />
                            <label for="phone">Phone Number</label>
                        </div>

                        <div class="form-floating mb-3">
                            <textarea class="form-control" name="message" placeholder="Enter your message here..." style="height: 12rem" required></textarea>
                            <label for="message">Message</label>
                        </div>

                        <button class="btn btn-primary text-uppercase" id="submitButton" type="submit">Send</button>
                    </form>
                </div>

            </div>
        </div>
    </div>
</main>

<?php require_once('inc/footer.php'); ?>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="js/scripts.js"></script>

</body>
</html>
