<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>


<style>
	

</style>
</head>
<body>


<?php session_start();?>

		<?php
			include("includes/head.inc.php");
		?>

			<!-- start header -->
				<div id="header">
					<div id="menu">
						<?php
							include("includes/menu.inc.php");
						?>
					</div>
				</div>
				<div  style="background-image: url(leader-1.jpg);">
				<h1 > 
				 </h1>
				 </div>
				
						
			<!-- end header -->

			<!-- start page -->

				<div id="page">
					<!-- start content -->
					<div id="content">
						<div class="post">
							<h1 class="title">Welcome to
							<?php
								if(isset($_SESSION['status']))
								{
									echo $_SESSION['unm'];
								}
								else
								{
									echo 'Book Store';
								}
							?>
							</h1>
							<div class="entry">
								<br>

								<br>

								<object width="950" height="400">
								<!--<param name="movie" value="somefilename.swf">-->
								<embed src="HotHotSoftware3DMenu.swf" width="550" height="400">
								</embed>
								</object>
								<br><br>

							</div>

						</div>

					</div>
					<!-- end content -->

					<!-- start sidebar -->
					<div class="sidebar" id="sidebar">
							<?php
								include("includes/search.inc.php");
							?>
					</div>
					<!-- end sidebar -->
					<div style="clear: both;">&nbsp;</div>
				</div>
			<!-- end page -->

			<!-- start footer -->
				<div id="footer">
							<?php
								include("includes/footer.inc.php");
							?>
				</div>
			<!-- end footer -->
</body>
</html>
