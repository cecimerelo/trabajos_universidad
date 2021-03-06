<?php	
	session_start();  
  
	ini_set('display_errors', true);
	error_reporting(E_ALL);
						
	require_once "../php/Comentario.class.inc";
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../css/noticias.css">
    <title>PlaceHolder - ECONOMIA. Despedir con 20 días ya es más común que hacerlo con 45 tras la reforma laboral</title>
    <meta name="description" content="Noticia económica del portal PlaceHolder">
    <meta name="author" content="German Martinez Maldonado">
	<script type="text/javascript" src="../js/scriptNoticias.js"></script>
	<noscript>
		Este navegador no es compatible con los scripts que se necesitan ejecutar para el correcto funcionamiento de la páginas, por favor actualice la versión de su navegador a una más reciente que sea compatible
		<br><br>
	</noscript>
</head>

<body>
    
<aside id="publi_sup">
    <a href="http://www.pnsd.msc.es/">
        <img class="img_publicidad_superior" src="../publicidad/publicidad_antidrogas.jpg" alt="publicidad_antidrogas"/>
    </a>
</aside>

<aside id="publi_izq">
    <a href="http://www.samsung.com/es/#home-appliances-home">
        <img class="img_publicidad_lateral" src="../publicidad/publicidad_samsung.jpg" alt="publicidad_samsung"/>
    </a>
</aside>

<aside id="publi_der">
    <a href="http://www.donuts.es/">
        <img class="img_publicidad_lateral" src="../publicidad/publicidad_donuts.jpg" alt="publicidad_donuts"/>
    </a>
</aside>

<section id="cuerpo">
    <header>
        <a href="../index.php">
            <img id="img_cabecera" src="../index/cabecera.jpg" alt="cabecera"/>
        </a>
    </header>
    
    <nav>
        <a href="../nacional.html">
            <img src="../index/nacional.jpg" alt="nacional"/>
        </a>
        
        <a href="../internacional.html">
            <img src="../index/internacional.jpg" alt="internacional"/>
        </a>
        
        <a href="../economia.html">
            <img src="../index/economia.jpg" alt="economia"/>
        </a>
        
        <a href="../deportes.html">
            <img src="../index/deportes.jpg" alt="deportes"/>
        </a>
    </nav>
    
	<section id="cabecera_secciones">
		<img id="img_cabecera_secciones" src="../index/economia.jpg" alt="economia"/>
	</section>
   
	<section id="noticia_destacada">
		<article class="economia">
			<figure id="figura_noticia_destacada">
				<img class="img_noticia_destacada" src="./despedir_veinte_dias_comun_20130423/imagen_01.jpg"  
					 alt="despedir_veinte_dias_comun_20130423"/>
				<figcaption> Protesta de trabajadores en contra de un Expediente de Regulación de Empleo. </figcaption>
			</figure>
			<hgroup>
				<h2 onmouseover="ventanaNoticiasRelacionadas(3)"> ECONOMIA. Despedir con 20 días ya es más común que hacerlo con 45 tras la reforma laboral </h2>
				<h3> Autor: Bruno Pérez </h3>
			</hgroup>
			<p class="cont_noticia"> Hasta el año pasado la mayoría de los trabajadores que eran despedidos en España se iban a casa con el 
				reconocimiento por parte de la empresa de que su decisión había sido improcedente y con una indemnización 
				debajo del brazo que podía oscilar entre 33 y 45 días por año trabajado en función del tipo de contrato que 
				tuviera el trabajador.<br/><br/>
				La reforma laboral ha arramblado con este patrón. Según la información recabada por Sagardoy Abogados, 
				uno de los despachos de referencia del derecho laboral en España, en 2012 el número de empleados que fueron 
				despedidos a través de un ERE o por causas objetivas, circunstancias en las que se contempla una indemnización 
				legal de 20 días por año, superó por primera vez en lustros a los que resultaron despedidos de manera 
				improcedente con 45 días de indemnización.<br/><br/>
				La consecuencia ha sido un significativo abaratamiento del coste de despedir para los empresarios, que, 
				según los datos del INE, se ha reducido en torno a un 20% desde la entrada en vigor de la reforma laboral.<br/><br/>
				No se puede decir que el abaratamiento del despido no fuera uno de los objetivos perseguidos por la reforma 
				impulsada por el Gobierno.<br/><br/>
				La principal palanca para lograrlo era el despido objetivo por razones económicas, organizativas, técnicas 
				o de la producción, que, esencialmente, dejaba en 20 días, con un máximo de 12 mensualidades, la indemnización 
				estándar en los procesos de ajuste de plantilla de las empresas españolas.<br/><br/>
				Antes de la aparición de esta figura, el marco más habitual era la indemnización por despido disciplinario 
				improcedente, que preveía entre 33 y 45 días de indemnización, con un techo máximo de compensación de 24 y 42 
				mensualidades, respectivamente.<br/><br/>
				Antes de que se desencadenara esta crisis, allá por el año 2007, tres de cada cuatro despidos que se 
				producían en España eran improcedentes y con indemnizaciones de entre 33 y 45 días. La suma de los despidos 
				por causas objetivas y como consecuencia de un ERE apenas superaban el 10%.<br/><br/>
				La crisis varió algo este panorama. Lógicamente, se incrementaron los ERE y los expedientes de despido 
				asociados a causas objetivas o económicas, pero el despido improcedente continuó siendo la forma más común 
				de ajuste de plantilla y más de la mitad de los despidos seguían respondiendo a este modelo.<br/><br/>
        </article>
	</section>

	<section id="bloque_lateral">
		<article class="economia">
			<h1> NOTICIAS RELACIONADAS </h1>
		</article>
			
        <article class="economia">
			<a href="./empleo_esfuerzos_movilizar_parados_20130501.php">
				<figure>
					<img class="img_noticia_relacionada" src="./empleo_esfuerzos_movilizar_parados_20130501/imagen_01.jpg"
						 alt="empleo_esfuerzos_movilizar_parados_20130501"/>
					<figcaption> Hay tres millones de desempleados que están cobrando una prestación por desempleo.
								 </figcaption>
				</figure>
				<h2> ECONOMIA. Empleo vuelca sus esfuerzos en 'movilizar' a los parados que cobran una prestación </h2>
            </a>
            <h3> Autor: Bruno Pérez </h3>
            <p> Aplicará técnicas de la Inspección de Hacienda para constatar que los perceptores de paro buscan 
				activamente un empleo. Confía en que las agencias privadas puedan comenzar a operar en octubre y 
				ayuden a desembalsar las listas del paro. </p>
        </article>
			
        <article class="economia">
			<a href="./economia/ugt_ccoo_organizan_manifestacion_20130430.php">
				<h2> ECONOMIA. UGT y CC.OO. organizan mañana una manifestación para reclamar una nueva política económica 
					 y decir 'no' a la austeridad </h2>
            </a>
            <h3> Autor: lainformacion.com </h3>
            <p> UGT y CC.OO. han organizado para mañana, Día Internacional del Trabajo, más de 80 manifestaciones 
				conjuntas en toda España, cuya marcha central tendrá lugar en Madrid, para reclamar una nueva política 
				económica, centrada en el crecimiento y el empleo, y decir 'no' a la austeridad y los recortes. </p>
        </article>
	</section>
		
	<section id="publicidad_interior">
		<aside class="publi_interior">
			<a href="http://es.playstation.com/ps3/">
				<img class="img_publicidad_interior" src="../publicidad/publicidad_sony.jpg" alt="publicidad_sony"/>
			</a>
		</aside>
		
		<aside class="publi_interior">
			<a href="http://www.xbox.com/es-ES">
				<img class="img_publicidad_interior" src="../publicidad/publicidad_xbox.jpg" 
					 alt="publicidad_xbox"/>
			</a>
		</aside>
		
		<aside class="publi_interior">
			<a href="http://www.nintendo.com/wiiu/es">
				<img class="img_publicidad_interior" src="../publicidad/publicidad_nintendo.jpg" 
					 alt="publicidad_nintendo"/>
			</a>
		</aside>
	</section>
		    
    <section id="opinion_lectores">
		<h1> OPINIONES DE LOS LECTORES</h1>
		
		<?php
			if(isset($_SESSION['usuario']))
				$usuario = $_SESSION['usuario'];
			else
				$usuario = "USUARIO NO REGISTRADO";
				
			$noticia = basename($_SERVER['PHP_SELF'],'.php');
			$ruta = "../economia/".basename($_SERVER['PHP_SELF'])."#final";
			 
		?>
		
		<form action='../php/insertaComentario.php' method=post >
			<fieldset>
				<legend> <h3> Introduzca un nuevo comentario: </h3> </legend>
						
				<label for='comentarioUsuario'> Sesión actual del usuario: <?php print($usuario) ?> </label>
				<input type='hidden' id='comentarioUsuario' name='comentarioUsuario' value='<?php print($usuario) ?>'/>
				<br><br>
				<label for='textoComentario'> Comentario (máximo 200 caracteres): </label><br>
				<textarea id='textoComentario' name='textoComentario' cols='65' rows='3' maxlength='255' onblur="validaComentario()"></textarea>
				<input type='hidden' id='nombreNoticia' name='nombreNoticia' value='<?php print($noticia) ?>' />
				<input type='hidden' id='rutaNoticia' name='rutaNoticia' value='<?php print($ruta) ?>' />
				<br><br>
				<input type="button" id="botonValidar" value="Validar datos" onclick="validarFormulario()"/>
				<input type="reset" id="botonReiniciar" value="Borrar datos" onclick="reactivaCampos()"/>
				<input type="submit" id="botonEnviar" value="Enviar datos" disabled="true"/>
				
			</fieldset>

		</form>
	
		<br><h3> Comentarios sobre las noticias: </h3>
		
		<?php Comentario::mostrarComentarios(Comentario::getComentarios($noticia)); ?>
		<p id="final"></p>
    </section>

 <footer>
	 <h2> INFORMACIÓN DE CONTACTO </h2>
	 <p> <address> C/ Periodista Daniel Saucedo Aranda, s/n, 18071, Granada </address> </br>
		 <strong> Teléfono: </strong> 958 24 28 02 </br>
		 <strong> Correo electrónico: </strong> <a href="mailto:contacto@placeholder.com"> contacto@placeholder.com </a> </br></br>
		 <strong> <a href="../formulario.html"> Suscribirse a la versión impresa de PlaceHolder </strong> </a> </br></br>
		 <strong> <a href="../descripcion.pdf"> Cómo se hizo. </strong> </a>
	 </p>
 </footer>

</section>

</body>
</html>
