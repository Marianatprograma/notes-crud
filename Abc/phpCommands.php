

<?php   

include('test.php');
require('test.php');
require_once('test.php');

if (isset($var)){};
if(!empty($var)){};
if(count($var) > 0){};

header("Location: index.php");  

$result = mysqli_query($connexion, $query);

$connexion = mysqli_connect(
    'localhost',
    'root',
    'password',
    'notes-crud'
);

$row = mysqli_fetch_array($result_tasks);

$password = password_hash($_POST['password'], PASSWORD_BCRYPT);


session_start();

if (isset($_SESSION['message'])) {

    session_unset();

};

$_POST['variable'];

$_SESSION['variable'] = 'String guardado';

?>


<!-- PHP + HTML -->
<?php if($var){ ?>
    <h1>haz esto</h1>
<?php }else{ ?> 
    <h1>Haz esto otro</h1>
<?php } ?>


<div>
    <?= $var ?>
</div>







