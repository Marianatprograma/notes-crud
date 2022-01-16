<?php include("includes/message.php")?>

<div class="card card-body">
    <form action="save_task.php" method="POST">
        <div class="form-group">
            <input type="text" name="title" class="form-control" placeholder="Task Title" autofocus required>
        </div>
        <div class="form-group">
            <textarea name="description" rows="2" class="form-control" placeholder="Task Description" required></textarea>
        </div>
        <input type="submit" class="btn btn-success btn-block" name="save_task" value="Save Task">
    </form>
</div>