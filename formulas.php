<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Formulas</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Course Project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">
<link href="plugins/fontawesome-free-5.0.1/css/fontawesome-all.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="styles/courses_styles.css">
<link rel="stylesheet" type="text/css" href="styles/courses_responsive.css">
</head>
<body>

<div class="super_container">

	<!-- Header -->

	<header class="header d-flex flex-row">
		<div class="header_content d-flex flex-row align-items-center">
			<!-- Logo -->
			<div class="logo_container">
				<div class="logo">
					<img src="images/logo.png" alt="">
					<span>Álgebra</span>
				</div>
			</div>

			<!-- Main Navigation -->
			<nav class="main_nav_container">
				<div class="main_nav">
					<ul class="main_nav_list">
				        <li class="main_nav_item"><a href="index.html">Inicio</a></li>
						<li class="main_nav_item"><a href="courses.html">Álgebra</a></li>
						<li class="main_nav_item"><a href="login.php">Iniciar sesion</a></li>
						<li class="main_nav_item"><a href="contact.html">Contacto</a></li>	
					</ul>
				</div>
			</nav>
		</div>
		<div class="header_side d-flex flex-row justify-content-center align-items-center">
			<img src="images/BlackDiamond.svg" alt="">
			<span>Black Diamond®</span>
		</div>

		<!-- Hamburger -->
		<div class="hamburger_container">
			<i class="fas fa-bars trans_200"></i>
		</div>

	</header>
	
	<!-- Menu -->
	<div class="menu_container menu_mm">

		<!-- Menu Close Button -->
		<div class="menu_close_container">
			<div class="menu_close"></div>
		</div>

		<!-- Menu Items -->
		<div class="menu_inner menu_mm">
			<div class="menu menu_mm">
				<ul class="menu_list menu_mm">
					<li class="menu_item menu_mm"><a href="index.html">Inicio</a></li>
					<li class="menu_item menu_mm"><a href="courses.html">Álgebra</a></li>
					<li class="menu_item menu_mm"><a href="login.php">Iniciar Sesión</a></li>
					<li class="menu_item menu_mm"><a href="contact.html">Contacto</a></li>
				</ul>

				<!-- Menu Social -->
				<div class="menu_copyright menu_mm">Black Diamond® Todos los derechos reservados</div>
			</div>

		</div>

	</div>
	
	<!-- Home -->

	<div class="home">
		<div class="home_background_container prlx_parent">
			<div class="home_background prlx" style="background-image:url(images/3.jpeg)"></div>
		</div>
		<div class="home_content">
			<h1>Formulas</h1>
		</div>
	</div>

<!--Conexion MYSQLI-->

	<!--ALgebra -->

	<div class="popular page_section">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="section_title text-center">
						<h1>Formulas</h1>
					</div>
				</div>
			</div>

			<div class="row course_boxes">
				
				<!--Teoremas -->
				<div class="col-lg-4 course_box">
					<div class="card">
						<div class="card-body text-center">
									<div class="section_title text-center">
						<h1>Teoremas</h1>
					</div>
                <?php
                $conexion=mysqli_connect("localhost","root")
                or die("Problemas en la conexion");
                mysqli_select_db($conexion, "registro")
                or die("Problemas en la selección de la base de datos");
                $registro=mysqli_query($conexion,"select id,nombre,formula from formulas") or die("Problemas en el select:".mysqli_error());
                while ($reg=mysqli_fetch_array($registro))
                {
                echo "ID:".$reg['id']."<br>";

                echo "Nombre:".$reg['nombre']."<br>";

                echo "Formula:".$reg['formula']."<hr>";
				}
                mysqli_close($conexion);
                ?>
						</div>										
					</div>
				</div>


				<!-- Operaciones Basicas -->
				<div class="col-lg-4 course_box">
					<div class="card">
						<div class="card-body text-center">
									<div class="section_title text-center">
						<h1>Operaciones básicas</h1>
					</div>
                <?php
                $conexion=mysqli_connect("localhost","root")
                or die("Problemas en la conexion");
                mysqli_select_db($conexion, "registro")
                or die("Problemas en la selección de la base de datos");
                $registro=mysqli_query($conexion,"select id,nombre,proceso from op") or die("Problemas en el select:".mysqli_error());
                while ($reg=mysqli_fetch_array($registro))
                {
                echo "ID:".$reg['id']."<br>";
                echo "Nombre:".$reg['nombre']."<br>";
                echo "Ejemplo:".$reg['proceso']."<hr>";
				}
                mysqli_close($conexion);
                ?>
						</div>										
					</div>
				</div>

				<!-- Operaciones con literales -->
				<div class="col-lg-4 course_box">
					<div class="card">
						<div class="card-body text-center">
									<div class="section_title text-center">
						<h1>Operaciones con literales</h1>
					</div>
                <?php
                $conexion=mysqli_connect("localhost","root")
                or die("Problemas en la conexion");
                mysqli_select_db($conexion, "registro")
                or die("Problemas en la selección de la base de datos");
                $registro=mysqli_query($conexion,"select id,nombre,ejemplo from opl") or die("Problemas en el select:".mysqli_error());
                while ($reg=mysqli_fetch_array($registro))
                {
                echo "ID:".$reg['id']."<br>";
                echo "Nombre:".$reg['nombre']."<br>";
                echo "Ejemplo:".$reg['ejemplo']."<hr>";
				}
                mysqli_close($conexion);
                ?>
						</div>										
					</div>
				</div>
			</div>
		</div>		
	</div>

	<!-- Footer -->

	<footer class="footer">
		<div class="container">
		

			<!-- Footer Content -->

			<div class="footer_content">
				<div class="row">

					<!-- Footer Column - About -->
					<div class="col-lg-3 footer_col">

						<!-- Logo -->
						<div class="logo_container">
							<div class="logo">
								<img src="images/logo.png" alt="">
								<span>Álgebra</span>
							</div>
						</div>

						<p class="footer_about_text">Este sitio web ha sido creado unicamente con fines educativos como herramienta para que alumnos y profesores puedan apoyarse en el área de Álgebra.</p>

					</div>

					<!-- Footer Column - Menu -->

					<div class="col-lg-3 footer_col">
						<div class="footer_column_title">Menú</div>
						<div class="footer_column_content">
							<ul>
								<li class="footer_list_item"><a href="index.html">Inicio</a></li>
								<li class="footer_list_item"><a href="#">Formulas</a></li>
								<li class="footer_list_item"><a href="login.php">Iniciar sesión</a></li>
								<li class="footer_list_item"><a href="index.php">Registrate</a></li>
								<li class="footer_list_item"><a href="contact.html">Contacto</a></li>
							</ul>
						</div>
					</div>

					

					<!-- Footer Column - Contact -->

					<div class="col-lg-3 footer_col">
						<div class="footer_column_title">Contacto</div>
						<div class="footer_column_content">
							<ul>
								<li class="footer_contact_item">
									<div class="footer_contact_icon">
										<img src="images/placeholder.svg" alt="https://www.flaticon.com/authors/lucy-g">
									</div>
									CBTis16
								</li>
								<li class="footer_contact_item">
									<div class="footer_contact_icon">
										<img src="images/smartphone.svg" alt="https://www.flaticon.com/authors/lucy-g">
									</div>
									+52 222 556 94 49
								</li>
								<li class="footer_contact_item">
									<div class="footer_contact_icon">
										<img src="images/envelope.svg" alt="https://www.flaticon.com/authors/lucy-g">
									</div>BlackDiamond@gmail.com
								</li>
							</ul>
						</div>
					</div>

				</div>
			</div>

			<!-- Footer Copyright -->

			<div class="footer_bar d-flex flex-column flex-sm-row align-items-center">
				<div class="footer_copyright">
					<span>Copyright &copy;<script>document.write(new Date().getFullYear());</script> Todos los derechos Reservados | sitio creado</i> por: 
						<a href="https://colorlib.com" target="_blank">Black Diamond®</a>
					</span>
				</div>
				<div class="footer_social ml-sm-auto">
					<ul class="menu_social">
						<li class="menu_social_item"><a href="#"><i class="fab fa-instagram"></i></a></li>
						<li class="menu_social_item"><a href="#"><i class="fab fa-facebook-f"></i></a></li>
						<li class="menu_social_item"><a href="#"><i class="fab fa-twitter"></i></a></li>
					</ul>
				</div>
			</div>
		</div>
	</footer>

</div>

<script src="js/jquery-3.2.1.min.js"></script>
<script src="styles/bootstrap4/popper.js"></script>
<script src="styles/bootstrap4/bootstrap.min.js"></script>
<script src="plugins/greensock/TweenMax.min.js"></script>
<script src="plugins/greensock/TimelineMax.min.js"></script>
<script src="plugins/scrollmagic/ScrollMagic.min.js"></script>
<script src="plugins/greensock/animation.gsap.min.js"></script>
<script src="plugins/greensock/ScrollToPlugin.min.js"></script>
<script src="plugins/scrollTo/jquery.scrollTo.min.js"></script>
<script src="plugins/easing/easing.js"></script>
<script src="js/courses_custom.js"></script>

</body>
</html>




















			