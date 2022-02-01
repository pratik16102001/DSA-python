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
$name = $garag_name = $address = $city = $email = $phone = $gender = $password = $license = $image = NULL;
$nameErr = $garage_nameErr = $addressErr = $cityErr = $emailErr = $phoneErr = $genderErr = $passwordErr = $licenseErr = $imageErr = NULL;

	$flag = true;
	if ($_SERVER["REQUEST_METHOD"] == "POST") {

		if (empty($_POST["name"])) {
			$nameErr = "First name is required";
			$flag = false;
		} else {
			$name = test_input($_POST["name"]);
		}

		if (empty($_POST["garage_name"])) {
			$garage_nameErr = "garage name is required";
			$flag = false;
		} else {
			$garage_name = test_input($_POST["garage_name"]);
		}

		if (empty($_POST["address"])) {
			$addressErr = "Address is required";
			$flag = false;
		} else {
			$address = test_input($_POST["address"]);
		}

		if (empty($_POST["city"])) {
			$cityErr = "City is required";
			$flag = false;
		} else {
			$city = test_input($_POST["city"]);
		}

		if (empty($_POST["email"])) {
			$emailErr = "email is required";
			$flag = false;
		} else {
			$email = test_input($_POST["email"]);
		}

		if (empty($_POST["phone"])) {
			$phoneErr = "Phone number is required";
			$flag = false;
		} else {
			$phone = test_input($_POST["phone"]);
		}

		if (empty($_POST["gender"])) {
			$genderErr = "gender is required";
			$flag = false;
		} else {
			$gender = test_input($_POST["gender"]);
		}

		if (empty($_POST["password"])) {
			$passwordErr = "Password is required";
			$flag = false;
		} else {
			$password = test_input($_POST["password"]);
		}

		if (empty($_POST["license"])) {
			$licenseErr = "license is required";
			$flag = false;
		} else {
			$license = test_input($_POST["license"]);
		}

		if (empty($_POST["image"])) {
			$imageErr = "image is required";
			$flag = false;
		} else {
			$image = test_input($_POST["image"]);
		}
		// submit form if validated successfully
		if ($flag) {

			$conn = new mysqli('localhost', "root", "", "machenic");

			if ($conn->connect_error) {
				die("connection failed error: " . $conn->connect_error);
			}
			
			$check_mail = mysqli_query($conn, "SELECT email from garage_owner WHERE email='$email'");
			if(mysqli_num_rows($check_mail)>0)
			{
				echo "<script> alert('Mail already exits');</script>";
			}
			else{
				if($_SERVER["REQUEST_METHOD"] == "POST")
				{
					$result = mysqli_query($conn, "INSERT INTO garage_owner (name,garage_name,address,city,email,phone,gender,password,license,image) VALUES('$name','$garage_name','$address','$city','$email','$phone','$gender','$password','$license','$image')");
				}
				header('location:index.php');
			}
		}
	}

	function test_input($data)
	{
		$data = trim($data);
		$data = stripslashes($data);
		$data = htmlspecialchars($data);
		return $data;
	}

	?>
	<form action=" <?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">
		<div class="card pt-2 mx-auto" style="max-width: 30rem;">
			<div class="card-header" style="font-size: 25px;
			font-style: italic;">
				<header>Registration Form(For garage)</header>
			</div>
			<div class="card-body">
				<div class="card-text mb-2">
					Name* : <input type="text" name="name" class="form-control" placeholder="First Name">
					<span class="error"> <?php echo $nameErr; ?></span>
				</div>
				<div class="card-text mb-2">
					Garage_name* : <input type="text" name="garage_name" class="form-control" placeholder="garage_name">
					<span class="error"> <?php echo $garage_nameErr; ?></span>
				</div>
				<div class="card-text mb-2">
					Address* : <input type="text" name="address" class="form-control" placeholder="Enter Address">
					<span class="error"> <?php echo $addressErr; ?></span>
				</div>
				<div class="card-text mb-2">
					City* : <input type="text" name="city" class="form-control" placeholder="Enter the City name">
					<span class="error"> <?php echo $cityErr; ?></span>
				</div>
				<div class="card-text mb-2">
					Email* : <input type="email" name="email" class="form-control" placeholder="Enter the email id">
					<span class="error"> <?php echo $emailErr; ?></span>
				</div>
				<div class="card-text mb-2">
					Phone* : <input type="text" name="phone" class="form-control" placeholder="Enter phone number">
					<span class="error"> <?php echo $phoneErr; ?></span>
				</div>
				<div class="card-text mb-2">
					Gender* : <input type="text" name="gender" class="form-control" placeholder="Enter the gender">
					<span class="error"> <?php echo $genderErr; ?></span>
				</div>
				<div class="card-text mb-2">
					Password* : <input type="password" name="password" class="form-control" placeholder="Enter the password">
					<span class="error"> <?php echo $passwordErr; ?></span>
				</div>
				<div class="card-text mb-2">
					License* : <input type="text" name="license" class="form-control" placeholder="Enter license number">
					<span class="error"> <?php echo $licenseErr; ?></span>
				</div>
				<div class="card-text mb-2">
					Owner's photo* : <input type="file" name="image" class="form-control">
					<span class="error"> <?php echo $imageErr; ?></span>
				</div>
			</div>
			<div class="card-footer mb-2 btn-lg">
				<input class="button btn btn-primary" type="submit" name="button">
			</div>
		</div>
	</form>

</body>

</html>