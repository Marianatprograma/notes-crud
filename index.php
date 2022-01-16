<?php
session_start();
include("db.php");
include("includes/header.php");

?>


<?php if (!empty($_SESSION['username'])) : ?>
    <h1>Bienvenido <?php echo $_SESSION['username'] ?> </h1>
<?php else : ?>
    <h1>Bienvenidos a nuestra página te invitamos a <a href="signup.php"> Registrarte</a> o <a href="login.php"> Ingresar</a> </h1>
<?php endif; ?>



<div class="container p-4">

    <div class="row">
        <div class="col-md-4">
            <?php include("includes/notesForm.php") ?>
        </div>

        <div class="col-md-8">
            <?php include("includes/table.php") ?>
        </div>
    </div>

</div>

<?php include("includes/footer.php") ?>