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

