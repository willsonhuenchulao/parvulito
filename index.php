<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <title>Como-agregar-video-a-mi-Web-desde-Youtube-con-PHP-y-Mysql :: Urian Viera</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta http-equiv="content-type" content="text/html;charset=utf-8"/>

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,700|Open+Sans:300,300i,400,400i,700,700i" rel="stylesheet">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/material-design-iconic-font/2.2.0/css/material-design-iconic-font.min.css">

  <!-- Bootstrap CSS File -->
  <link href="lib/bootstrap/css/bootstrap.css" rel="stylesheet">

  <link rel="stylesheet"  href="banner/dist/zoomslider.css"/>
		<script type="text/javascript" src="banner/js/modernizr-2.6.2.min.js"></script>
		<link rel="stylesheet" href="banner/cssbanner.css">

  <!-- Libraries CSS Files -->
  <link href="lib/animate/animate.min.css" rel="stylesheet">
  <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="lib/ionicons/css/ionicons.min.css" rel="stylesheet">
  <link href="lib/magnific-popup/magnific-popup.css" rel="stylesheet">
  <link rel = "stylesheet" href = "https://cdn.jsdelivr.net/npm/picnic">
  <link rel="stylesheet" href="estilos.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Fredoka+One&display=swap" rel="stylesheet">

  <link rel="stylesheet"  href="banner/dist/zoomslider.css"/>
		<script type="text/javascript" src="banner/js/modernizr-2.6.2.min.js"></script>
		<link rel="stylesheet" href="banner/cssbanner.css">

  <link href="css/style.css" rel="stylesheet">

	<!----css banner --->
 


  <style type="text/css">

 
    
.video-responsive {
position: relative;
padding-bottom: 56.25%; /* 16/9 ratio */
padding-top: 30px; /* IE6 workaround*/
height: 0;
overflow: hidden;
}

.video-responsive iframe,
.video-responsive object,
.video-responsive embed {
position: absolute;
top: 0;
left: 0;
width: 100%;
height: 100%;
}
iframe{
  width: 100%;
  height: 100vh;
}

@import url('https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800');

.container {
  display: block;
  margin-top: 10%;
}

h1 {
  font-size: 3em;
  font-weight: 800;
  text-transform: uppercase;
  margin: 0;
}

.container>p {
  font-size: 1em;
  text-transform: uppercase;
  margin: 0;
}

[href] {
    color: #468966;
    text-decoration: none;
    font-size: inherit;
}

hr {
    display: block;
    -webkit-margin-before: 0.5em;
    -webkit-margin-after: 0.5em;
    -webkit-margin-start: auto;
    -webkit-margin-end: auto;
    border-style: inset;
    border-width: 1px;
    width: 80px;
}

/* menu css*/
.nav-enlace{
  display:inline-block;

  background: salmon;
  color: #fff;
    padding: 10px 140px;
    text-decoration: none;
}

.nav-enlace:hover{
    background: rosybrown;
  }

.menu{
  background: while;
  padding:10px;
}


/* fin menu css */


/* letras*/
font-family: 'Fredoka One', cursive;

/* letras */

.a{
  font-family: 'Fredoka One', cursive;
}

/* footer css */

@import url('https://fonts.googleapis.com/css?family=Poppins:400,500,600,700&display=swap');


footer{
  position: relative;
  bottom: 0px;
  width: 100%;
  background: #111;
}
.main-content{
  display: flex;
}
.main-content .box{
  flex-basis: 50%;
  padding: 10px 20px;
}
.box h2{
  font-size: 1.125rem;
  font-weight: 600;
  text-transform: uppercase;
}
.box .content{
  margin: 20px 0 0 0;
  position: relative;
}
.box .content:before{
  position: absolute;
  content: '';
  top: -10px;
  height: 2px;
  width: 100%;
  background: #1a1a1a;
}
.box .content:after{
  position: absolute;
  content: '';
  height: 2px;
  width: 15%;
  background: #f12020;
  top: -10px;
}
.left .content p{
  text-align: justify;
}
.left .content .social{
  margin: 20px 0 0 0;
}
.left .content .social a{
  padding: 0 2px;
}
.left .content .social a span{
  height: 40px;
  width: 40px;
  background: #1a1a1a;
  line-height: 40px;
  text-align: center;
  font-size: 18px;
  border-radius: 5px;
  transition: 0.3s;
}
.left .content .social a span:hover{
  background: #f12020;
}
.center .content .fas{
  font-size: 1.4375rem;
  background: #1a1a1a;
  height: 45px;
  width: 45px;
  line-height: 45px;
  text-align: center;
  border-radius: 50%;
  transition: 0.3s;
  cursor: pointer;
}
.center .content .fas:hover{
  background: #f12020;
}
.center .content .text{
  font-size: 1.0625rem;
  font-weight: 500;
  padding-left: 10px;
}
.center .content .phone{
  margin: 15px 0;
}
.right form .text{
  font-size: 1.0625rem;
  margin-bottom: 2px;
  color: #656565;
}
.right form .msg{
  margin-top: 10px;
}
.right form input, .right form textarea{
  width: 100%;
  font-size: 1.0625rem;
  background: #151515;
  padding-left: 10px;
  border: 1px solid #222222;
}
.right form input:focus,
.right form textarea:focus{
  outline-color: #3498db;
}
.right form input{
  height: 35px;
}
.right form .btn{
  margin-top: 10px;
}
.right form .btn button{
  height: 40px;
  width: 100%;
  border: none;
  outline: none;
  background: #f12020;
  font-size: 1.0625rem;
  font-weight: 500;
  cursor: pointer;
  transition: .3s;
}
.right form .btn button:hover{
  background: #000;
}
.bottom center{
  padding: 5px;
  font-size: 0.9375rem;
  background: #151515;
}
.bottom center span{
  color: #656565;
}
.bottom center a{
  color: #f12020;
  text-decoration: none;
}
.bottom center a:hover{
  text-decoration: underline;
}
@media screen and (max-width: 900px) {
  footer{
    position: relative;
    bottom: 0px;
  }
  .main-content{
    flex-wrap: wrap;
    flex-direction: column;
  }
  .main-content .box{
    margin: 5px 0;
  }
}


/*****Eliminar border por defecto de un botton */


/*********/
/* fin footer */



  </style>
</head>
<body>

  <header id="header">
    <div class="container">
      <nav id="nav-menu-container">
        <ul class="nav-menu">
          <li><a class="menu-active" href="index.php">Inicio</a></li>
          
          <li><a target="_blank" href="agregarVideo.php">Agregar Video</a></li>
          
        </ul>
      </nav>
    </div>
  </header>

  <!-- cargando -->
<div class="cargando">
	    <div class="loader-outter"></div>
	    <div class="loader-inner"></div>
	</div>
	<!-- fin -->
	


		<div class="page-wrap" id="root">
			<?php
		    include('config.php');
			//include('menu.php'); 
			?>
			
			<div class="md-content">
				<div class="hero" id="id-1">
					<div class="hero__wrapper">
						
						<?php
							$sqlBanner   = ("SELECT * FROM banner");
							$queryBanner = mysqli_query($con, $sqlBanner);
							$DataBanner  = mysqli_fetch_array($queryBanner);
						?>

						<div id="demo-1" data-zs-src='["<?php echo $DataBanner['bannerOne']; ?>", "<?php echo $DataBanner['bannerTwo']; ?>", "<?php echo $DataBanner['bannerThree']; ?>", "<?php echo $DataBanner['bannerFourt']; ?>" , "<?php echo $DataBanner['bannerFive']; ?>" ]' data-zs-overlay="dots">    
						    
						    
						    <div class="demo-inner-content">
						    	<br><br>
						    	<br><br>
						    	<br><br>
						    	<br><br>
						       <h1 id="titleBanner">
						       	Bienvenidos..!
						       </h1>
						    </div>
						
						</div>

					
					</div>
				</div>


<!-- menu -->

<div class="menu">

<a href="index.php" class="nav-enlace" >inicio</a>
<a href="parvulo.php" class="nav-enlace">Parvulo

</a>


<a href="pre-basica.php" class="nav-enlace">Pre Básica</a>
<a href="equipo.php"  class="nav-enlace" >Equipo de Trabajo</a>

</div>




	<script  src="https://code.jquery.com/jquery-2.2.4.js"></script>
	<script type="text/javascript" src="assets/js/menu.js"></script>
		
	<!---Importante para hacer funcionar el Banner -->
	<script type="text/javascript" src="banner/dist/jquery.zoomslider.min.js"></script>

	<script type="text/javascript">
	$(document).ready(function(){
		setTimeout(function () {
     $(".cargando").hide();
    }, 500);

	 });
	</script>





    
 <?php 
 require("config.php");

  $sqlVideo   = ("SELECT * FROM videos where id=20");
  $queryVideo = mysqli_query($con, $sqlVideo);
  $totalVideo = mysqli_num_rows($queryVideo);
  $DataVideo  = mysqli_fetch_array($queryVideo);
?>


    <div class="container">
      <h2 class="text-center mt-3 mb-5" style="color:#666; font-weight: 800;">
      Hora de Aprender..!
     </h2>
     <hr>

      <div class="row text-center">
        <div class="col-6">
          <?php 
          if( $totalVideo >0){ ?>
          <h2><?php echo $DataVideo['nombreVideo']; ?></h2>

          <div class="video-responsive">
            <iframe  src="<?php echo $DataVideo['urlVideo']; ?>"  frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen>
            </iframe>
          </div>
        <?php }else{ ?>
        <h2>No hay Video</h2>
        <?php } ?>

        </div>

        <div class="col-6 text-center">
          <img class="img-fluid" src="work.gif" alt="">
        </div>

        <h2>Bienvenidos · Babadú

Los Animales Cantores de Viena</h2>
      </div>
    </div>

    <!--segundo video -->

    
    
 <?php 
 require("config.php");

  $sqlVideo   = ("SELECT * FROM videos ORDER BY id DESC LIMIT 1");
  $queryVideo = mysqli_query($con, $sqlVideo);
  $totalVideo = mysqli_num_rows($queryVideo);
  $DataVideo  = mysqli_fetch_array($queryVideo);
?>


    <div class="container">
      <h2 class="text-center mt-3 mb-5" style="color:#666; font-weight: 800;">
      Seguir Aprendiendo..!
     </h2>
     <hr>

      <div class="row text-center">
        <div class="col-6">
          <?php 
          if( $totalVideo >0){ ?>
          <h2><?php echo $DataVideo['nombreVideo']; ?></h2>

          <div class="video-responsive">
            <iframe  src="<?php echo $DataVideo['urlVideo']; ?>"  frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen>
            </iframe>
          </div>
        <?php }else{ ?>
        <h2>No hay Video</h2>
        <?php } ?>

        </div>

        <div class="col-6 text-center">
          <img class="img-fluid" src="img/work.gif" alt="">
        </div>
      </div>
    </div>
    <!--FIN segundo video -->

    <!--TERCER video -->

    
    
 <?php 
 require("config.php");

  $sqlVideo   = ("SELECT * FROM videos WHERE id=26");
  $queryVideo = mysqli_query($con, $sqlVideo);
  $totalVideo = mysqli_num_rows($queryVideo);
  $DataVideo  = mysqli_fetch_array($queryVideo);
?>


    <div class="container">
      <h2 class="text-center mt-3 mb-5" style="color:#666; font-weight: 800;">
      Seguir Aprendiendo..!
     </h2>
     <hr>

      <div class="row text-center">
        <div class="col-6">
          <?php 
          if( $totalVideo >0){ ?>
          <h2><?php echo $DataVideo['nombreVideo']; ?></h2>

          <div class="video-responsive">
            <iframe  src="<?php echo $DataVideo['urlVideo']; ?>"  frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen>
            </iframe>
          </div>
        <?php }else{ ?>
        <h2>No hay Video</h2>
        <?php } ?>

        </div>

        <div class="col-6 text-center">
          <img class="img-fluid" src="img/work.gif" alt="">
        </div>
      </div>
    </div>
    <!--FIN TERCER video -->

    <!-- Banner Fotos-->

<div class="tabs three">


<input id='tab-1' type='radio' name='tabgroupB' checked />
<label class="pseudo button toggle" for="tab-1" >Parvulos</label> 
<input id='tab-2' type='radio' name='tabgroupB'>
<label class="pseudo button toggle" for="tab-2">Pre-Básica</label>
<input id='tab-3' type='radio' name='tabgroupB'>
<label class="pseudo button toggle" for="tab-3">Equipo de Trabajo</label>
<input id='tab-4' type='radio' name='tabgroupB' checked />


<div class="row">
  <div>
    <img src="bannerWeb/10.jpg" width="100" height="600"/>
  </div>

  <div>
    <img src="bannerWeb/11.jpg" width="100" height="600"/>
  </div>

  <div>
    <img src="bannerWeb/equipo.jpg" width="100" height="600"/>
  </div>
</div>

</div>

<!-- FIN Banner Fotos-->

<!-- iframe google maps-->

    <br><br><br>
<h2 class="text-center mt-3 mb-5" style="color:#666; font-weight: 800;">Lugar Donde Seguir Aprendiendo..! </h2>
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3234.1467506564213!2d-71.59905068488374!3d-35.8454049801564!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9665f5682fd900e5%3A0x5e498da745d72a2a!2sBiblioteca%20de%20Linares%2008%20BC1%20%22Manuel%20Francisco%20Mesa%20Seco%22!5e0!3m2!1ses-419!2scl!4v1635093137448!5m2!1ses-419!2scl" width="600" height="300" style="border:0;" allowfullscreen="" loading="lazy"></iframe>


<!-- FIN goole maps-->

<!-- footer -->
<footer>
      <div class="main-content">
        <div class="left box">
          <h2>Nosotros</h2>
          <div class="content">
            
            <p>Nuestra misión de Educación es asegurar un sistema educativo inclusivo y de calidad que contribuya a la formación integral y permanente de las personas y al desarrollo del país, mediante la formulación e implementación de políticas, normas y regulación, desde la educación parvularia hasta la educación superior.....</p>
            <div class="social">
              <a target="_blank" href="#"><span class="fab fa-facebook-f"></span></a>
              <a target="_blank" href="#"><span class="fab fa-twitter"></span></a>
              <a target="_blank" href="#"><span class="fab fa-instagram"></span></a>
              <a target="_blank" href="https://www.youtube.com/channel/UCodSpPp_r_QnYIQYCjlyVGA"><span class="fab fa-youtube"></span></a>
            </div>
          </div>
        </div>

        <div class="center box">
          <h2>Ubicación</h2>
          <div class="content">
            <div class="place">
              <span class="fas fa-map-marker-alt"></span>
              <span class="text">Linares, Chile</span>
            </div>
            <div class="phone">
              <span class="fas fa-phone-alt"></span>
              <span class="text">+569 321-387-2648</span>
            </div>
            <div class="email">
              <span class="fas fa-envelope"></span>
              <span class="text">Educación@gmail.com</span>
            </div>
          </div>
        </div>

        <div class="right box">
          <h2>Contacto</h2>
          <div class="content">
            <form action="#">
              <div class="email">
                <div class="text">Email *</div>
                <input type="email" required>
              </div>
              <div class="msg">
                <div class="text">Mensaje *</div>
                <textarea rows="2" cols="25" required></textarea>
              </div>
              <div class="btn">
                <button type="submit">Enviar Mensaje</button>
              </div>
            </form>
          </div>
        </div>
      </div>
      <div class="bottom">
      
      </div>
    </footer>
<!-- footer -->



  <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/jquery/jquery-migrate.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="lib/easing/easing.min.js"></script>
  <script src="lib/wow/wow.min.js"></script>
  <script src="lib/superfish/hoverIntent.js"></script>
  <script src="lib/superfish/superfish.min.js"></script>
  <script src="lib/magnific-popup/magnific-popup.min.js"></script>


  <script src="js/main.js"></script>
  <script  src="https://code.jquery.com/jquery-2.2.4.js"></script>
	<script type="text/javascript" src="assets/js/menu.js"></script>


<script type="text/javascript">
var TxtType = function(el, toRotate, period) {
    this.toRotate = toRotate;
    this.el = el;
    this.loopNum = 0;
    this.period = parseInt(period, 10) || 2000;
    this.txt = '';
    this.tick();
    this.isDeleting = false;
};

TxtType.prototype.tick = function() {
    var i = this.loopNum % this.toRotate.length;
    var fullTxt = this.toRotate[i];

    if (this.isDeleting) {
    this.txt = fullTxt.substring(0, this.txt.length - 1);
    } else {
    this.txt = fullTxt.substring(0, this.txt.length + 1);
    }

    this.el.innerHTML = '<span class="wrap">'+this.txt+'</span>';

    var that = this;
    var delta = 200 - Math.random() * 100;

    if (this.isDeleting) { delta /= 2; }

    if (!this.isDeleting && this.txt === fullTxt) {
    delta = this.period;
    this.isDeleting = true;
    } else if (this.isDeleting && this.txt === '') {
    this.isDeleting = false;
    this.loopNum++;
    delta = 500;
    }

    setTimeout(function() {
    that.tick();
    }, delta);
};

window.onload = function() {
    var elements = document.getElementsByClassName('typewrite');
    for (var i=0; i<elements.length; i++) {
        var toRotate = elements[i].getAttribute('data-type');
        var period = elements[i].getAttribute('data-period');
        if (toRotate) {
          new TxtType(elements[i], JSON.parse(toRotate), period);
        }
    }
    // INJECT CSS
    var css = document.createElement("style");
    css.type = "text/css";
    css.innerHTML = ".typewrite > .wrap { border-right: 0.08em solid #fff}";
    document.body.appendChild(css);
};

// importante para hacer funcionar el banner
	<script type="text/javascript" src="../banner/dist/jquery.zoomslider.min.js"></script>

	<script type="text/javascript">
	$(document).ready(function(){
		setTimeout(function () {
     $(".cargando").hide();
    }, 500);

	 });
	</script>

 

</script>



</body>
</html>
