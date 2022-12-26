

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="../view/css/style.css">
	<script src="../view/js/form.js"></script>
	<script src="../view/js/registration.js"></script>
	<title>Register Form</title>
</head>

<body>
	<div class="container">
		<form action="../controller/registerAction.php" method="post" enctype="multipart/form-data" name="form" onsubmit="ajax(this); return false;" class="login-email">
			<p class="login-text" style="font-size: 2rem; font-weight: 800;">Register</p>
			<div class="input-group">
				<input type="text" placeholder="Full Name" name="name" id="name" value="">
				<div class="error" id="nameError"></div>
				<span id="nameError"></span> <br><br>
			</div>
			<div class="input-group">
				<input type="text" placeholder="Username" name="uname" id="uname" value="">
				<div class="error" id="unameError"></div>
				<span id="unameErro"></span> <br><br>
			</div>
			<div class="input-group">
				<input type="email" placeholder="Email" name="email" id="email" value="">
				<div class="error" id="emailError"></div>
				<span id="emailError"></span> <br><br>
			</div>
			<div class="input-group">
				<input type="password" placeholder="Password" name="pass" maxlength="8" id="pass" value="">
				<div class="error" id="passError"></div>
				<span id="passError"></span> <br><br>
			</div>
			<div class="input-group">
				<input type="password" placeholder="Confirm Password" name="cpass" maxlength="8" id="cpass" value="">
				<div class="error" id="cpassError"></div>
				<span id="cpassError"></span> <br><br>
			</div>
			<div class="" >
				<label><input type="radio" name="gender" id="male" value="Male"> Male</label>
				<label><input type="radio" name="gender" id="female" value="Female"> Female</label>
				<label><input type="radio" name="gender" id="other" value="Other"> Other</label>
				<div class="error" id="genderError"></div>
				<span id="genderError" class="error" ></span> <br><br>
				<br>
			</div>
			<div class="input-group">
				<input type="submit" class="btn" value="Register" name="submit">
			</div>
			<p class="login-register-text">Have an account? <a href="http://localhost/PROJECT/RESTAURANT_MNG_SYS/index.html">Login Here</a>.</p>
		</form>
	</div>
</body>

</html>