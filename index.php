<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>CloudSpread</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link href="http://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
	<style type="text/css">
		body {
			background-color: #6698ff;
			font-family: 'Lato', sans-serif;
		}
		#title {
			color: #ffffff;
			text-align: center;
			padding-top: 50px;
		}
		#title a {
			color: #ffffff;
		}
		.form-signin {
			max-width: 330px;
			padding: 15px;
			margin: 0 auto;
		}
		.btn {
			margin-top: 15px;
		}
		.sign-up {
			text-align: center;
		}
		.sign-up a {
			color: #dddddd;
		}
		#footer {
			position: absolute;
			bottom: 0;
			width: 100%;
			height: 60px;
			text-align: center;
			padding-right: 20px;
		}
		#footer-list li {
			display: inline;
			list-style-type: none;
			padding-right: 20px;
		}
		#footer-list li a {
			color: #dddddd;
		}
	</style>
</head>
<body>
	<h1 id="title"><a href="/pennappss14/">CloudSpread</a></h1>

	<div class="sign-up container">
		<form class="form-signin" role="form">
			<input type="username" class="user form-control" placeholder="Username" autofocus>
			<input type="password" class="pass form-control" placeholder="Password">
			<input type="button" class="btn btn-lg btn-primary btn-block" onclick="verify()" value="Submit" />
		</form>
		<a href="#">Sign up</a>
	</div>
	<div id="footer">
		<div class="container">
			<ul id="footer-list">
				<li><a href="#">About Us</a></li>
				<li><a href="#">Privacy</a></li>
				<li><a href="#">Legal</a></li>
				<li><a href="#">Careers</a></li>
				<li><a href="#">Site Map</a></li>
				<li><a href="#">Help</a></li>
			</ul>
		</div>
	</div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
	<script src="bootstrap.min.js"></script>
	<script type="text/javascript">
		function verify() {
			if ($(".user").val() == "waj" && $(".pass").val() == "pass")
				window.location = "profile.html";
			else
				alert("Incorrect credentials.");
		}
	</script>
</body>
</html>