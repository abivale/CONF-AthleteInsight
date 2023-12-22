<?php


$conn = mysqli_connect('localhost', 'root', '', 'athlete_insight');
if (!$conn) {
	die("Koneksi gagal: " . mysqli_connect_error());
}

if (isset($_POST['register'])) {
	$nama_user = $_POST['nama_user'];
	$username = $_POST['username'];
	$password = md5($_POST['password']);
	$role = $_POST['role'];

	// Validasi data
	if (empty($username) || empty($password)) {
		echo "Isi semua bidang!";
	}

	// Query untuk menyimpan pengguna baru ke database
	$sql = "INSERT INTO user (nama_user, username, password, role) VALUES ('$nama_user', '$username', '$password', '$role')";

	if (mysqli_query($conn, $sql)) {
		echo "
		<script>
		alert('Registrasi Berhasil');
		document.location.href = 'login.php';
		</script>
		";
	} else {
		echo "Error: " . $sql . "<br>" . mysqli_error($conn);
	}
}

mysqli_close($conn);

?>
<!DOCTYPE html>
<html lang="en">

<head>
	<title>Pendaftaran V15</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="assets/login/images/icons/favicon.ico" />
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="assets/login/vendor/bootstrap/css/bootstrap.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="assets/login/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="assets/login/fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="assets/login/vendor/animate/animate.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="assets/login/vendor/css-hamburgers/hamburgers.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="assets/login/vendor/animsition/css/animsition.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="assets/login/vendor/select2/select2.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="assets/login/vendor/daterangepicker/daterangepicker.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="assets/login/css/util.css">
	<link rel="stylesheet" type="text/css" href="assets/login/css/main.css">
	<!--===============================================================================================-->
</head>

<body>

	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-form-title" style="background-image: url(assets/login/images/lapangan.jpg);">
					<span class="login100-form-title-1">
						Athlete Insight
					</span>
				</div>

				<form class="login100-form validate-form" method="POST" action="">
					<div class="wrap-input100 validate-input m-b-26" data-validate="Username is required">
						<span class="label-input100">Nama User</span>
						<input require class="input100" type="text" name="nama_user" placeholder="Enter username">
						<span class="focus-input100"></span>
					</div>
					<form class="login100-form validate-form" method="POST" action="">
						<div class="wrap-input100 validate-input m-b-26" data-validate="Username is required">
							<span class="label-input100">Username</span>
							<input require class="input100" type="text" name="username" placeholder="Enter username">
							<span class="focus-input100"></span>
						</div>

						<div class="wrap-input100 validate-input m-b-18" data-validate="Password is required">
							<span class="label-input100">Password</span>
							<input require class="input100" type="password" name="password" placeholder="Enter password">
							<span class="focus-input100"></span>
						</div>
						<div class="form-group">
							<label>Role</label>
							<select name="role" class="form-control">
								<option value="owner">User</option>
							</select>
						</div>
						<?php if (isset($_GET['msg'])) : ?>
							<small class="text-danger"><?= $_GET['msg'];  ?></small>
						<?php endif ?>
						<div class="container-login100-form-btn">
							<button name="register" class="login100-form-btn" type="submit">
								Daftar
							</button>
						</div>
						<div class="container-login100-form-btn mt-3">
							<small>Sudah memiliki akun? <span><a href="login.php">Login</a></span></small>
						</div>
					</form>
			</div>
		</div>
	</div>

	<!--===============================================================================================-->
	<!-- <script src="assets/login/vendor/jquery/jquery-3.2.1.min.js"></script>  -->
	<!--===============================================================================================-->
	<!-- <script src="assets/login/vendor/animsition/js/animsition.min.js"></script>  -->
	<!--===============================================================================================-->
	<!-- <script src="assets/login/vendor/bootstrap/js/popper.js"></script>  -->
	<!-- <script src="assets/login/vendor/bootstrap/js/bootstrap.min.js"></script>  -->
	<!--===============================================================================================-->
	<!-- <script src="assets/login/vendor/select2/select2.min.js"></script>  -->
	<!--===============================================================================================-->
	<!-- <script src="assets/login/vendor/daterangepicker/moment.min.js"></script>  -->
	<!-- <script src="assets/login/vendor/daterangepicker/daterangepicker.js"></script>  -->
	<!--===============================================================================================-->
	<!-- <script src="assets/login/vendor/countdowntime/countdowntime.js"></script>  -->
	<!--===============================================================================================-->
	<!-- <script src="js/main.js"></script> -->

</body>

</html>