<?php session_start() ?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php 
		$error 	= null;
		$idd 	= null;
		$ten 	= null;
		$gt 	= null;
		$diachi = null;
		$sdt 	= null;
		$email 	= null;
		$con 	= mysqli_connect("localhost", "root", "", "db_milk") or die ("Connect error");

		// nút show toàn bộ thông tin của makhach
		if(isset($_POST['btnshow'])){
			$sec = "SELECT * from thongtinkhachhang where makh = '".$_POST["mk"]"'";
			$rs = mysqli_query($con,$sec);
			$ro = mysqli_fetch_array($rs);
				$idd 	= $ro['makh'];
				$ten 	= $ro['tenkh'];
				$gt 	= $ro['gioitinh'];
				$diachi = $ro['diachi'];
				$sdt 	= $ro['sdt'];
				$email 	= $ro['email'];
			}
		// nút sửa
		if(isset($_POST["btnsub"])){
				$tkh 		= $_POST['txtTenKH'];
				$gtkh 		= $_POST['rdSex'];
				$dckh 		= $_POST['txtAddress'];
				$sdt 		= $_POST['txtSDT'];
				$em 		= $_POST['txtEmail'];

				if($gtkh == "Nam"){
					$gtkh = 1;
				}
				else{
					$gtkh = 0;
				}
				

			$sqlUpdate = "UPDATE thongtinkhachhang SET tenkh='".$tkh."',gioitinh='".$gtkh."',diachi='".$dckh."',sdt='".$sdt."',email='".$em."' WHERE makh='".$_POST["mk"]."'";

			if (mysqli_query($con, $sqlUpdate)) {
			  $error =  "Sửa Thành Công !";
			} else {
			  $error =  "Lỗi : " . mysqli_error($con);
			}
		}	
			
	 ?>

	<div id="container" style="width: 600px; margin: auto; background: pink">
		<form method="POST">
			<table  style="margin:100px auto; padding:30px; box-sizing: border-box ">
				<tr>
					<th colspan="3" style="padding-bottom: 10px;">Sửa Khách Hàng</th>
				</tr>
				<tr>
					<td>Mã khách hàng</td>
					<td>:</td>
					<td>
						<select name="mk" id="mk">
							<?php 
								

								$select = " SELECT thongtinkhachhang.makh from thongtinkhachhang";

								$result = mysqli_query($con,$select);


								while ($row = mysqli_fetch_array($result)){
							 ?>
							<option value="<?php echo $row["makh"];?>" <?php if($row["makh"] == $idd)  echo "selected";?>><?php echo $row["makh"]; ?></option>
							<?php 

								}

							 ?>
						</select>
						<input type="submit" name="btnshow" id="btnshow" value="hiển thị">
					</td>
					
				</tr>
				<tr>
					<td>Tên khách hàng</td>
					<td>:</td>
					<td><input type="text" name="txtTenKH" value="<?php echo $ten ?>"></td>
				</tr>
				<tr>
					<td>Giới tính</td>
					<td>:</td>
					<td>
						<input type="radio" name="rdSex" value="Nam" <?php if ($gt == 1) echo "checked"; ?>>Nam
						<input type="radio" name="rdSex" value="Nữ"  <?php if ($gt == 0) echo "checked"; ?>>Nữ
					</td>
				</tr>
				<tr>
					<td>Địa chỉ</td>
					<td>:</td>
					<td><input type="text" name="txtAddress" value="<?php echo $diachi ?>"></td>
				</tr>
				<tr>
					<td>Điện thoại</td>
					<td>:</td>
					<td><input type="text" name="txtSDT" value="<?php echo $sdt ?>"></td>
				</tr>
				<tr>
					<td>Email</td>
					<td>:</td>
					<td><input type="text" name="txtEmail" value="<?php echo $email ?>"></td>
				</tr>
				<tr>
					<td></td>
					<td></td>
					<td><input type="submit" name="btnsub" value="Sửa" style="background-color: yellow;"></td>
				</tr>
				<tr>
					<th colspan="3"><?php echo $error; ?></th>
				</tr>
			</table>
			<a href="/giaodien.php">Trang chủ</a>
			<a href="thongtinKH.php">Danh sách khách hàng</a>

</body>
</html>