<?php if (isset($_SESSION['message']) && $_SESSION['messageAct'] === true)  {?>    

<div class="alert alert-<?= $_SESSION['message_type'] ?> alert-dismissible fade show" role="alert">
    <?= $_SESSION['message'] ?>
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
        <span arial-hidden="true">&times;</span>
    </button>
</div>

<?php  }

$_SESSION['messageAct'] = false;

?>



