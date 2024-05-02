<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>PRODUCT UNIT USAHA PANCABUDI</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins&family=Roboto:wght@700&display=swap" rel="stylesheet">  

    <!-- Icon Font Stylesheet -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
    <link href="lib/flaticon/font/flaticon.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/view.css" rel="stylesheet">
</head>

<body>
    <!-- Topbar Start -->
    <div class="container-fluid border-bottom d-none d-lg-block">
        <div class="row gx-0">
            <div class="col-lg-4 text-center py-2">
                <div class="d-inline-flex align-items-center">
                    <i class="bi bi-geo-alt fs-1 text-primary me-3"></i>
                    <div class="text-start">
                        <h6 class="text-uppercase mb-1">Our Office</h6>
                        <span>Jl. Gatot Subroto, Simp. Tanjung, Medan Sunggal, Kota Medan, Sumatera Utara, 20122</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 text-center border-start border-end py-2">
                <div class="d-inline-flex align-items-center">
                    <i class="bi bi-envelope-open fs-1 text-primary me-3"></i>
                    <div class="text-start">
                        <h6 class="text-uppercase mb-1">Email Us</h6>
                        <span>unpab@pancabudi.ac.id</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 text-center py-2">
                <div class="d-inline-flex align-items-center">
                    <i class="bi bi-phone-vibrate fs-1 text-primary me-3"></i>
                    <div class="text-start">
                        <h6 class="text-uppercase mb-1">Call Us</h6>
                        <span>+6261-8455-571</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->


    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg bg-white navbar-light shadow-sm py-3 py-lg-0 px-3 px-lg-0">
        <a class="navbar-brand ms-lg-5">
            <h3 class="m-nts0 text-uppercase text-dark"><img src=img/unitusaha.jpg width=110px height=110px>&nbsp;&nbsp;</i>UNIT USAHA PANCABUDI</h3>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto py-0">
                <a href="index.php" class="nav-item nav-link active">Home</a>
				<div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">About</a>
                    <div class="dropdown-menu m-0">
						<a href="history_user.php" class="dropdown-item">History</a>
                        <a href="vission_and_mission.php" class="dropdown-item">Vission and Mission</a>
                    </div>
					</div>
				<div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Classess</a>
                    <div class="dropdown-menu m-0">
						<a href="profile_unit_usaha.php" class="dropdown-item">Profile Unit Usaha</a>
                        <a href="team.php" class="dropdown-item">Team</a>
                    </div>
					</div>
				<div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Products</a>
                    <div class="dropdown-menu m-0">
					<?php
					include"sambung.php";					
					$query = mysqli_query($link,"select * from unit ORDER BY id_unit ASC");
					while($jmlh=mysqli_fetch_array($query))
					{
						echo"<a href='product_user.php?id=$jmlh[0]' class='dropdown-item'>$jmlh[1]</a>";
					}
					?>
                    </div>
					</div>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a>
                    <div class="dropdown-menu m-0">
						<a href="testimoni.php" class="dropdown-item">Testimoni</a>
					<?php
					include"sambung.php";					
					$query = mysqli_query($link,"select * from media where id_media=1");
					$jmlh=mysqli_fetch_array($query);
					echo"<a href='$jmlh[2]' class='dropdown-item'>Instagram</a>";
					echo"<a href='home.php' class='dropdown-item'>Login</a>";
				?>
                    </div>
                </div>
				<?php	
					include"sambung.php";
					$query = mysqli_query($link,"select * from media where id_media=1");
					$jmlh=mysqli_fetch_array($query);
						echo"<a href='$jmlh[2]' class='nav-item nav-link nav-contact bg-primary text-white px-5 ms-lg-5'>Media <i class='bi bi-arrow-right'></i></a>";
				?>
            </div>
        </div>
    </nav>
    <!-- Navbar End -->


    <!-- Products Start -->
    <div class="container-fluid py-5">
        <div class="container">
	
			 <?php
					include"sambung.php";	
					$id=$_GET['id'];
					$queri = mysqli_query($link,"select * from unit where id_unit='".$id."'");
					$jml=mysqli_fetch_array($queri);
					echo"<div class='border-start border-5 border-primary ps-5 mb-5' style='max-width: 600px;'><h1 class='display-5 text-uppercase mb-0'><u>$jml[1]</u></h1><br>
					<a href='$jml[4]'><img src='$jml[4]' height=500px></a><br><br><br>";
                ?>
				<h6 class="text-primary text-uppercase">Products</h6>
                <h1 class="display-5 text-uppercase mb-0">Products For Your Best Friends</h1>
            </div>
             <div class="owl-carousel product-carousel">
			 <?php
					$id=$_GET['id'];
					include"sambung.php";					
					$query = mysqli_query($link,"select * from produk_layanan ORDER BY id_produk_layanan ASC");
					while($jmlh=mysqli_fetch_array($query))
					{
						if($id==$jmlh[1]){
						if($jmlh[5]=="Makanan" || $jmlh[5]=="Alat"){
						echo"				
				<div class='pb-5'>
                    <div class='product-item position-relative bg-light d-flex flex-column text-center'>
						<img src='$jmlh[2]' style='width:500px; height:200px' class='img-fluid mb-4' alt=''>
                        <h6 class='text-uppercase'>$jmlh[4]</h6>
                        <h5 class='text-primary mb-0'>$jmlh[3]</h5>
                    </div>
						</div>";}}
					}
					?>
            </div>
        </div>
    </div>
    <div class="container-fluid py-5">
        <div class="container">
            <div class="border-start border-5 border-primary ps-5 mb-5" style="max-width: 600px;">
                <h6 class="text-primary text-uppercase">Products</h6>
                <h1 class="display-5 text-uppercase mb-0">Products For Your Best Friends</h1>
            </div>
             <div class="owl-carousel product-carousel">
			 <?php
					include"sambung.php";					
					$query = mysqli_query($link,"select * from produk_layanan ORDER BY id_produk_layanan ASC");
					while($jmlh=mysqli_fetch_array($query))
					{
						if($id==$jmlh[1]){
						if($jmlh[5]=="Minuman" || $jmlh[5]=="Bahan"){
						echo"				
				<div class='pb-5'>
                    <div class='product-item position-relative bg-light d-flex flex-column text-center'>
						<img src='$jmlh[2]' style='width:500px; height:200px' class='img-fluid mb-4' alt=''>
                        <h6 class='text-uppercase'>$jmlh[4]</h6>
                        <h5 class='text-primary mb-0'>$jmlh[3]</h5>
                    </div>
						</div>";}}
					}
					?>
            </div>
        </div>
    </div>
    <!-- Products End -->

    

    <!-- Footer Start -->
    <div class="container-fluid bg-light mt-5 py-5">
        <div class="container pt-5">
            <div class="row g-5">
                <div class="col-lg-3 col-md-6">
                    <h5 class="text-uppercase border-start border-5 border-primary ps-3 mb-4">Get In Touch</h5>
                    <p class="mb-4">Beranda Cafe, Padimart, Fotocopy, Juman Bakery, Laziz Centro, Warung Kongsi, Toko Kongsi</p>
                    <p class="mb-2"><i class="bi bi-geo-alt text-primary me-2"></i>Jl. Gatot Subroto, Simp. Tanjung, Medan Sunggal, Kota Medan, Sumatera Utara, 20122</p>
                    <p class="mb-2"><i class="bi bi-envelope-open text-primary me-2"></i>unpab@pancabudi.ac.id</p>
                    <p class="mb-0"><i class="bi bi-telephone text-primary me-2"></i>+6261-8455-571</p>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h5 class="text-uppercase border-start border-5 border-primary ps-3 mb-4">Quick Links</h5>
                    <div class="d-flex flex-column justify-content-start">
                        <a class="text-body mb-2" href="#"><i class="bi bi-arrow-right text-primary me-2"></i>Home</a>
                        <a class="text-body mb-2" href="#"><i class="bi bi-arrow-right text-primary me-2"></i>About</a>
                        <a class="text-body mb-2" href="#"><i class="bi bi-arrow-right text-primary me-2"></i>Classess</a>
                        <a class="text-body mb-2" href="#"><i class="bi bi-arrow-right text-primary me-2"></i>Products</a>
                        <a class="text-body mb-2" href="#"><i class="bi bi-arrow-right text-primary me-2"></i>Pages</a>
				        <a class="text-body mb-2" href="#"><i class="bi bi-arrow-right text-primary me-2"></i>Media</a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h5 class="text-uppercase border-start border-5 border-primary ps-3 mb-4">Popular Links</h5>
                    <div class="d-flex flex-column justify-content-start">
                        <a class="text-body mb-2" href="#"><i class="bi bi-arrow-right text-primary me-2"></i>Profile Unit Usaha</a>
                        <a class="text-body mb-2" href="#"><i class="bi bi-arrow-right text-primary me-2"></i>Team</a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h5 class="text-uppercase border-start border-5 border-primary ps-3 mb-4">Team</h5>
                        <a class="text-body mb-2" href="#"><i class="bi bi-arrow-right text-primary me-2"></i>Nurul Fadhillah</a><br>
                        <a class="text-body mb-2" href="#"><i class="bi bi-arrow-right text-primary me-2"></i>Putri Khairunnisa</a><br>
                        <a class="text-body mb-2" href="#"><i class="bi bi-arrow-right text-primary me-2"></i>Wisnu Wardhana</a><br>
                    <div class="d-flex">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid bg-dark text-white-50 py-4">
        <div class="container">
            <div class="row g-5">
                <div class="col-md-6 text-center text-md-start">
                    <p class="mb-md-0">&copy; <a class="text-white" href="#">UNIT USAHA PANCABUDI</a>
                </div>
                <div class="col-md-6 text-center text-md-end">
                    <p class="mb-0"><a class="text-white" href="">All Team Unit Usaha</a></p>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-primary py-3 fs-4 back-to-top"><i class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>