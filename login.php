<?php
session_start();
include 'partials/_dbconnect.php';

if(isset($_POST['email']) && isset($_POST['password']))
{
    function validate($data)
    {
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
    }

    $email = validate($_POST['email']);
    $password = validate($_POST['password']);

    $sql = "SELECT * FROM user WHERE mail='$email' AND password='$password'";

    $result = mysqli_query($conn, $sql);

    if(mysqli_num_rows($result) > 0)
    {
        $row = mysqli_fetch_assoc($result);

        if($row['mail'] === $email && $row['password'] === $password)
        {
            $_SESSION['mail'] = $row['mail'];
            $_SESSION['password'] = $row['password'];
            $_SESSION['id'] = $row['id'];
            header('location: index.php');
        }
        else
        {
            echo "<script> alert('incorrect password or mail');</script>";
        }
    }
    else
    {
        if($_REQUEST['email'] == 'admin' && $_REQUEST['password'] == 'admin')
        {
            header('location: admin/index.php');
        }
        else{
            echo "<script> alert('incorrect password or mail');</script>";
        }
    }
}






?>
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
    <form action="" method="POST">
		<div class="card pt-2 mx-auto" style="max-width: 30rem;">
			<div class="card-header" style="font-size: 25px; font-style: italic;">
				<header>Login</header>
			</div>
			<div class="card-body">
				<div class="card-text mb-2">
					Email : <input type="text" name="email" class="form-control" placeholder="Enter Email">
					<span class="error"></span>
				</div>
				<div class="card-text mb-2">
					Password : <input type="password" name="password" class="form-control" placeholder="Enter Password" >
					<span class="error"></span>
				</div>
            </div>
            <div class="card-footer mb-2 btn-lg">
				<input class="button btn btn-primary" type="submit" name="button">
			    </div>
        </div> 
    </form> 
    </body>
</html>