<?php require('header.php'); ?> 

<main class="container">
    <section class="mt-2 mb-2">
        <h2>Register a New Admin User</h2>
        <?php if (!empty($errors)) {
            foreach ($errors as $error) { ?>
                <p class="text-danger"> <?php echo $error ?> </p>
        <?php }
        } ?>
        <form action="../admin/index.php" method="POST">
            <label for="username">
                Username:
            </label>
            <input class="form-control m-1" type="text" name="username">
            <label for="password">
                Password:
            </label>
            <input class="form-control m-1" type="text" name="password">
            <label for="confirm_password">
                Confirm Password:
            </label>
            <input class="form-control m-1" type="text" name="confirm_password">
            <input type="hidden" name="action" value="register">
            <button class="btn btn-primary m-1">Register</button>
        </form>
    </section>

</main>

<?php require('footer.php'); ?>