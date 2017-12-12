<!DOCTYPE html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>IMT</title>
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- Animate.css -->
<link rel="stylesheet" href="<?php echo base_url('assets'); ?>/css/animate.css">
<!-- Icomoon Icon Fonts-->
<link rel="stylesheet" href="<?php echo base_url('assets'); ?>/css/icomoon.css">
<!-- Bootstrap  -->
<link rel="stylesheet" href="<?php echo base_url('assets'); ?>/css/bootstrap.css">
<!-- Flexslider  -->
<link rel="stylesheet" href="<?php echo base_url('assets'); ?>/css/flexslider.css">
<!-- Owl Carousel  -->
<link rel="stylesheet" href="<?php echo base_url('assets'); ?>/css/owl.carousel.min.css">
<link rel="stylesheet" href="<?php echo base_url('assets'); ?>/css/owl.theme.default.min.css">
<!-- Theme style  -->
<link rel="stylesheet" href="<?php echo base_url('assets'); ?>/css/style.css">

<link href="https://fonts.googleapis.com/css?family=Kameron" rel="stylesheet">

<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets'); ?>/css/bootstrap.css">
<!-- <script src="//code.jquery.com/jquery-1.11.0.min.js"></script> -->
<script type="text/javascript" src="<?php echo base_url('assets'); ?>/jquery/jquery-3.2.1.js"></script>
<script type="text/javascript" src="<?php echo base_url('assets'); ?>/js/bootstrap.js"></script>
<script type="text/javascript" src="<?php echo base_url('assets'); ?>/js/bootbox.min.js"></script>
<!--  <script type="text/javascript" src="<?php //echo base_url('assets'); ?>/js/popper.min.js"></script> -->
<!-- Modernizr JS -->
<script src="<?php echo base_url('assets'); ?>/js/modernizr-2.6.2.min.js"></script>



<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</head>
<body style="font-family: 'Kameron', serif;" <?php if ($keterangan == "no"){ } elseif ($keterangan == "dibawahUmur"){ echo "onload=child()";} elseif ($keterangan == "kondisiTdkBerlaku"){ echo "onload=condition()";} else { echo "onload=suggestion()";} ?> >


<div id="fh5co-page">
<header role="banner" >
	<nav class="navbar navbar-inverse" style="width: 100%;margin: 0;z-index:1000;position:fixed;background-color: rgba(26, 29, 33, 0.95); font-size: 15px;">
	  <div class="container-fluid">
	  	<div class="container">
	  		<div class="navbar-header">
		      <a class="navbar-brand" href="<?php echo base_url('index.php'); ?>" style="font-size: 30px;">IMT APP</a>
		    </div>
		    <ul class="nav navbar-nav">
		    </ul>
		    <ul class="nav navbar-nav navbar-right">
		    	<li><a href="#" data-toggle="modal" data-target="#modalHitungIMT">Hitung Indeks Massa Tubuh</a></li>
		      	<li><a href="<?php echo base_url('index.php/Controller_imt/statistik'); ?>">Lihat Statistik Pengguna</a></li>
		      	<li><a href="<?php echo base_url('index.php/Controller_imt/about'); ?>">Tentang Kami</a></li>
		    </ul>
		</div>
	</div>
</nav>
</header>

<aside id="fh5co-hero" class="js-fullheight">
	<div class="flexslider js-fullheight">
		<ul class="slides">
	   	<li style="background-image: url(<?php echo base_url('assets'); ?>/images/back1.jpg);">
	   		<div class="overlay-gradient"></div>
	   		<div class="container">
	   			<div class="col-md-10 col-md-offset-1 text-center js-fullheight slider-text">
	   				<div class="slider-text-inner">
	   					<div style="background-color: rgba(26, 29, 33, 0.95); height: 175px; border-radius: 8px;">
	   						<h2 style="color: #fff;">Indeks Massa Tubuh</h2>
	   						<p><a href="#" class="btn btn-primary" data-toggle="modal" data-target="#modalHitungIMT">HITUNG</a></p>
	   					</div>
	   				</div>
	   			</div>
	   		</div>
	   	</li>
	   	<li style="background-image: url(<?php echo base_url('assets'); ?>/images/back2.jpg);">
	   		<div class="container">
	   			<div class="col-md-10 col-md-offset-1 text-center js-fullheight slider-text">
	   				<div class="slider-text-inner">
	   					<div style="background-color: rgba(26, 29, 33, 0.95); height: 175px; border-radius: 8px;">
	   						<h2 style="color: #fff;">Statistik Pengguna</h2>
	   						<p><a href="<?php echo base_url('index.php/Controller_imt/statistik'); ?>" class="btn btn-primary">LIHAT</a></p>
	   					</div>
	   				</div>
	   			</div>
	   		</div>
	   	</li>
	   </ul>
	</div>
</aside>

<footer style="position:fixed;bottom:0;width:100%;text-align:center;color:#fff;z-index:1000;background-color: rgba(26, 29, 33, 0.95);">
		<div class="col-md-12 text-center">
			<h3 style="padding-bottom: 10px;">Kelompok Rekayasa Pengetahuan Kelas D - 2017</h3>
		</div>
</footer>
</div>


<!-- Modal -->
    <div class="modal fade" id="modalHitungIMT" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content" id="formBody">
                <div class="modal-header" id="formHeader">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 align="left"></span>Hitung Indeks Massa Tubuh</h4>
                </div>

                <form role="form" method="post" action="<?php echo base_url('index.php/Controller_imt/hitung'); ?>">
                    <div class="modal-body" style="padding:20px 50px;">
                        <div class="form-group">
                            <label for="nama">Nama</label>
                            <input name="nama" type="text" class="form-control" id="nama" required>
                        </div>
						<div class="form-group">
						    <label for="jk">Jenis Kelamin</label>
						    <select class="form-control" id="jk" name="jk">
								<option value="L">Laki-Laki</option>
								<option value="P">Perempuan</option>
						    </select>
						</div>
                        <div class="form-group">
                            <label for="usia">Usia</label>
                            <input name="usia" type="number" class="form-control" id="usia" required>
                        </div>
                        <div class="form-group">
                            <label for="tb">Tinggi Badan (cm)</label>
                            <input name="tb" type="number" class="form-control" id="tb" required>
                        </div>
                        <div class="form-group">
                            <label for="bb">Berat Badan (kg)</label>
                            <input name="bb" type="number" class="form-control" id="bb" required>
                        </div>
                        <div class="form-group">
                            <label for="kondisi">Kondisi Pengguna (isi jika sesuai) : </label>
							<div class="form-check">
							  <label class="form-check-label">
							    <input class="form-check-input" type="checkbox" name="kondisi[]" value="1">
							    Ibu Hamil
							  </label><br>
							  <label class="form-check-label">
							    <input class="form-check-input" type="checkbox" name="kondisi[]" value="2">
							    Atlet
							  </label><br>
							  <label class="form-check-label">
							    <input class="form-check-input" type="checkbox" name="kondisi[]" value="3">
							    Memiliki penimbunan cairan di kaki atau perut
							  </label>
							</div>
                        </div>
                    </div>
                
            <div class="modal-footer">
             	<button type="submit" class="btn btn-success btn-block" id="formSubmit" style="width: 100px;margin-left: 430px">Hitung</button>
            </div>
            </form>
            </div>
        </div>
    </div>
</body>




<!-- jQuery -->
<script src="<?php echo base_url('assets'); ?>/js/jquery.min.js"></script>
<!-- jQuery Easing -->
<script src="<?php echo base_url('assets'); ?>/js/jquery.easing.1.3.js"></script>
<!-- Bootstrap -->
<script src="<?php echo base_url('assets'); ?>/js/bootstrap.min.js"></script>
<!-- Waypoints -->
<script src="<?php echo base_url('assets'); ?>/js/jquery.waypoints.min.js"></script>
<!-- Owl Carousel -->
<script src="<?php echo base_url('assets'); ?>/js/owl.carousel.min.js"></script>
<!-- Flexslider -->
<script src="<?php echo base_url('assets'); ?>/js/jquery.flexslider-min.js"></script>

<!-- MAIN JS -->
<script src="<?php echo base_url('assets'); ?>/js/main.js"></script>

<script>
	function child() {
		bootbox.alert("Mohon maaf, umur Anda belum mencukupi untuk dilakukan perhitungan Indeks Massa Tubuh secara normal.");
	}
	function condition() {
		bootbox.alert("Mohon maaf, kondisi Anda tidak memungkinkan untuk dilakukan perhitungan Indeks Massa Tubuh secara normal.");
	}
	function suggestion() {
		bootbox.alert("<?php echo $keterangan; ?>");
	}
</script>
</html>

