<!DOCTYPE html>
<html>
<head>
	<title>Thêm milk</title>
	<style type="text/css">
		td{
			padding-bottom: 5px;
		}
	</style>
</head>
<body>
	<?php 
		$error = null;
		$ms = null;
		$ts = null;
		$hs = null;
		$ls = null;
		$tl = null;
		$dg = null;
		$tpdd = null;
		$li = null;
		$ha = null;
		$con = mysqli_connect("localhost" ,"root","" , "db_milk") or die("Connect error");
		if(isset($_POST["btnsub"])){
			
			$ms = $_POST["txtId"];
			$ts = $_POST["txtTen"];
			$hs = $_POST["hangsua"];
			$ls = $_POST["loaisua"];
			$tl = $_POST["txtTLuong"];
			$dg = $_POST["txtTien"];
			$tpdd = $_POST["txtdd"];
			$li = $_POST["txtloiich"];
			$ha = $_POST["btnImg"];
			switch ($hs) {
				case 1:
					$hs == "VinaMilk";
					break;
				case 2:
					$hs == "Ducth Lady";
					break;
				case 3:
					$hs == "Ensure";
					break;
				case 4:
					$hs == "Nutifood";
					break;
				case 5:
					$hs == "TH TrueMilk";
					break;
			}
			switch ($ls) {
				case 1:
					$hs == "Sữa bột";
					break;
				case 2:
					$hs == "Sữa đặc";
					break;
				case 3:
					$hs == "Sữa tươi";
					break;
				case 4:
					$hs == "Sữa không đường";
					break;
				case 5:
					$hs == "Sữa có đường";
					break;
				
			}
			if($ms == null||$ts == null||$hs == null||$ls == null||$tl == null||$dg == null||$tpdd == null||$li == null||$ha == null)
			{
				$error = "Nhập thiếu thông tin ! Nhập lại .";
			}
			else{
				$insert = "INSERT into thongtin values('".$ts."','".$hs."','".$ls."','".$tl."','".$dg."','".$tpdd."','".$li."','".$ha."','".$ms."');";
				mysqli_query($con,$insert);
				$error = "Thêm thành công !"	;				
			}
			
		}




	 ?>
	<div id="container" style="background-color: #1ab4dc;width: 700px ;margin:auto">
		<form method="POST">
			<table style="margin-top:50px; padding:30px; box-sizing: border-box ">
				<tr>
					<th style="padding-bottom: 20px;" colspan="3">THÊM MỚI SẢN PHẨM</th></tr>
				<tr>
					<td ><label for="txtId">Mã Sữa </label></td>
					<td >:</td>
					<td><input type="text" name="txtId" id="txtId" >
						<select name="mk" id="mk">
							<?php 

								$select = " SELECT thongtin.masua from thongtin";

								$result = mysqli_query($con,$select);


								while ($row = mysqli_fetch_array($result)){
							 ?>
							<option value="<?php echo $row['masua']?>" ><?php echo $row["masua"]; ?></option>
							<?php 

								}

							 ?>
						</select>
						<font style="color: red ; font-size: 13px;">(danh sách các mã đã tồn tại)</font>
					</td>
					
				</tr>
				<tr>
					<td ><label for="txtTen">Tên Sữa</label> </td>
					<td>:</td>
					<td><input type="text" name="txtTen" id="txtTen" ></td>
				</tr>
				<tr>
					<td><label>Hãng sữa</label></td>
					<td>:</td>
					<td>
						<select name="hangsua" id="hangsua">
							<option value="VinaMilk">VinaMilk</option>
							<option value="Ducth Lady">Ducth Lady</option>
							<option value="Ensure">Ensure</option>
							<option value="Nutifood">Nutifood</option>
							<option value="TH TrueMilk">TH TrueMilk</option>
						</select>
					</td>
				</tr>
				<tr>
					<td><label>Loại sữa</label></td>
					<td>:</td>
					<td>
						<select name="loaisua" id="loaisua">
							<option value="Sữa bột">Sữa bột</option>
							<option value="Sữa đặc">Sữa đặc</option>
							<option value="Sữa tươi">Sữa tươi</option>
							<option value="Sữa không đường">Sữa không đường</option>
							<option value="Sữa có đường">Sữa có đường</option>
						</select>
					</td>
				</tr>
				<tr>
					<td><label for="txtTLuong">Trọng Lượng</label></td>
					<td>:</td>
					<td><input type="text" name="txtTLuong" id="txtTLuong"></td>
				</tr>
				<tr>
					<td><label for="txtTien">Đơn Giá</label></td>
					<td>:</td>
					<td><input type="text" name="txtTien" id="txtTien"></td>
				</tr>
				<tr>
					<td><label for="txtdd">Thành Phần Dinh Dưỡng</label></td>
					<td>:</td>
					<td><input type="text" name="txtdd" id="txtdd"></td>
				</tr>
				<tr>
					<td><label for="txtloiich">Lợi Ích</label></td>
					<td>:</td>
					<td><input type="text" name="txtloiich" id="txtloiich"></td>
				</tr>
				<tr>
					<td>Hình ảnh</td>
					<td>:</td>
					<td>
						<input type="file" name="btnImg" id="btnImg" accept="image/png, .jpeg, .jpg, image/gif" >
					</td>
				</tr>
				<tr>
					<th style="padding-top: 20px" colspan="3"><input type="submit" name="btnsub" id="btnsubs" value="Thêm"></th>
				</tr>
				<tr><th colspan="3" style="color: red"><?php echo $error; ?></th></tr>
				
						
			</table>
			<div id="next" style="margin: auto" <?php if($error != "Thêm thành công !") echo "hidden" ?> >
							<table style="margin: auto" border="1"> 
								<tr>
									<th colspan="2" style="text-align: center;"><?php echo $ts . " - " .$hs; ?></th>
								</tr>
								<tr>
									<td rowspan="3"><img width="100px" src="img/<?php echo $ha ?>"></td>
								</tr>
								<tr>
									<td >
										<font style="font-style:bold ">Thành phần dinh dưỡng:</font> <br><?php echo $tpdd ?> 
										<br>
										Lợi ích: <br><?php echo $li ?>
										<br>
										Trọng Lượng: <font style="color: red"><?php echo $tl?> gr </font> --  Đơn giá:<font style="color: red"> <?php echo $dg; ?> VNĐ</font> 
									</td>
								</tr>

							</table>
						</div>
			<a href="thongtinSP.php">Xem danh sách</a><br>
			<a href="giaodien.php">Trang chủ</a>
		</form>
	</div>
	
</body>
</html>


	</div>
</body>
</html>