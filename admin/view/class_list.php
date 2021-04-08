<?php require('header.php'); ?>

<main class="container">
    <section class="mt-2 mb-2">
        <h2>Vehicle Class List</h2>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Name</th>
                    <th scope="col">Remove</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($classes as $class) { ?>
                    <tr>
                        <td><?php echo $class['class']; ?></td>
                        <td>
                            <form action="index.php" method="POST">
                                <input type="hidden" name="class_id" value="<?php echo $class['id']; ?>">
                                <input type="hidden" name="action" value="delete_class">
                                <button class="btn-close" aria-label="Delete"></button>
                            </form>
                        </td>

                    </tr>
                <?php } ?>
            </tbody>
        </table>

    </section>
    <section>
        <h2>Add Class</h2>
        <form action="../admin/index.php" method="POST">
            <label for="new_class">
                Class:
            </label>
            <input class="form-control m-1" type="text" name="new_class">
            <input type="hidden" name="action" value="add_class">
            <button class="btn btn-primary m-1">Add Class</button>
        </form>
    </section>

</main>

<?php require('footer.php'); ?>