<html>
	<head> 
		<title>CuartoA</title>
		<link rel="stylesheet" href="css/estilos.css">
		<meta charset="UTF-8">
	</head>
	<body>
		<header><img src="images/banner.png" width="100%" height="30%"></img></header>
		<nav> 
			<ul>
			<li><a href ="index.php?accion=inicio">inicio</a></li>
			<li><a href ="index.php?accion=nosotros">Nosotros</a></li>
			<li><a href ="index.php?accion=contactanos">Contacto</a></li>	
			<li><a href ="index.php?accion=servicios">Servicios</a></li>
			</ul>
		</nav>
		<section>
            <?php
          
            $mvc=new PaginasController();
            $mvc-> enlacesPaginasController();
            ?>
			
		</section>
		<footer> Derechos reservados @CuartoA </footer>


	</body>
</html>