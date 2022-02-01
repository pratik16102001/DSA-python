<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>

	<title>Registration</title>
	<style type="text/css">
		.error {
			font-size: 15px;
			color: red;
		}
	</style>
</head>

<body>
	<?php
session_start();
$name = $address = $city = $mail = $phone = $password = NULL;
$nameErr = $addressErr = $cityErr = $mailErr = $phoneErr = $passwordErr = NULL;
$flag=TRUE;
function test_input($data)
{
	$data = trim($data);
	$data = stripslashes($data);
	$data = htmlspecialchars($data);
	return $data;
}
	if ($_SERVER["REQUEST_METHOD"] == "POST") {

		if (empty($_POST["name"])) {
			$nameErr = "First name is required";
			$flag = false;
		} else {
			$name = test_input($_POST["name"]);
		}

		if (empty($_POST["address"])) {
			$addressErr = "address is required";
			$flag = false;
		} else {
			$address = test_input($_POST["address"]);
		}

		if (empty($_POST["city"])) {
			$cityErr = "city is required";
			$flag = false;
		} else {
			$city = test_input($_POST["city"]);
		}

		if (empty($_POST["mail"])) {
			$mailErr = "Email is required";
			$flag = false;
		} else {
			$mail = test_input($_POST["mail"]);
		}

		if (empty($_POST["phone"])) {
			$phoneErr = "phone is required";
			$flag = false;
		} else {
			$phone = test_input($_POST["phone"]);
		}
		
		if (empty($_POST["password"])) {
			$passwordErr = "password is required";
			$flag = false;
		} else {
			$password = test_input($_POST["password"]);
		}

		
		// submit form if validated successfully
		if ($flag) {
			$conn = new mysqli('localhost', "root", "", "machenic");

			if ($conn->connect_error) {
				die("connection failed error: " . $conn->connect_error);
			}
			
			$check_mail = mysqli_query($conn, "SELECT mail from user WHERE mail='$mail'");
			if(mysqli_num_rows($check_mail)>0)
			{
				echo "<script> alert('Mail already exits');</script>";
			}
			else{
				if($_SERVER["REQUEST_METHOD"] == "POST")
				{
					$result = mysqli_query($conn, "INSERT INTO user (name,address,city,mail,phone,password) VALUES('$name','$address','$city','$mail','$phone','$password')");
					
				}
				header('location:index.php');
			}
		}
	}

?>
	<form action=" <?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">
		<div class="card pt-2 mx-auto" style="max-width: 30rem;">
			<div class="card-header" style="font-size: 25px; font-style: italic;">
				<header>Registration Form(For User)</header>
			</div>
			<div class="card-body">
				<div class="card-text mb-2">
					Name* : <input type="text" name="name" class="form-control" placeholder="First Name">
					<span class="error"> <?php echo $nameErr; ?></span>
				</div>
				<div class="card-text mb-2">
					Address* : <input type="text" name="address" class="form-control" placeholder="Enter the address" >
					<span class="error"> <?= $addressErr; ?></span>
				</div>
				<div class="card-text mb-2">
					City* : <input type="text" name="city" class="form-control" placeholder="Enter the city">
					<span class="error"> <?= $cityErr; ?></span>
				</div>
				<div class="card-text mb-2">
					Mail* : <input type="email" name="email" class="form-control" placeholder="Please enter your Email id">
					<span class="error"> <?= $mailErr; ?></span>
				</div>
				<div class="card-text mb-2">
					Phone*: <input type="text" name="phone" class="form-control" placeholder="Enter the Phone number">
					<span class="error"> <?= $phoneErr; ?></span>
				</div>
				<div class="card-text mb-2">
					Password* : <input type="password" name="password" class="form-control" placeholder="Enter the password">
					<span class="error"> <?= $passwordErr; ?></span>
				</div>
			</div>
			<div class="card-footer mb-2 btn-lg">
				<input class="button btn btn-primary" type="submit" name="button">
			</div>
		</div>
	</form>

</body>

</html>