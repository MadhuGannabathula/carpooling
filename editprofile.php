<?php include('checklog.php'); 

$id = $_SESSION['id'];
$sql = "SELECT * FROM users WHERE Id = $id;";

$result = mysqli_query($conn, $sql);
$r = mysqli_fetch_assoc($result);

if(isset($_POST['submit'])){
	echo "finally";
	$name = $_POST['name'];
	$email = $_POST['email'];
	$phonenumber = $_POST['phonenumber'];
	$password = $_POST['password'];
	$sql = "UPDATE users SET Username = '$name', Emailid = '$email', phonenumber = '$phonenumber' , Password = '$password'  WHERE Id = $id;";
    if($conn->query($sql) === TRUE){
        header("Location: userprofile.php");
    }
}

?>
<!DOCTYPE html>
<html>
<head>
	<title>Edit Profile</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="header">
		<h2>Edit Profile</h2>
	</div>
	
	<form method="post" action="">

		<div class="input-group">
			<label>Name</label>
			<input type="text" name="name" value="<?php echo $r['Username'] ;?>">
		</div>
		<div class="input-group">
			<label>Email-ID</label>
			<input type="text" name="email" value = "<?php echo $r['Emailid'] ;?>">
		</div>
		<div class="input-group">
			<label>Phoen Number</label>
			<input type="number" name="phonenumber" value = "<?php echo $r['phonenumber'] ;?>">
		</div>
		<div class="input-group">
			<label>Password</label>
			<input type="text" name="password" value = "<?php echo $r['Password'] ;?>">
		</div>
		<div class="input-group">
			<button class="btn" name="submit">Edit details</button>
		</div>
	</form>
</body>