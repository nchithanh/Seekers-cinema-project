<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>TEST</title>
	<link rel="stylesheet" href="view/css/admin.css">
	<script src="https://kit.fontawesome.com/792cf9d6f3.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

	<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
	<link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
</head>
<body>
	<header class="col_12">
		<div class="avt_admin col_4">
			<h3><?php echo $_SESSION['user']; ?></h3>
			<div class="avt_img" style="background-image: url('view/images/avt1.jpg');"></div>
			<div class="vl"></div>
			<div class="logout">
				<a href="admin.php?contro=logout">
					<i class="fas fa-sign-out-alt"></i>
				</a>
			</div>
			<div class="back_index">
			<a href="../index.php">
				<i class="fas fa-home"></i>
			</a>
		</div>
		</div>
		<form action="#" method="post" class="form_search_all" id="form_search_all">
			<input type="text" placeholder="Search..." id="search_all" onclick="enter_to_submit('search_all','myBtn')" required>
			<button type="submit" id="myBtn" onclick="javascript:alert('Bạn vừa submit form')">
				<i class="fas fa-search"></i>
			</button>
		</form>
	</header>