
<?php 
session_start();
include("db.php") ;

if (isset($_POST['save_task'])) {
    $title = $_POST['title'];
    $description = $_POST['description'];
    $query = "INSERT INTO task(title, description) VALUES('$title', '$description')";
    $result = mysqli_query($conn, $query);
    if (!$result) {
        die("Query failed");
    }

    $_SESSION['message'] = 'Task saved sucessfully';
    $_SESSION['message_type'] = 'success';
    $_SESSION['messageAct'] = true;
    header("Location: index.php");
}
?>
