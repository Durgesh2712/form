<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<link rel="stylesheet" type="text/css" href="style2.css">
<script type="text/javascript" href="app.js"></script>

	<title>Login Form</title>
</head>
<body>

	<form class="form-group" method="post">
		<h2>Login Form</h2>
		<center><label>Name</label></center>
		<input type="text" class="form-control" placeholder="Full Name" name="fullname" id="fullname" autocomplete="off" required>
		<center><label>Email</label></center>
		<input type="email" class="form-control" placeholder="Email" name="email" id="email" autocomplete="off" required>
		<center><label>Mobile</label></center>
		<input type="number" class="form-control" placeholder="Number" name="phone" id="phone" autocomplete="off" required>
		<center><label>Password</label></center>
		<input type="Password" class="form-control" placeholder="Password" name="pasword" id="pasword" autocomplete="off" required>
		<button type="button" class="btn btn-primary">Signin</button>
		<div class="signup" id="signup">
			Already have a account
			Click here for <span><a href="index.php"> Login </a></span>
		</div>
	</form>

</body>
</html>