
 

<!DOCTYPE html>
<html lang="">
	<head>
		<meta charset="utf-8">

    <!-- Always force latest IE rendering engine or request Chrome Frame -->
    <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Admin: LogIn</title>

    <meta name="description" content="Aquatic Tourism is a boating service, located in Rubavu, Gisenyi, Rwanda. We offer boat tour to visit hot springs, numerous islands" />
    <meta name="keywords" content="Aquatic Tourism, boat, boating, reservation, gisenyi, kivu, rubavu, boats" />

		<!-- Bootstrap CSS -->
		<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
		<link rel="stylesheet" type="text/css" href="bootstrap/css/jquery.dataTables.css">
		<link href="img/favicon.png" rel="icon" type="image/png" />
	</head>

	<style type="text/css">
		.navbar { margin-bottom:0px !important; }
		.carousel-caption { margin-top:0px !important }
	</style>



	<body>
		
<br />
<br />
<br />
<br />
<br />
<br />
		<div class="row">
			<div class="col-md-4"></div>
			<div class="col-md-4">
				<div class="panel panel-info">
					<div class="panel-heading">
						<h3 class="panel-title">Login | here</h3>
					</div>
					<div class="panel-body">
						 <form action="" method="post">
							 	<div class="form-group">
							 		<?php 
session_start();
	include_once('db.php');//database

	if(isset($_POST['login']))
	{
		$uname = $_POST['uname'];
    	$pass = $_POST['password'];

		$sql = "SELECT * FROM admin WHERE username='$uname' AND password='$pass'";

        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) === 1) {

            $row = mysqli_fetch_assoc($result);

            if ($row['username'] === $uname && $row['password'] === $pass) {

                header("Location: admin1.php");

                exit();

            }}
            else{

                echo '
					<div class="alert alert-danger">
					  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
					  <strong>Warning!</strong> Invalid user credentials, please try again!
					</div>
				';

                exit();

            }

	}//end if isset log in
 ?>
							    <label for="inputdefault">Username:</label>
							    <input class="form-control" name="uname" type="text" placeholder="Enter Your Username..." required autofocus>
							  </div>

							   <div class="form-group">
							    <label for="inputdefault">Password:</label>
							    <input class="form-control" name="password" type="pass" placeholder="Enter Your Password..." required>
							  </div>
							

&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
							  <button class="btn btn-warning" type="submit" name="login">
							  	Login
							  	<span class="glyphicon glyphicon-log-in" aria-hidden="true"></span>
							  </button>
							  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
							  <a href="about.php" class="btn btn-info">
					Back
					<span class="glyphicon glyphicon-arrow-left" aria-hidden="true"></span>
				</a>
						 </form>
					</div>
				</div>
			</div>
			<div class="col-md-4"></div>
		</div>


 		<script src="bootstrap/js/jquery-1.11.1.min.js"></script>
 		<script src="bootstrap/js/dataTables.js"></script>
 		<script src="bootstrap/js/dataTables2.js"></script>
 		<script src="bootstrap/js/bootstrap.js"></script>
	</body>
</html>