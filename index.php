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

<link rel="stylesheet" type="text/css" href="style.css">
<!-- <script type="text/javascript" href="app.js"></script> -->

	<title>Login Form</title>
</head>
<body>

	<form class="form-group" method="post">
		<h2>Login Form</h2>
		<center><label>UserName</label></center>
		<input type="text" class="form-control" placeholder="UserName" name="username" id="username" autocomplete="off" required>
		<center><label>Password</label></center>
		<input type="Password" class="form-control" placeholder="Password" name="password" id="password" autocomplete="off" required>
		<button type="button" class="btn btn-primary" onclick="signfun()">Signin</button>
		  <p onclick="signfun()">Signin</p>
	
		<div class="signup" id="signup">
			Click here for <span><a href="signup.php"> Signup </span>
		</div>
	</form>
	   <script type="text/javascript">
        const signfun=()=> {
            console.log("abhay");
           
        }
    </script>
</body>
</html>