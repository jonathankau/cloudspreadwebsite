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
		html {
			height: 100%;
		}
		body {
			background-color: #6698ff;
			font-family: 'Lato', sans-serif;
			text-align: center;
			background: -webkit-linear-gradient(#6698ff, white);
			background-position: center center;
			background-repeat: no-repeat;
			height: 100%;
		}
		#logo {
			margin-top: 200px;
			max-width: 330px;
		}
		#title {
			color: #ffffff;
			padding-top: 20px;
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
		.sign-up a {
			color: #dddddd;
		}
		#footer {
			position: absolute;
			bottom: 0;
			width: 100%;
			height: 60px;
			padding-right: 20px;
		}
		#footer-list li {
			display: inline;
			list-style-type: none;
			padding-right: 20px;
		}
		#footer-list li a {
			color: #aaaaaa;
		}
	</style>
</head>
<body>
	<img id="logo" src="images/cloud.png" alt="cloud logo">
	<h1 id="title"><a href="index.php">CloudSpread</a></h1>

	<div class="sign-up container">
		<form class="form-signin" role="form">
			<input type="username" class="user form-control" placeholder="Username" autofocus>
			<input type="password" class="pass form-control" placeholder="Password">
			<div id="alert-placeholder"></div>
			<input type="button" class="btn btn-lg btn-primary btn-block" onclick="verify()" value="Login" />
		</form>
	</div>
	<div id="footer">
		<div class="container">
			<ul id="footer-list">
				<li><a href="#">Sign up</a></li>
				<li><a href="#">About Us</a></li>
				<li><a href="#">Privacy</a></li>
				<li><a href="#">Legal</a></li>
				<li><a href="https://www.facebook.com/careers">Careers</a></li>
				<li><a href="#">Help</a></li>
			</ul>
		</div>
	</div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
	<script src="bootstrap.min.js"></script>
	<script type="text/javascript">
		function verify() {
			if ($(".user").val() == "waj" && $(".pass").val() == "pass")
				window.location = "profile.html?user=";
			else
				myAlert('alert-danger', 'Incorrect credentials.');
		}
		$('.user').keypress(function(e) {
		    if (e.which == '13') {
		        verify();
		    }
		});
		$('.pass').keypress(function(e) {
		    if (e.which == '13') {
		        verify();
		    }
		});
		function myAlert(alertType, message) {
			$("#alert-placeholder").html('<div class="alert fade in out ' + alertType + '"><a class="close" data-dismiss="alert">x</a><span>' + message + '</span></div>');
			window.setTimeout(function() { $(".alert").alert('close'); }, 4000);
		}
	</script>
</body>
</html>