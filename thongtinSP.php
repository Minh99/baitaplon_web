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
		           <th colspan="8"><h3>Thông Tin Sữa</h3></th>
		        </tr>
				<tr>
					<th>Số TT</th>
					<th>Tên Sữa</th>
					<th>Hãng Sữa</th>
					<th>Loại Sữa</th>
					<th>Trọng Lượng</th>
					<th>Đơn Giá</th>
					<th colspan="2" style="text-align: center;">Event</th>

				</tr>
				<?php 
					$con = mysqli_connect("localhost" , "root" , "" , "db_milk");
					$select = " SELECT * from thongtin";

					$result = mysqli_query($con,$select);
					$i=0;
					while ($row = mysqli_fetch_assoc($result)){
						$i+=1;
			 	?>
				<tr>
					<td><?php echo $i?></td>
					<td><?php echo $row["tensua"];?></td>
					<td><?php echo $row["hangsua"];?></td>
					<td><?php echo $row["loaisua"];?></td>
					<td><?php echo $row["trongluong"];?></td>
					<td><?php echo $row["dongia"];?></td>
					<td><a href='deleteSP.php?MaSua=<?php echo $row["masua"]; ?>' >Xoa</a></td>
					
				</tr>

				<?php 
					}
					mysqli_close($con);
				 ?>
			

			</table>
			
			<a href="themsp.php">thêm mới</a><br>
			<a href="suaSP.php">sửa thông tin sản phẩm</a>
		</form>
	</div>
</body>
</html>