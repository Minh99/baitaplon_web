<!DOCTYPE html>
<html>
<head>
	<title></title>
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
		           <th colspan="8"><h3>Thông Tin Khách Hàng</h3></th>
		        </tr>
				<tr>
					<th>Mã KH</th>
					<th>Tên Khách Hàng</th>
					<th>Giới tính</th>
					<th>Địa chỉ</th>
					<th>Số Đt</th>
					<th>Email</th>
					<th colspan="2" style="text-align: center;">Event</th>

				</tr>
				<?php 
					$con = mysqli_connect("localhost" , "root" , "" , "db_milk");
					$select = " SELECT * from thongtinkhachhang";

					$result = mysqli_query($con,$select);

					while ($row = mysqli_fetch_assoc($result)){
			 	?>
				<tr>
					<td><?php echo $row["makh"]; $id = $row["makh"]; ?></td>
					<td><?php echo $row["tenkh"] ?></td>
					<td><?php if($row["gioitinh"] == 1)
									echo "Nam";
								else
									echo "Nữ";
					 ?></td>
					<td><?php echo $row["diachi"] ?></td>
					<td><?php echo $row["sdt"] ?></td>
					<td><?php echo $row["email"] ?></td>
					<td><a href='deleteKhach.php?IDD=<?php echo $id; ?>' >Xoa</a></td>
					
				</tr>

				<?php 
					}
					mysqli_close($con);
				 ?>
			

			</table>
			
			<a href="themKH.php">thêm mới</a>
			<a href="suaKH.php">sửa thông tin khách hàng</a>
		</form>
	</div>
</body>
</html>