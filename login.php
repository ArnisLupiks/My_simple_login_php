<html>
<head>
<link rel="stylesheet" href="style.css" type="text/css"/>
    <link href="bootstrap-3.2.0-dist/css/bootstrap.min.css" rel="stylesheet">

</head>
<form name="login-form" id="login-form" method="post" action="<?php echo $PHP_SELF; ?>"> 
  <fieldset> 

<form class="form-signin" role="from"  method="POST" data-ajax="false">
				<h2 class="from-signin-heading">Please Login</h2>
				<input type="email" class="form-control" placeholder="Email" id="email" required autofocus />	
				<input type="password" class="form-control" placeholder="Password" id="passwd" required />
				<a class="forgot" href="#">Forgot your password?</a>
				<button class="btn btn-lg btn-primary btn-block" type="submit"onClick="handleLogin()" >Sign in</button>
			</form>	
  </fieldset> 
</form>
</html>