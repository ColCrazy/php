
<div class="container">
    
    <?php  
		#echo $_GET["sbqname"];
		#检查sbqname是否能够获取到
    	#$_GET
		// if (isset($_GET["sbqname"])&&isset($_GET["sbqemail"])) {
		// 	#echo $_GET["sbqname"];
		// 	$name = $_GET["sbqname"];
		// 	$email = $_GET["sbqemail"];
		// 	echo $name." : ".$email;
		// }



		#检查sbqname是否能够获取到
    	#$_POST
		/*if (isset($_POST["sbqname"])&&isset($_POST["sbqemail"])) {
			#echo $_POST["sbqname"];
			$name = $_POST["sbqname"];
			$email = $_POST["sbqemail"];
			echo $name." : ".$email;

			if (!empty($name) && !empty($email)) {
				echo $name." : ".$email;	
			}
			print_r($_POST);
		}*/


		#检查sbqname是否能够获取到
		# $_REQUEST
		if (isset($_REQUEST["sbqname"])&&isset($_REQUEST["sbqemail"])) {
			#echo $_POST["sbqname"];
			$name = $_REQUEST["sbqname"];
			$email = $_REQUEST["sbqemail"];
			echo $name." : ".$email;

			if (!empty($name) && !empty($email)) {
				echo $name." : ".$email;	
			}
			print_r($_REQUEST);
		}


		#查询url地址后面的参数
		// echo $_SERVER['QUERY_STRING'];
	?>
	
		

</div>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>get & post</title>
	<link rel="stylesheet" href="https://bootswatch.com/cosmo/bootstrap.min.css">

</head>
<body>
	<div class="container">
		<form action="get_post.php" method="GET">

			<div class="form-group">
				<label>Name</label>
				<input type="text" name="sbqname" class="form-control">
			</div>
			<br>

			<div class="form-group">
				<label>Email</label>
				<input type="text" name="sbqemail" class="form-control">
			</div>
			<br>



			<input class="btn btn-primary btn-block" type="submit" value="提交">

		</form>

		<ul class="list-group">
			<li class="list-group-item">
				<a href="<?php echo $_SERVER['PHP_SELF']."?name=赵帅"; ?>" class="btn btn-success btn-block">
					赵帅
				</a>
			</li>
			<li class="list-group-item">
				<a href="<?php echo $_SERVER['PHP_SELF']."?name=郜超"; ?>" class="btn btn-info btn-block">
					郜超
				</a>
			</li>
		</ul>


		<h1>
			<?php if(isset($_GET['name'])){echo $_GET['name'];} ?>
		</h1>



	</div>
</body>
</html>