
<?php
include('connection.php') ;
session_start();
$nameErr = $emailErr = $phonenumberErr = $passwordErr = "";
$name = $email = $phonenumber = "";
$valid = TRUE;
$regex = "/^[a-zA-Z\d\.\_]+@[a-zA-Z\d\.\_]+\.[a-zA-Z\.]{2,}+$/";
error_reporting(0);
if (isset($_POST['submit'])) {
    $name=trim($_POST['username']);
	$email = trim($_POST['email']);
	$phonenumber = trim($_POST['phonenumber']);
	$password1 = trim($_POST['password1']);
    $password2 = trim($_POST['password2']);

	if($name == ""){
		$valid = FALSE;
		$nameErr = "Name is required";
	}else if(!preg_match("/^[a-zA-Z-' ]*$/",$name)) {
		$valid = FALSE;
		$nameErr = "Only letters and white space allowed";
	}
	
	if($email == ""){
		$valid = FALSE;
		$emailErr = "Email is required";
	}else if (!preg_match($regex,$email)) {
		$valid = FALSE;
		$emailErr = "Invalid Email";
	}
	
	if($phonenumber == ""){
		$valid = FALSE;
		$phonenumberErr = "Phonenumber is required";
	}else if (!preg_match("/^[0-9]{10,12}$/",$phonenumber)) {
		$valid = FALSE;
		$phonenumberErr = "Invalid Phone Number";
	}
	
	if($password1 == ""){
		$valid = FALSE;
		$password1Err = "Password is required";
	}
    else if($password1 != $password2){
		$valid = FALSE;
		$passwordErr = "Passwords should match";
    }
    if($valid){
        echo "entered check";
        $sql = "SELECT * FROM users WHERE Emailid='$email';";
	    $result = mysqli_query($conn, $sql);

        if ($result->num_rows > 0) {
            echo "Email already regstered please login";
            
        } else {
            echo "passed";
			$_SESSION['username'] = $username;
            $sql = "INSERT INTO users (Username, Emailid,Phonenumber, Password) VALUES ('$username', '$email',$phonenumber, '$password1');";
            if ($conn->query($sql) === TRUE) {
                echo "New record created successfully";
				$sql = "SELECT Id FROM users WHERE Emailid='$email' AND Password='$password1';";
				$result = mysqli_query($conn, $sql);
				$_SESSION['id'] = mysqli_fetch_assoc($result);
				header("Location: home.php");
            }
        }
        
    }
	
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>REGISTER</title>
	<link rel="stylesheet" type="text/css" href="./style.css">
</head>
<body>
	<div class="header">
		<h2>Register</h2>
	</div>
	
	<form method="post" action="">

		<div class="input-group">
			<label>Enter Username</label>
			<input type="text" name="username" value=<?php echo "$name"; ?>>
			<span class="error"><?php echo $nameErr;?></span>
		</div>
		<div class="input-group">
			<label>Email</label>
			<input type="email" name="email" value= <?php echo "$email" ; ?>>
			<span class="error"><?php echo $emailErr;?></span>
		</div>
		<div class="input-group">
			<label>Enter Phonenumber</label>
			<input type="number" name="phonenumber" value= <?php echo "$phonenumber" ; ?>>
			<span class="error"><?php echo $phonenumberErr;?></span>
		</div>
		<div class="input-group">
			<label>Enter Password</label>
			<input type="password" name="password1">
			<span class="error"><?php echo $password1Err;?></span>
		</div>
		<div class="input-group">
			<label>Confirm password</label>
			<input type="password" name="password2">
			<span class="error"><?php echo $passwordErr;?></span>
		</div>
		<div class="input-group">
			<button class="btn" name="submit">Register</button>
		</div>
		<p>
			Visited us before? <a href="login.php">Click Here!</a>
		</p>
	</form>
</body>