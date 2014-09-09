<html>
<head>
	<title>Travel With Me</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="style.css" type="text/css"/>
	  <!-- Bootstrap -->
    <link href="bootstrap-3.2.0-dist/css/bootstrap.min.css" rel="stylesheet">
	<link href="bootstrap-3.2.0-dist/css/bootstrap-theme.min.css" rel="stylesheet">
</head>
<body>
	<div class="mainContainer">
		<div class="loginForm">
			 <form class="form-signin" role="from"  method="POST" data-ajax="false">
				<h2 class="from-signin-heading">Please Login</h2>
				<input type="email" class="form-control" placeholder="Email" id="email" required autofocus />	
				<input type="password" class="form-control" placeholder="Password" id="passwd" required />
				<a class="forgot" href="#">Forgot your password?</a>
				<button class="btn btn-lg btn-primary btn-block" type="submit"onClick="handleLogin()" >Sign in</button>
			</form>	
		</div>
	</div>
</body>
</html>