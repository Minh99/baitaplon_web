<!DOCTYPE html>
<html>
<head>
	<title>Thông Tin Hãng Sữa</title>
	<style type="text/css">
		td{
			padding: 5px;
			box-sizing: border-box;
			text-align: center;
		}
		th{
			padding: 10px;
			text-align: center;
		}
	</style>
</head>
<body>

	 <div id="container" style="width: 800px; margin:100px auto;">
		<form method="GET">
			<table border="1" style="background-color: orange;">
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
			
			<a href="themHS.php">thêm mới</a>
			<a href="suaHS.php">sửa thông tin hãng sữa</a>
		</form>
	</div>
</body>
</html>