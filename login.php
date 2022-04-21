

<?php include('connection.php') ;

session_start();

error_reporting(0);

$err= "";

if (isset($_POST['submit'])) {
    $err = "";
	$email = $_POST['email'];
	$password = $_POST['password'];

	$sql = "SELECT * FROM users WHERE Emailid='$email' AND Password='$password';";
	$result = mysqli_query($conn, $sql);
	
	if ($result->num_rows > 0) {
		$row = mysqli_fetch_assoc($result);
		$_SESSION['Username'] = $row['Username'];
        $_SESSION['id'] = $row['Id'];
        if($row['Id'] == 1){
            header("Location: admin.php");
        }
        else{
            header("Location: home.php");
        }
	}
    else{
        $err = "Email or Password Wrong.";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
     
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <div class="header">
        <h2>Login Here!</h2>
    </div>
      
    <form method="post" action="login.php">
  
        <div class="input-group">
            <label>Enter Email-ID</label>
            <input type="text" name="email" >
        </div>
        <div class="input-group">
            <label>Enter Password</label>
            <input type="password" name="password">
            <span class="error"><?php echo $err;?></span>
        </div>
        <div class="input-group">
            <button class="btn" name="submit">Login</button>
        </div>
         
 
 
<p> New Here?<a href="register.php">Click here to register!</a></p>
 
 
 
    </form>
</body>
 
</html>