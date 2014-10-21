<?php
if (isset($_POST['name'])&& isset ($_POST['password'])) {
  $name = $_POST ['name'];
  $password = $_POST['password'];



  if (!empty($name)&&!empty($password)) {

    $query = "SELECT 'id' FROM 'user' WHERE 'name' = '$name' AND 'password'='$password'";
    if ($query_run = mysql_query($query)) {
      $query_num_rows= mysql_num_rows($query_run);
      if ($query_num_rows==0) {
        echo 'Invalid name/password combination.';
      }elseif($query_num_rows==1){
        echo 'OK!!!';
        echo $name;
      }
    }

  }else {
    echo 'You must supply name and password';
  }
  }

?>
<html>
  <head>
    <title></title>
  </head>
  <body>
    <form class="form-signin" action="<?php echo $current_file; ?>"  accept-charset="UTF-8" method="post">

            <h2 class="from-signin-heading">Please Login</h2>
            <input type="text" class="form-control" placeholder="Name" id="name" required autofocus />
            <input type="password" class="form-control" placeholder="Password" id="passwd" required />
            <a class="forgot" href="#">Forgot your password?</a>
            <button class="btn btn-lg btn-primary btn-block" type="submit" >Sign in</button>

    </form>
  </body>
</html>
