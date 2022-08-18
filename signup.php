<?php
include "config.php"
?>
<!DOCTYPE html>
<html>
<head>
	<title>Maintenace app</title>
	<link rel="stylesheet" type="text/css" href="new.css">
	<link rel="icon" type="image/x-icon" href="images/messi.png">
	 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/all.min.css">
</head>
<body>
	<div class="wrapper">
		<section class="form signup">
		<header>Tracker app</header>
		<form action="register.php" method="POST">
        <?php
		if(!empty($_GET['error']))
		{
		echo '<script> alert("'.$_GET['error'].'"); </script>';
		}
		?>
			<div class="name-details">
				<div class="field input">
					<label>First Name</label>
					<input type="text" name="fname" placeholder="enter firstname" value="<?php if(!empty($_GET['fname'])) { echo $_GET['fname']; } ?>" required>
					
				</div>
				<div class="field input">
					<label>Last Name</label>
					<input type="text" name="lname" placeholder="enter lastrname" value="<?php if(!empty($_GET['lname'])) { echo $_GET['lname']; } ?>" required>
					
					</div>
		</div>
				<div class="field input">
					<label>Email Adrress</label>
					<input type="email" name="email" placeholder="enter Email Adrress" value="<?php if(!empty($_GET['email'])) { echo $_GET['email']; } ?>" required>
					
				</div>
				<div class="field input">
					<label>Password</label>
					<input type="password" name="password" placeholder="enter Password" value="<?php if(!empty($_GET['password'])) { echo $_GET['password']; } ?>" required>
					
				</div>
                <div class="field input">
					<label>Password</label>
					<input type="password" name="password_confirm" placeholder="enter Password" value="<?php if(!empty($_GET['password_confirm'])) { echo $_GET['password_confirm']; } ?>" required>
					
				</div>
				<div class="field button">
					<input type="submit" name="register">
					
				</div>
		</form>
		<div class="link">Already signed up? <a href ="#">login Now</a></div>
		</section>
	</div>
</body>
</html>