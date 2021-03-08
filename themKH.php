<!DOCTYPE html>
<html>
<head>
	<title>Them khach hang</title>
	<style type="text/css">
		td{
			padding-bottom: 10px;
		}
	</style>
</head>
<body>
	<?php 
		$error 	= null;
		$mkh 	= null;
		$tkh 	= null;
		$gt 	= null;
		$dc 	= null;
		$dt 	= null;
		$em 	= null;
		$idd 	= null;
		$con 	= mysqli_connect("localhost", "root", "", "db_milk") or die ("Connect error");
		
		if(isset($_POST["btnsub"])){
			
			$mkh 	= $_POST["txtMa"];
			$tkh 	= $_POST["txtTenKH"];
			$gt 	= $_POST["rdSex"];
			$dc 	= $_POST["txtAddress"];
			$dt 	= $_POST["txtSDT"];
			$em 	= $_POST["txtEmail"];

			if($mkh == null||$tkh == null||$gt == null||$dc == null||$dt == null||$em == null)
				{
					$error = "Nhập thiếu thông tin ! Nhập lại .";
				}
			else{
					if($gt == "Nữ"){
						$gt = '0';
					}
					else{
						$gt = '1';	
					}
					
					// echo $gt;
					$insert = "INSERT into thongtinkhachhang values('".$mkh."','".$tkh."','".$gt."','".$dc."','".$dt."','".$em."');";
					if(mysqli_query($con,$insert)){
						$error = "Thêm thành công !";

					}
					else{
						$error = "Mã khách hàng ".$mkh." đã tồn tại ! Nhập lại .";
					}




			}
			mysqli_close($con);

		}



	 ?>
	<div id="container" style="width: 700px; margin: auto; background: pink">
		<form method="POST">
			<table  style="margin:100px auto; padding:30px; box-sizing: border-box ">
				<tr>
					<th colspan="4" style="padding-bottom: 10px;"><p>THÊM KHÁCH HÀNG</p></th>
				</tr>
				<tr>
					<td>Mã khách hàng</td>
					<td>:</td>
					<td><input type="text" name="txtMa"></td>
					<td>
						<select name="mk" id="mk">
							<?php 

								$select = " SELECT thongtinkhachhang.makh from thongtinkhachhang";

								$result = mysqli_query($con,$select);


								while ($row = mysqli_fetch_array($result)){
							 ?>
							<option value="<?php echo $row['makh']?>" ><?php echo $row["makh"]; ?></option>
							<?php 

								}

							 ?>
						</select>
						<font style="color: red ; font-size: 13px;">(danh sách các mã đã tồn tại)</font>
					</td>
				</tr>
				<tr>
					<td>Tên khách hàng</td>
					<td>:</td>
					<td><input type="text" name="txtTenKH"></td>
				</tr>
				<tr>
					<td>Giới tính</td>
					<td>:</td>
					<td>
						<input type="radio" name="rdSex" value="Nam" checked>Nam
						<input type="radio" name="rdSex" value="Nữ">Nữ
					</td>
				</tr>
				<tr>
					<td>Địa chỉ</td>
					<td>:</td>
					<td><input type="text" name="txtAddress"></td>
				</tr>
				<tr>
					<td>Điện thoại</td>
					<td>:</td>
					<td><input type="text" name="txtSDT"></td>
				</tr>
				<tr>
					<td>Email</td>
					<td>:</td>
					<td><input type="text" name="txtEmail"></td>
				</tr>
				<tr>
					<td></td>
					<td></td>
					<td><input type="submit" name="btnsub" value="Thêm" style="background-color: yellow;"></td>
				</tr>
				<tr>
					<th colspan="3"><?php echo $error; ?></th>
				</tr>
			</table>
			<a href="/giaodien.php">Trang chủ</a>
			<a href="thongtinKH.php">Danh sách khách hàng</a>

		</form>



	</div>
</body>
</html>