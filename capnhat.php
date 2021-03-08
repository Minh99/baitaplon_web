
<?php session_start() ?>
<!DOCTYPE html>
<html>
<head>
	<title>Cập nhật</title>
	<link rel="stylesheet" type="text/css" href="styletrangchu.css">

</head>
<body>
	<?php
		
		if(!isset($_SESSION["user"]))
		{
			echo "Bạn phải đăng nhập <a href = 'login.php' >Dang nhap</a> moi có quền sửa sản phẩm";
		}
		else
		{
			
		
			?>
			<div class="container">
				<div class="header">
					<div id="header-item">
					 	<img id="logo1" src="img/logo.png">
					 	<h3 class="text-header">HMT-MILK <br>
					 		<font style="font-size: 30px">Vươn Tầm Thế Giới</font>
					 	</h3>
					 	<img id="logo2" src="img/logo2.gif">
					</div>
				
				</div>

				<div class="navbar" id="navbar_main">
				  		<div style="width: 22%;margin: auto">
					  		<div class="dropdown">
							    <button class="dropbtn">Hãng Sữa 
							      <i class="fa fa-caret-down"></i>
							    </button>
							    <div class="dropdown-content">
								      <a href="themHS.php">Thêm</a>
								      <a href="suaHS.php">Sửa</a>
								      <a href="thongtinHS.php">Danh sách</a>
							    </div>
							 </div> 
							 <div class="dropdown">
							    <button class="dropbtn">Sản Phẩm 
							      <i class="fa fa-caret-down"></i>
							    </button>
							    <div class="dropdown-content">
							      <a href="themsp.php">Thêm</a>
							      <a href="suasp.php">Sửa</a>
							      <a href="thongtinsp.php">Danh sách</a>
							    </div>
							 </div> 
							 <div class="dropdown">
							    <button class="dropbtn">Khách Hàng 
							      <i class="fa fa-caret-down"></i>
							    </button>
							    <div class="dropdown-content">
							      <a href="themKH.php">Thêm</a>
							      <a href="suaKH">Sửa</a>
							      <a href="thongtinKH">Danh sách</a>
							    </div>
							 </div> 
					
					    </div>

				</div>
				<div id="container-thongtinhangsua" style="width: 1000px; margin:30px auto;">
					<form method="GET">
						<table border="1" style="background-color: orange;bor">
					        <tr>
					           <th colspan="8"><h3>THÔNG TIN HÃNG SỮA</h3></th>
					        </tr>
							<tr>
								<th>Mã HS</th>
								<th>Tên Hãng Sữa</th>
								<th>Địa chỉ</th>
								<th>Điện Thoại</th>
								<th>Email</th>
								<th colspan="2" style="text-align: center;">Event</th>

							</tr>
							<?php 
								$con = mysqli_connect("localhost" , "root" , "" , "db_milk");
								$select = " SELECT * from thongtinhangsua";

								$result = mysqli_query($con,$select);

								while ($row = mysqli_fetch_assoc($result)){
						 	?>
							<tr>
								<td><?php echo $row["mahs"]; $id = $row["mahs"]; ?></td>
								<td><?php echo $row["tenhs"] ?></td>
								<td><?php echo $row["diachi"] ?></td>
								<td><?php echo $row["dienthoai"] ?></td>
								<td><?php echo $row["email"] ?></td>
								<td><a href='deleteHS.php?IDD=<?php echo $id; ?>' >Xoa</a></td>
								
							</tr>

							<?php 
								}
								mysqli_close($con);
							 ?>
						

						</table>
						
					</form>
				</div>


		</div>
	<?php
	}
	?>

</body>
</html>