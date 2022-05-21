<?php
include("db.php");
?>

<?php include("includes/header.php"); ?>

<div class="container p-4">
    <div class="row">
        <div class="col-md-4">
            <div class="card card-body">
                <form action="">
                    <div class="form-group">
                        <input type="text" name="title" class="form-control" placeholder="Task title" autofocus>
                    </div>
                    <div class="form-group">
                        <textarea name="description" rows="2" class="form-control" placeholder="Task description"></textarea>
                    </div>
                    <input type="text" type="submit" class="btn btn-success btn-block" name="save_task" value="Save Task">
                </form>

            </div>

        </div>
    </div>
</div>


<?php include("includes/footer.php"); ?>



    