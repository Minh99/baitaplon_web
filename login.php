<?php
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Đăng Nhập</title>
	<style>
		body {
			font-family: Arial, Helvetica, sans-serif;
			width: 60%;
			margin: auto;
		}
		h2{
			text-align: center;
		}
		form {border: 3px solid #f1f1f1;}

		input[type=text], input[type=password] {
		  width: 100%;
		  padding: 12px 20px;
		  margin: 8px 0;
		  display: inline-block;
		  border: 1px solid #ccc;
		  box-sizing: border-box;
		}

		button {
		  background-color: #4CAF50;
		  color: white;
		  padding: 14px 20px;
		  margin: 8px 0;
		  border: none;
		  cursor: pointer;
		  width: 100%;
		}

		button:hover {
		  opacity: 0.8;
		}

		.cancelbtn {
		  width: auto;
		  padding: 10px 18px;
		  background-color: #f44336;
		}

		.imgcontainer {
		  text-align: center;
		  margin: 24px 0 12px 0;
		}

		img.avatar {
		  width: 10%;
		  border-radius: 50%;
		}

		.container {
		  padding: 16px;
		}

		span.psw {
		  float: right;
		  padding-top: 16px;
		}

		/* Change styles for span and cancel button on extra small screens */
		@media screen and (max-width: 300px) {
		  span.psw {
		     display: block;
		     float: none;
		  }
		  .cancelbtn {
		     width: 100%;
		  }
		}
	</style>
</head>
<body>
	<?php  
		$error = null;
		if (isset($_POST["btnsub"])) {
			$user = $_POST["txtUser"];
			$pass = $_POST["txtPass"];
			if($user == "admin" && $pass == "admin")
			{
				$_SESSION["user"] == ["admin"];
				header("location:capnhat.php");
				exit();
			}
			else
			{
				$error = "Nhap sai ten hoac mat khau";
			}
		}
	?>

	<h2>ĐĂNG NHẬP</h2>

	<form method="POST">
	  	<div class="imgcontainer">
	   		<img src="img/login.png" alt="Avatar" class="avatar">
	  	</div>

	  	<div class="container">
	    	<label for="uname"><b>Username</b></label>
	    	<input type="text" placeholder="Enter Username" name="txtUser" required>

	    	<label for="psw"><b>Password</b></label>
	    	<input type="password" placeholder="Enter Password" name="txtPass" required>
	        
	    	<button type="submit" id="btnsub" name="btnsub">Login</button>
	    	<label>
	      	<input type="checkbox" checked="checked" name="remember"> Remember me
	    	</label>
	 	</div>

	  	<div class="container" style="background-color:#f1f1f1">
	    	<button type="button" class="cancelbtn">Cancel</button>
	    	<span class="psw"><?php echo $error; ?></span>
	    	<span class="psw">Forgot <a href="#">password?</a></span>
	  	</div>
	</form>

</body>
</html>