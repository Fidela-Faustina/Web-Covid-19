<?php
	session_start();

	if (!isset($_SESSION['username'])) {
		$_SESSION['msg'] = "You must log in first";
		header('location: login.php');
	}

	if (isset($_GET['logout'])) {
		session_destroy();
		unset($_SESSION['username']);
		header("location: login.php");
	}

?>
<!DOCTYPE html>
<html>
<head>
	<title>Welcome</title>
	<link rel="stylesheet" type="text/css" href="style_login.css">
	  <link rel="icon" href="fav.png" />
</head>
<body>
	<div class="header">
		<h2>Welcome!!</h2>
	</div>
	<div class="content">

		<!-- notification message -->
		<?php if (isset($_SESSION['success'])) : ?>
			<div class="error success" >
				<h3>
					<?php
						echo $_SESSION['success'];
						unset($_SESSION['success']);
					?>
				</h3>
			</div>
		<?php endif ?>

		<!-- logged in user information -->
		<?php  if (isset($_SESSION['username'])) : ?>
			<p>Selamat Datang <strong><?php echo $_SESSION['username']; ?></strong></p>
			<p>Tekan tombol dibawah untuk mengetaui corona lebih lanjut</p>
			<br>
			<div class="input-group">
				<a class="btn btn-primary" href="covid.html" role="button">Apa Itu Corona?</a>
			</div>
			<!-- <p> <a href="covid.html" style="color: blue;">Pelajari Corona</a> </p> -->
		<?php endif ?>
	</div>

</body>
</html>
