
<?php include("includes/header.php")?>
<h1>SignUp</h1>

<?php 
session_start();
include("db.php") ;

if (isset($_POST['username']) && isset($_POST['password'])) {

      $username = $_POST['username'];
      $password = password_hash($_POST['password'], PASSWORD_BCRYPT);

      $query = "INSERT INTO users(username, password) VALUES('$username', '$password')";
      $result = mysqli_query($conn, $query);      

      if (!$result) {
        die("Query failed");
      }
      $_SESSION['message'] = 'User created sucessfully, login to your account';
      $_SESSION['message_type'] = 'success';
      $_SESSION['messageAct'] = true;
      
      $_SESSION['username'] = $username;

      header("Location: login.php");
}
?>


<form action="signup.php" method="POST">
      <input name="username" type="text" placeholder="Enter your username" required>
      <input name="password" type="password" placeholder="Enter your Password" required>
      <input type="submit" value="Submit">
</form>