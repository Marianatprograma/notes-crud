<?php

try {
    $conn = mysqli_connect(
        'localhost',
        'root',
        '',
        'notes-crud'
    ); 
} catch(mysqli_sql_exception $error){
    error_log($error->getMessage());
    header("Location: tryagain.php"); 
}

      
?>
