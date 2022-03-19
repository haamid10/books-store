
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<!-- <link type="text/css " rel="stylesheet" href="menu.css"> -->

<style>
body{
	background: #23e3;
	width: 600px;
}
.container{
	background: #040d1a;
	padding: 5px;
	border-radius: px;
	display: flex;
	justify-items: center;
	width: 1500px;
}

.xasaan{
	background: #040d1a;
	padding: 5px;
	border-radius: px;
}
.current_page_item{
	margin-left: 40rem;
	background: saddlebrown;
	border-radius: 9px;

}
.last{
	background: saddlebrown;
	border-radius: 9px;
	margin-left: 9px;
}
.order{
	background: saddlebrown;
	border-radius: 9px;
	margin-left: 10px;
}

</style>

</head>
<body>
	
<div class="container">

<div class="header-1">
      <a href="#" class="logo"><i class="fas fa-pen\"></i> Hanfi Book Store</a>
</div>

<ul class="xasaan">
			<li class="current_page_item"><a href="index.php">Home</a></li>
			<!--<li><a href="register.php">Register</a></li>-->
			<?php 
					if(isset($_SESSION['status']))
					{
						
						echo '<li><a href="logout.php">Logout</a></li>';
					}
					else
					{
						echo '<li><a href="register.php">Register</a></li>';
					}
			?>
			
			
			<li class="last"><a href="contact.php">Contact</a></li>
			<li class="last"><a href="aboutus.php">About Us</a></li>
			<li class="order"><a href="viewcart.php">order</a></li>
			
</ul>
</div>


</body>
</html>