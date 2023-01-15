<!DOCTYPE html>
<html>
	<head>
		<link rel="icon" href="images/iconmain.png">
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="css/style.css">
		
		<title>Contact Us</title>
	</head>
	<body>
		<header>
			<div class="mainhead">
				<div class="logo">
					<img src="images/headpng.png">
				</div>
				<nav>
					<a href="index.php">Home</a>
					<a href="profile.php">Profile</a>
					<a href="history.php">Transaction History</a>
					<a href="contact.php">Contact Us</a>
				</nav>
				<div>
					<button onclick="location.href = 'transfer.php'">Transfer Money</button>
				</div>
			</div>
			
			<hr>
		</header>
		<h1 class="text-center">Contact Us</h1>
		<div class="contact">
			<form>
				<input type="text" class="inpt" placeholder="Name">
				<input type="email" class="inpt" placeholder="Email address">
				<input type="text" class="inpt" placeholder="Subject">
				<textarea name="message" type="text" class="inpt" placeholder="why is this not working"></textarea>
				<input type="submit" value="Submit" class="inpt" id="submit-inp">
			</form>
		</div>
		<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.1/dist/jquery.slim.min.js"></script>
		<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
	</body>
</html>