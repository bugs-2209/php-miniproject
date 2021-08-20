<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login V16</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="../../Public/site/images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../../Public/site/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../../Public/site/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../../Public/site/fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../../Public/site/vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="../../Public/site/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../../Public/site/vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../../Public/site/vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="../../Public/site/vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../../Public/site/css/util.css">
	<link rel="stylesheet" type="text/css" href="../../Public/site/css/main.css">
<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100" style="background-image: url('../../Public/site/images/bg-01.jpg');">
			<div class="wrap-login100 p-t-30 p-b-50">
				<span class="login100-form-title p-b-41">
					Account Login
				</span>
				
				<form class="login100-form validate-form p-b-33 p-t-5" method="POST" action="index.php?action=login">

					<div class="wrap-input100 validate-input" data-validate = "Enter username">
						<input class="input100" type="text" name="username" placeholder="User name" value="<?php if (isset($_COOKIE["username"])) {print_r($_COOKIE["username"]);} ?>" >
						<span class="focus-input100" data-placeholder="&#xe82a;"></span>
					</div>
					
					<div class="wrap-input100 validate-input" data-validate="Enter password">
						<input class="input100" type="password" name="password" placeholder="Password" value="<?php if (isset($_COOKIE["password"])) {print_r($_COOKIE["password"]);} ?>">
						<span class="focus-input100" data-placeholder="&#xe80f;"></span>
					</div>
                    <p><input type="checkbox" name="remember"  <?php if (isset($_COOKIE["username"]) && $_COOKIE["password"]) {
							print_r("checked");
						} ?>/> Remember me
					<div class="container-login100-form-btn m-t-32">
						<button class="login100-form-btn" name="login" value="Login" type="submit">
							Login
						</button>
					</div>

				</form>
			</div>
		</div>
	</div>
	

	<div id="dropDownSelect1"></div>
	
<!--===============================================================================================-->
	<script src="../../Public/site/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="../../Public/site/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="../../Public/site/vendor/bootstrap/js/popper.js"></script>
	<script src="../../Public/site/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="../../Public/site/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="../../Public/site/vendor/daterangepicker/moment.min.js"></script>
	<script src="../../Public/site/vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="../../Public/site/vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="../../Public/site/js/main.js"></script>

</body>
</html>