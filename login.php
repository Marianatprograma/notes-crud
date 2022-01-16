<?php include("includes/header.php") ?>

<h1>LOGIN</h1>

<?php 
session_start();
include("db.php"); 

if(isset($_SESSION['user_id'])){ 
        header('Location: index.php');
} else{
      include("includes/message.php");
}


if (!empty($_POST['username']) && !empty($_POST['password'])){

        $username = $_POST['username'];

        $query = "SELECT id, username, password FROM users WHERE (username='$username')";
        $result = mysqli_query($conn, $query);

        $userdata = mysqli_fetch_array($result);

        if(count($userdata) > 0 &&  password_verify($_POST['password'], $userdata['password'])){
         $_SESSION['user_id'] = $userdata['id'];
         $_SESSION['username'] = $username;
         header('Location: index.php');
        }else{
                $_SESSION['message'] = 'Try again';
                $_SESSION['message_type'] = 'warning';
                $_SESSION['messageAct'] = true;
                include("includes/message.php");           
        }   

}
?>



<form action="login.php" method="POST">
        <input name="username" type="text" placeholder="Enter your username">
        <input name="password" type="password" placeholder="Enter your Password">
        <input type="submit" value="Submit">
</form>

