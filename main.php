<html ng-app>
<head>
<title>Travel With Me</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="style.css" type="text/css"/>
	<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
	  <!-- Bootstrap -->
    <link href="bootstrap-3.2.0-dist/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
	<link href="bootstrap-3.2.0-dist/css/bootstrap-theme.min.css" rel="stylesheet"type="text/css" />
	<!-- javascript -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<script src="bootstrap-3.2.0-dist/js/bootstrap.min.js"></script>

	</head>
<body>
<header class="navbar navbar-default navbar-fixed-top navbar-inverse" ng-app>



			<div class="container">

				<a href ="#" class="navbar-brand">Travel Mate</a>

				<button class = "navbar-toggle" data-toggle = "collapse" data-target = ".navHeaderCollapse" ng-click="isCollapsed = !isCollapsed">
					<span class = "icon-bar"></span>
					<span class = "icon-bar"></span>
					<span class = "icon-bar"></span>
				</button>

				<div class = "collapse navbar-collapse navHeaderCollapse">
					<ul class = "nav navbar-nav navbar-right">
							<li><a href = "#">Home</a></li>
							<li><a href ="#">Friends</a></li>
							<li class="dropdown">
									<a href="#"class ="dropdown-toggle" data-toggle = "dropdown">Messages <b class = "caret"></b></a>
									<ul class = "dropdown-menu">
										<li><a href="#">New Message</a></li>
										<li><a href="#">Messages</a></li>
									</ul>
							</li>
							<li><a href="#">About</a></li>
							<li><a href="#">Contact</a></li>
					</ul>
				</div>
			</div>




</header>
	<div id="content" class="content">

	</div>
	<div id="footer" class="footer">

	</div>
</body>
</html>
