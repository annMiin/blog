<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>SBS</title>

	<link rel="stylesheet" 
	 href="<?php bloginfo('template_url'); ?>/estilo.css">

</head>
<body>


	<body background="<?php bloginfo('template_url'); ?>/h1.jpg">

	<header>
		<center>
		<br>
		<br>

		

		<img src="<?php bloginfo('template_url'); ?>/logo1.png" width="150">
		<h1><?php bloginfo('description'); ?></h1>
		<br>
		<ul>
			<br>
			<li>Inicio</li>
			<li>Noticias</li>
			<li>Deportes</li>
			<li>En Vivo</li>
		</ul>
	    </center>
	</header>

	<section>
		<center>

			<?php $articulos=new WP_Query([
		             'showpost'=>1
	                 ]);
	while ($articulos->have_posts()) {
		$articulos->the_post();
		the_title();
		echo 'hr';
	} ?>

		<br>
		<br>
		<div>
			<img src="<?php bloginfo('template_url'); ?>/clases.jpeg" width="500">
			<br>
			<h3>Ministro de Educación: Desde este lunes los colegios ampliarán su aforo al 100 %</h3>
			<p>El ministro de Educación, Rosendo Serna, informó que desde este lunes 25 de abril los colegios ampliarán su aforo al 100 % en todos sus niveles. Durante su visita a la región Áncash, señaló que en las próximas horas se emitirá la norma correspondiente para que las clases se realicen en su capacidad completa, tal como ya ocurre en zonas rurales.
			"En términos prácticos hoy día se debe publicar la norma del sector Salud, el decreto supremo, y nosotros emitimos mañana la norma técnica y el día lunes todas las instituciones educativas tienen que estar habilitando toda su jornada laboral al 100 %", precisó. </p>
		</div>
		<br>
		<hr>
		<br>
		<div>
			<img src="<?php bloginfo('template_url'); ?>/deportes.jpg" width="500">
			<h3>¡Amistoso confirmado! Selección Peruana enfrentará a Nueva Zelanda en Barcelona antes del repechaje</h3>
			<p>La Selección Peruana sigue en carrera por clasificar al Mundial Qatar 2022. Para ser uno de los 32 elencos que disputarán la máxima fiesta del fútbol, el conjunto de Ricardo Gareca deberá superar el repechaje intercontinental donde medirá fuerzas contra Australia o Emiratos Árabes Unidos. Con miras a ese decisivo partido, este jueves se confirmó que la 'bicolor' sostendrá un encuentro amistoso ante Nueva Zelanda.
			<br>
			Nueva Zelanda, a travésde sus redes sociales, anunció que se medirá a la Selección Peruana el domingo 5 de junio (10:30 a.m. hora peruana), siendo Barcelona la ciudad para el cotejo.“Nueva Zelanda ha confirmado hoy un amistoso internacional masculino contra Perú, que se jugará antes del Play-Off Intercontinental de la Copa Mundial de la FIFA Qatar 2022”, precisó el conjunto oceánico mediante un comunicado.El partido de preparación de la Selección Peruana se llevará a cabo el el RCDE Stadium, escenario que le pertenece al Espanyol, conjunto que se desempeña en LaLiga Santander.</p>
		<br>
		</div>
		<hr>
		<br>
		<div>
			<img src="<?php bloginfo('template_url'); ?>/uso.jpg" width="500">
			<h3>Uso opcional de la mascarilla: ¿En qué zonas, desde cuándo y cuáles son las razones de esta medida?</h3>
			<p>El Perú se suma -parcialmente- a la lista de países que han abolido el uso obligatorio de la mascarilla en espacios abiertos como medida de prevención ante la COVID-19.
			<br>
			Así lo anunció en vísperas el presidente del Consejo de Ministros, Aníbal Torres. En esta nota le contamos todo lo que necesita saber sobre esta nueva disposición.</p>
			<h4>¿Cuáles son los criterios para esta medida?</h4>
			<p>
			Como se menciona líneas arriba, no en todo el país se podrá prescindir de la mascarilla en los espacios abiertos. Las ciudades donde entrará en vigencia esta norma deben cumplir dos requisitos: haber alcanzado más del 80 % de aplicación de la tercera dosis en mayores de 60 años y más del 80 % de la segunda dosis en mayores de 12 años.
			</p>
			<h4>¿En qué ciudades se podrá dejar de usar mascarilla?</h4>
			<p>Hasta el momento, las zonas del país que superan el 80 % de mayores de 60 años vacunados con la tercera dosis contra la COVID-19 son Ica (85.1 %), Callao (84.9 %), Lima Metropolitana (83.5 %), Lima Provincias (83.0 %) y Áncash (80.7 %).</p>
		</div>
	</center>
	</section>

	<footer>
		<center>
		<ul>
			<br>
			<br>
			<li>Facebook</li>
			<li>Whatsapp</li>
			<li>Pinterest</li>
			<li>Youtube</li>
		</ul>
	</center>
	</footer>
</body>
</html>