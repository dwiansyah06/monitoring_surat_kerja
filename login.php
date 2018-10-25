<!DOCTYPE html>
<html lang="en">
<head>
	<title>BPS || Sign in</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" type="image/png" href="assets/img/bps.png"/>
	<link href="assets/css/bootstrap.min.css" rel="stylesheet" />
	<link rel="stylesheet" type="text/css" href="assets/css/util.css">
	<link rel="stylesheet" type="text/css" href="assets/css/main.css">
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-form-title">
					<center>
						<div class="row">
							<div class="col-md-6">
								<img src="assets/img/bps.png" style="width: 50%;float: right;">
							</div>
							<div class="col-md-6">
								<h3 class="text-left m-t-35">Sign In</h3>
							</div>
						</div>
					</center>
				</div>

				<form class="login100-form validate-form" action="proseslogin.php" method="post">
					<div class="wrap-input100 validate-input m-b-26" data-validate="Username is required">
						<span class="label-input100">NIP</span>
						<input class="input100" type="text" name="nip" placeholder="Masukan NIP" autocomplete="off" required>
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input m-b-18" data-validate = "Password is required">
						<span class="label-input100">Jabatan</span>
						<input class="input100" type="password" name="jabatan" placeholder="Masukan Jabatan" required>
						<span class="focus-input100"></span>
					</div>

					<div class="container-login100-form-btn">
						<input type="submit" class="login100-form-btn" name="login" value="Sign In">
					</div>
				</form>
			</div>
		</div>
	</div>
	

	<script src="vendor/jquery/jquery-1.10.2.js"></script>
	<script src="assets/js/bootstrap.min.js" type="text/javascript"></script>
</body>
</html>