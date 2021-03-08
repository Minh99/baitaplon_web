<!DOCTYPE html>
<html>
<head>
	<title>Trang Chủ</title>
	<link rel="stylesheet" type="text/css" href="styletrangchu.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>

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
	  		<div class="navbar-item">
		  		<div class="dropdown">
				    <button class="dropbtn">Hãng Sữa 
				      <i class="fa fa-caret-down"></i>
				    </button>
				    <div class="dropdown-content">
				      <a href="#">Link 1</a>
				      <a href="#">Link 2</a>
				      <a href="#">Link 3</a>
				    </div>
				 </div> 
		    	<div class="dropdown">
				    <button class="dropbtn">Loại Sữa 
				      <i class="fa fa-caret-down"></i>
				    </button>
				    <div class="dropdown-content">
				      <a href="#">Link 1</a>
				      <a href="#">Link 2</a>
				      <a href="#">Link 3</a>
				    </div>
				 </div> 
		    	<div class="dropdown">
				    <button class="dropbtn">Giá Thành 
				      <i class="fa fa-caret-down"></i>
				    </button>
				    <div class="dropdown-content">
				      <a href="#">Link 1</a>
				      <a href="#">Link 2</a>
				      <a href="#">Link 3</a>
				    </div>
				</div> 
				<div class="dropdown">
					<button class="dropbtn" onclick="location.href = 'login.php';">Admin</button>
				</div>
				<form method="post" style="float: right;padding-top: 5px;">
			      	<input type="text" placeholder="Tìm Kiếm.." name="search" id="search">
			      	<input type="submit" name="btnsub" id="btnsub" value="Search">
			    </form>

		    </div>
	</div>

	<div class="content">
	  	<div class="slide-content">
		  <img class="mySlides" src="img/ensure.jpg">
		  <img class="mySlides" src="img/vinamilk.jpg">
		  <img class="mySlides" src="img/th truemilk.jpg">
		</div>
	</div>

	<!-- vòng lặp hãng sữa... -->

	<div class="content-hangSua">
		<!-- tên hãng sữa -->
		<div class="tenhangsua">
			<h3>Tên Hãng Sữa</h3>
		</div>
		<!-- vòng lặp thông tin các sản phẩm cùng hãng sữa  -->
<!-- 	  	<div class="thongtinsua">
		 	<table>
				<tr>
					<td rowspan="2"><img class="mySlide" src="img/dienthoai.png" ></td>
				</tr>
				<tr>
					<td >
						<h3 class="text-sanPham">Tên Sữa</h3>
						<p class="text-sanPham-item">nhà sản xuất.</p>
						<p class="text-sanPham-item">loại sữa - 170ml -12.000VNĐ.</p>
					</td>
				</tr>
		 	</table>
		</div> -->
		<div class="thongtinsua">
		  	<table>
				<tr>
					<td rowspan="2"><img src="img/dienthoai.png" ></td>
				</tr>
				<tr>
					<td >
						<h3 class="text-sanPham">Tên Sữa: Vinamilk</h3>
						<p class="text-sanPham-item">Nhà sản xuất: Vinamilk</p>
						<p class="text-sanPham-item">Loại sữa - 170ml -12.000VNĐ.</p>
					</td>
				</tr>
		 	</table>
		</div>
		<div class="thongtinsua">
		  	<table>
				<tr>
					<td rowspan="2"><img src="img/dienthoai.png" ></td>
				</tr>
				<tr>
					<td >
						<h3 class="text-sanPham">Tên Sữa: Vinamilk</h3>
						<p class="text-sanPham-item">Nhà sản xuất: Vinamilk</p>
						<p class="text-sanPham-item">Loại sữa - 170ml -1.000VNĐ.</p>
					</td>
				</tr>
		 	</table>
		</div>
		<div class="move">
			<button class="btnPre" onclick="plusDivs(-1)">&#10094;</button>
			<button class="btnNext" onclick="plusDivs(1)">&#10095;</button>
		</div>
		<script>
			var slideIndex = 1;
			showDivs(slideIndex);

			function plusDivs(n) {
			  showDivs(slideIndex += n);
			}

			function showDivs(n) {
			  var i;
			  var x = document.getElementsByClassName("thongtinsua");
			  if (n > x.length) {slideIndex = 1}
			  if (n < 1) {slideIndex = x.length}
			  for (i = 0; i < x.length; i++) {
			    x[i].style.display = "none";  
			  }
			  x[slideIndex-1].style.display = "block";  
			}
		</script>
	</div>

	<div class="footer">
		<div>
			<img src="img/dienthoai.png"> <a href="#">Điện thoại: 123456790</a>
		</div>
		<div>
			<img src="img/dinhvi.png"> <a href="#">Địa chỉ: https://www.google.com/maps/</a>
		</div>
		<div>
			<img src="img/face.png"><a href="#">Facebook: https://www.facebook.com/</a>
		</div>
	</div>


	<script>
			var myIndex = 0;
			carousel();

			function carousel() {
			  var i;
			  var x = document.getElementsByClassName("mySlides");
			  for (i = 0; i < x.length; i++) {
			    x[i].style.display = "none";  
			  }
			  myIndex++;
			  if (myIndex > x.length) {myIndex = 1}    
			  x[myIndex-1].style.display = "block";  
			  setTimeout(carousel, 3000); // Change image every 2 seconds
		}
		</script>
	
	<script>
		window.onscroll = function() {myFunction()};

		var navbar = document.getElementById("navbar_main");
		var sticky = navbar.offsetTop;

		function myFunction() {
	  		if (window.pageYOffset >= sticky-(sticky/3)) {
	    		navbar.classList.add("sticky")
	  		} else {
	    		navbar.classList.remove("sticky");
	  		}
		}
	</script>
</body>
</html>