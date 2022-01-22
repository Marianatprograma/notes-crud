<?php
session_start();
include("db.php");
include("includes/header.php");


?>


<?php if (!empty($_SESSION['username'])) : ?>
    <h1>Bienvenido <?php echo $_SESSION['username'] ?> </h1>

        <?php if ($_SESSION['username'] === "admin" ) : ?>

        <div class="container-center">
            <h1>Dashboard Administrator</h1>       
        </div>
</div>

<?php else : ?>
    <h1> NO ESTAS AUTORIZADO PARA ESTA RUTA</h1>
<?php endif; ?>




<?php else : ?>
    <h1> NO ESTAS AUTORIZADO PARA ESTA RUTA</h1>
<?php endif; ?>

 






<?php include("includes/footer.php") ?>