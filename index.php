<?php
session_start();
if ( isset($_SESSION['correousuario']) ){
	echo "Bienvenido ".$_SESSION['correousuario'];
} else{
	header("location: login.php");
}
?>
<!doctype html>
<html>

<head>
	<meta charset="UTF-8">
	<title>Premios Monarca - 16a edición</title>
	<meta name=“description” content="Llegó el momento de volver a compartir el gran honor de reconocer a los mejores distribuidores de tecnología a nivel nacional en un evento único y especial"/>

	<meta property=“og:title” content="Premios Monarca - 16a edición" />
	<meta property=“og:description” content="Llegó el momento de volver a compartir el gran honor de reconocer a los mejores distribuidores de tecnología a nivel nacional en un evento único y especial" />
	<meta property=“og:image” content=“http://premiosmonarcahp.com/img/graph.jpg” />
	<meta property=“og:url” content=“premiosmonarcahp.com” >

	<meta name=“twitter:card” content="Premios Monarca - 16a edición">
	<meta name=“twitter:title” content="Premios Monarca - 16a edición">
	<meta name=“twitter:description” content="Llegó el momento de volver a compartir el gran honor de reconocer a los mejores distribuidores de tecnología a nivel nacional en un evento único y especial">
	<meta name=“twitter:image” content=“http://premiosmonarcahp.com/img/graph.jpg”>
	<meta name=“twitter:image:alt” content="Premios Monarca HP">
	<meta name=“twitter:url” content=“premiosmonarcahp.com” />

	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Cormorant:wght@300;400;700&display=swap" rel="stylesheet">
	<link href="css/style.css" rel="stylesheet">
	<link rel="stylesheet"href="https://unpkg.com/swiper@8/swiper-bundle.min.css"/>

	<link rel="apple-touch-icon" sizes="152x152" href="favicon/apple-touch-icon.png">
	<link rel="icon" type="image/png" sizes="32x32" href="favicon/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="16x16" href="favicon/favicon-16x16.png">
	<link rel="manifest" href="favicon/site.webmanifest">
	<link rel="mask-icon" href="/safari-pinned-tab.svg" color="#5bbad5">
	<meta name="msapplication-TileColor" content="#da532c">
	<meta name="theme-color" content="#ffffff">
</head>

<body>

	<header>

		<a href="#portada" class='header-logo'>
			<img src="./img/dark-logo.svg" alt="logo">
		</a>

		<nav>
			<a href="#portada" id="portada-link" class="active">Inicio</a>
			<a href="#registro" id="registro-link" class="">Registro</a>
			<a href="#informacion" id="informacion-link" class="">Información</a>
			<a href="#venue" id="venue-link" class="">Venue</a>
			<a href="#conductores" id="conductores-link" class="">Conductores</a>
			<a href="#galardon" id="galardon-link" class="">Galardón</a>
			<a href="#galeria" id="galeria-link" class="">Galería</a>
		</nav>

		<a id="hamburguer_menu" data="hamburguer_menu" href="javascript:void(0);">
			<b></b>
			<b></b>
			<b></b>
		</a>

		<ul id="menu-mobile" class='menu-mobile'>
			<li><a href="#portada" class="active">Inicio</a></li>
			<li><a href="#registro" class="">Registro</a></li>
			<li><a href="#informacion" class="">Información</a></li>
			<li><a href="#venue" class="">Venue</a></li>
			<li><a href="#conductores" class="">Conductores</a></li>
			<li><a href="#galardon" class="">Galardón</a></li>
			<li><a href="#galeria" class="">Galería</a></li>

			<li id='cerrar-sesion'><a href="destroy.php">Cerrar Sesión</a></li>
		</ul>

		<a class='button-sesion' href="destroy.php">Cerrar Sesión</a>

	</header>

	<section id="portada">
			<div class="img-portada">
				<article>
					<h1>Premios Monarca</h1>
					<h2>16<sup>a</sup> edición  •  Ciudad de México</h2>
				</article>
			</div>
			<div class='portada-contain'>
				<article class="frase-portada">
					<h2><span>“</span>Tal vez necesitábamos separarnos un poco para poder reencontrarnos nuevamente, pero con más amor que antes.<span>”</span></h2>
					<cite>Leah Raeder.</cite>
				</article>

				<article class="texto-portada">
					<p>HP e Intel te invitan a ser parte nuevamente de los Premios Monarca y conocer a los ganadores de este año el 22 de Septiembre</p>
					<!-- <div id="contador"></div> -->
				</article>

				<article class="ubicacion-portada">
					<p>Lugar: Salón Barcelona</p>
					<p>Dirección: Barcelona #26 Col. Juárez, Cuauhtémoc 06600 Ciudad de México, CDMX</p>
				</article>
			</div>
	</section>

	<section id="registro">

		<div class="img-form">
			<!-- <h2><span>Sección </span><span class="line-title"></span><span>de registro</span></h2> -->
			<img src="img/trofeos.png" alt="">
		</div>

		<div id="sib-form-container" class="sib-form-container">
			<div class='thanks'>
				<h1>"Gracias por acompañarnos a la Décimo sexta entrega de Premios Monarca”</h1>
			</div>
			<div class='links-thanks'>
				<a href="#" id='videomemoria1'>
					<img src="img/videomemoria.svg">
					<p>Videomemoria</p>
				</a>
				<a href="memoria/index.html">
					<img src="img/galeria.svg">
					<p>Galería</p>
				</a>
				<!-- <a href="#" id='Timelapse'>
					<img src="img/timelapse.svg">
					<p>Timelapse</p>
				</a> -->
			</div>
			<!-- <div id="error-message" class="sib-form-message-panel">
				<div class="sib-form-message-panel__text sib-form-message-panel__text--center">
					<svg viewBox="0 0 512 512" class="sib-icon sib-notification__icon">
						<path
							d="M256 40c118.621 0 216 96.075 216 216 0 119.291-96.61 216-216 216-119.244 0-216-96.562-216-216 0-119.203 96.602-216 216-216m0-32C119.043 8 8 119.083 8 256c0 136.997 111.043 248 248 248s248-111.003 248-248C504 119.083 392.957 8 256 8zm-11.49 120h22.979c6.823 0 12.274 5.682 11.99 12.5l-7 168c-.268 6.428-5.556 11.5-11.99 11.5h-8.979c-6.433 0-11.722-5.073-11.99-11.5l-7-168c-.283-6.818 5.167-12.5 11.99-12.5zM256 340c-15.464 0-28 12.536-28 28s12.536 28 28 28 28-12.536 28-28-12.536-28-28-28z" />
					</svg>
					<span class="sib-form-message-panel__inner-text">
						Revisa que tus datos esten correctos y que los campos obligatorios este llenos
					</span>
				</div>
			</div>

			<div></div>

			<div id="success-message" class="sib-form-message-panel">
				<div class="sib-form-message-panel__text sib-form-message-panel__text--center">
					<svg viewBox="0 0 512 512" class="sib-icon sib-notification__icon">
						<path
							d="M256 8C119.033 8 8 119.033 8 256s111.033 248 248 248 248-111.033 248-248S392.967 8 256 8zm0 464c-118.664 0-216-96.055-216-216 0-118.663 96.055-216 216-216 118.664 0 216 96.055 216 216 0 118.663-96.055 216-216 216zm141.63-274.961L217.15 376.071c-4.705 4.667-12.303 4.637-16.97-.068l-85.878-86.572c-4.667-4.705-4.637-12.303.068-16.97l8.52-8.451c4.705-4.667 12.303-4.637 16.97.068l68.976 69.533 163.441-162.13c4.705-4.667 12.303-4.637 16.97.068l8.451 8.52c4.668 4.705 4.637 12.303-.068 16.97z" />
					</svg>
					<span class="sib-form-message-panel__inner-text">
						Tus datos se han enviado con éxito
					</span>
				</div>
			</div>

			<div></div>

			<div id="sib-container" class="sib-container--large sib-container--vertical">
				<form id="sib-form" method="POST"
					action="https://dc8b637e.sibforms.com/serve/MUIEAGWqd438fmpRs7idL3SSvtx847eueOOu-SO5zHO3y6Vj57tNmbMau2bCc1b_7w8qZJCwfLmtx0YM5nwtJ-t90HzknxTw6Q-sCkBPrlnow3rDua4uTkqkVjhr11ZB9sdxsrI9G0OnYfUJUBG8Uye0kTrrsgN1jhFJ9wsQWL-zhihS9rDiVtA07fft0ADBLlkLSK1xhVw0bj0D"
					data-type="subscription">

					<p class="p-form">Nos complace contar con su presencia:</p>

					<div class="sib-radiobutton-group sib-form-block" data-required="true">
						<div class="form__entry entry_mcq">
							<div>

								<div class="select-container radio">
									<div class="entry__choice radio-option option-1">
											<input id='radio-1' type="radio" name="PARTICIPACION" class="input_replaced" value="1" required>
											<label for='radio-1' class="radio-button radio-label"></span><span>Sí asistiré en el evento:</label>
									</div>
									<div class="entry__choice radio-option option-1">
											<input id='radio-2' type="radio" name="PARTICIPACION" class="input_replaced" value="2" required>
											<label for='radio-2' class="radio-button radio-label"></span><span>No me es posible participar:</label>
									</div>
								</div>
							</div>

							<label class="entry__error entry__error--primary"></label>

						</div>
					</div>

					<div class="form__entry entry_block">
						<div class="form__label-row ">
							<input class="input" maxlength="200" type="text" id="NOMBRE" name="NOMBRE" autocomplete="off" data-required="true" required />
							<label class="entry__label required" for="NOMBRE" data-required="*">
								Nombre:
							</label>
						</div>

						<label class="entry__error entry__error--primary"></label>

					</div>

					<div class="form__entry entry_block">
						<div class="form__label-row ">
							<input class="input" maxlength="200" type="text" id="APELLIDOS" name="APELLIDOS" autocomplete="off" data-required="true" required>
							<label class="entry__label required" for="APELLIDOS" data-required="*">
								Apellidos:
							</label>
						</div>

						<label class="entry__error entry__error--primary"></label>

					</div>

					<div class="form__entry entry_block">
						<div class="form__label-row ">
							<input class="input" maxlength="200" type="text" id="EMPRESA" name="EMPRESA" autocomplete="off" data-required="true" required />
							<label class="entry__label required" for="EMPRESA" data-required="*">
								Empresa:
							</label>
						</div>

						<label class="entry__error entry__error--primary"></label>

					</div>
					<div class="form__entry entry_block">
						<div class="form__label-row ">
							<input class="input" type="text" id="EMAIL" name="EMAIL" autocomplete="off" data-required="true" required />
							<label class="entry__label required" for="EMAIL" data-required="*">
								Correo Electrónico:
							</label>
						</div>

						<label class="entry__error entry__error--primary"></label>

					</div>
					<div class="form__entry entry_block">
						<div class="form__label-row ">
							<input class="input" maxlength="200" type="text" id="TELEFONO" name="TELEFONO" autocomplete="off" data-required="true" required />
							<label class="entry__label required" for="TELEFONO" data-required="*">
								Teléfono:
							</label>
						</div>

						<label class="entry__error entry__error--primary"></label>

					</div>
					<div class="form__entry entry_block">
						<div class="form__label-row ">
							<input class="input gray" maxlength="200" type="text" id="NOMBRE_ASISTENTE" name="NOMBRE_ASISTENTE" autocomplete="off" />
							<label class="entry__label" for="NOMBRE_ASISTENTE">
								Nombre Asistente:
							</label>
						</div>

						<label class="entry__error entry__error--primary"></label>

					</div>
					<div class="form__entry entry_block">
						<div class="form__label-row ">
							<input class="input gray" maxlength="200" type="text" id="TELEFONO_ASISTENTE" name="TELEFONO_ASISTENTE" autocomplete="off">
							<label class="entry__label" for="TELEFONO_ASISTENTE">
								Telefono Asistente:
							</label>
						</div>

						<label class="entry__error entry__error--primary"></label>

					</div>
					<div class="form__entry entry_block">
						<div class="form__label-row ">
							<input class="input gray" maxlength="200" type="text" id="CORREO_ASISTENTE" name="CORREO_ASISTENTE" autocomplete="off">
							<label class="entry__label" for="CORREO_ASISTENTE">
								Correo Asistente:
							</label>
						</div>

						<label class="entry__error entry__error--primary"></label>

					</div>

					<button id="button-form" class="sib-form-block__button sib-form-block__button-with-loader" form="sib-form"
						type="submit">
						<svg class="icon clickable__icon progress-indicator__icon sib-hide-loader-icon"
							viewBox="0 0 512 512">
							<path
								d="M460.116 373.846l-20.823-12.022c-5.541-3.199-7.54-10.159-4.663-15.874 30.137-59.886 28.343-131.652-5.386-189.946-33.641-58.394-94.896-95.833-161.827-99.676C261.028 55.961 256 50.751 256 44.352V20.309c0-6.904 5.808-12.337 12.703-11.982 83.556 4.306 160.163 50.864 202.11 123.677 42.063 72.696 44.079 162.316 6.031 236.832-3.14 6.148-10.75 8.461-16.728 5.01z" />
						</svg>
						Finalizar Registro
					</button>

					<input type="text" name="email_address_check" value="" class="input--hidden">
					<input type="hidden" name="locale" value="en">

					<span class="span-form">**Invitación personal e instransferible. Fecha límite de registro 14 de Septiembre</span>
				</form>
			</div> -->
		</div>

	</section>

	<div class="divider">
		<img src="./img/intel-hp.svg" alt="logo divider">
	</div>

	<section class="seccion" id="informacion">
		<div>

			<div>
				<img src="img/dark-logo.svg" alt="logo información">
			</div>

			<article>
				<em>¡Bienvenidos!</em>
				<p>Nada nos entusiasma más que volver a compartir el gran honor de reconocer a los mejores distribuidores de tecnología a nivel nacional en un evento único y especial.</p>
				<p>Para esta emocionante 16<sup>a</sup> edición de Premios Monarca nos adentraremos en un increíble recinto histórico.</p>
				<p>Acompáñanos a seguir escribiendo juntos esta gran historia.</p>
			</article>

		</div>

		<img src="img/img-info.jpg" alt="">

	</section>

	<div class="divider">
		<img src="./img/intel-hp.svg" alt="logo divider">
	</div>

	<section id="venue">

		<img src="./img/img-venue.jpg" alt="">

		<article>
			<h3><span>Salón </span><span class="line-title"></span><span>Barcelona</span></h3>
			<div>
				<p>Salón Barcelona es un espacio histórico en donde se celebra la unión, la cultura y la creatividad e invita a todo público a compartir proyectos que rescatan, arriesguen y trasciendan de manera consciente el presente mexicano.</p>
				<p>Sobresaliente por su diseño arquitectónico de inicios del siglo XX. Ecléctica, elegante y genuina son sólo algunas de las características de esta casa. Espacios que no sólo resaltan por su historia y personalidad, sino que también ofrecen al público un amplio patio y espectacular vegetación.</p>

				<a id='seeMap' class="after-line" href="#">Pulse aqui para ver mapa.</a>
			</div>
		</article>

	</section>

	<div class="divider">
		<img src="./img/intel-hp.svg" alt="logo divider">
	</div>

	<section id="conductores">

		<article class="conductor">

			<div class="title-container">
				<h2>Andrea Legarreta</h2>
			</div>

			<div class="info-conductor">

				<div class="img-container"></div>

				<div class="text-conductor">
					<div>
						<p>Nació en la Ciudad de México el 12 de julio de 1972. Con sólo 2 años da inicio a su carrera como actriz participando en algunos comerciales para la televisión.</p>
					</div>
					<div>
						<p>Excelente conductora de programas como: Música Futura, Sábado Gigante, Ombligo Club, Complice en Familia y Tu espacio de expresión. </p>
						<p>Ha demostrado ser muy polifacética y pudo incursionar en doblaje de series como la infantil Stories of my Childhood, dando su voz a un tierno pony.</p>
						<p>Actualmente es conductora del programa Hoy y ha sido considerada como una de las mejores y más queridas de su país.</p>
					</div>
				</div>

			</div>
		</article>

		<div class="divider">
			<img src="./img/intel-hp.svg" alt="logo divider">
		</div>

		<article class="conductor videgaray">

			<div class="title-container">
				<h2>Eduardo Videgaray</h2>
			</div>

			<div class="info-conductor">

				<div class="img-container"></div>

				<div class="text-conductor">
					<div>
						<p>Nació en Ciudad de México el 16 de julio de 1969, Comenzó su carrera en los medios de comunicación trabajando en estaciones locales de radio. Luego fue iniciando en la televisión trabajando como productor.</p>
					</div>
					<div>
						<p>Fue conductor de “Planeta 3”, que empezó saliendo una vez a la semana y luego pasó a ser diario, pero solo duro unos meses. En el año 2008 fue conductor del programa de concursos “Hasta el hoyo,” el cual creó junto a su esposa.
						En el 2010 condujo “Resbalón.” Más tarde fue parte de “La sopa” para el canal “E! Entertainment” (programa en el que sigue trabajando en el año 2017).</p>
						<p>Recibió la medalla “Guillermo Romo” por su trabajo como locutor comercial en televisión. Actualmente conduce el programa de radio “La corneta” y el podcast “La corneta extendida”, el cual lidera la lista de Amazon Music. </p>
					</div>
				</div>

			</div>
		</article>

		<div class="divider">
			<img src="./img/intel-hp.svg" alt="logo divider">
		</div>

	</section>

	<section id="galardon">
		<article>
			<h3><span>Nuestro máximo</span><span class="line-title"></span><span>Galardón</span></h3>
			<p>Para condecorar a los ganadores de este año, el reconocimiento representa una bella mariposa monarca, la estatuilla en hoja de latón dorado está inspirada en las similitudes del origami y las mariposas monarca.</p>
		</article>
		<div class="trofeo-container">
			<img src="img/trofeos.png" alt="trofeos">
		</div>
	</section>

	<div class="divider">
		<img src="./img/intel-hp.svg" alt="logo divider">
	</div>

	<section id="galeria">

		<div class="triggers-gal">

			<div class="triggers">
				<a class='trigger' href="#" id="trigger-video">
					Videomemoria 15<sup>a</sup> Edición
				</a>

				<a class='trigger' href="#" id="trigger-galeria">
					Galería 15<sup>a</sup> Edición
				</a>
			</div>

		</div>

		<img class='logo-galeria' src="img/logo-header.svg">

	</section>

	<footer class="divider">
		<img src="./img/intel-hp.svg" alt="logo divider">
	</footer>

	<div id='overlay-black' class="overlay overlay-black"></div>

	<div class="overlay overlay-white"></div>

	<div id="fotogaleria" class="modal">
		<img class="close" src="img/close.svg" alt="">
		<iframe src="fotogaleria.html" id="form-holder" width="100%" height="100%" frameborder="0"
			scrolling="no"></iframe>
	</div>

	<div id="videomemoria" class="modal">
		<img id='pause-video' class="close" src="img/close.svg" alt="">
		<video id="videoModal" class="video-modal" controls>
			<source src="./video/videomemoria15va.mp4" type="video/mp4">
		</video>
	</div>

	<div id="mapa" class="modal">
		<img class="close" src="img/close.svg" alt="">
		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3762.6368683635333!2d-99.1547532!3d19.428089699999997!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85d1ff2db931a571%3A0x4e6fc11cd38dab67!2sBarcelona%2026%2C%20Ju%C3%A1rez%2C%20Cuauht%C3%A9moc%2C%2006600%20Ciudad%20de%20M%C3%A9xico%2C%20CDMX!5e0!3m2!1ses-419!2smx!4v1657220107631!5m2!1ses-419!2smx" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
	</div>

	<div id="modal-form" class="border-1">
		<img class="close" src="img/close.svg" alt="">
		<div class="border-2">
			<div class="asistir option">
				<h4>Agradecemos su asistencia a nuestra 16<sup>a</sup> entrega de premios Monarca.</h4>
				<h4>En breve recibirá un correo confirmando su participación.</h4>
				<h4>En caso de no recibir la confirmación favor de mandarnos un correo a:</h4>
				<a href="malito:iyali@weil.com.mx">iyali@weil.com.mx</a>
			</div>
			<div class="no-asistir option">
				<h4>¡Lamentamos que no pueda acompañarnos!</h4>
				<h4>Si su agenda sufre cambios y pudiera asistir por favor háganoslo saber a través de nuestro correo electrónico:</h4>
				<a href="malito:iyali@weil.com.mx">iyali@weil.com.mx</a>
			</div>
			<p>¡GRACIAS!</p>
			<em>FAVOR DE REVISAR SU BANDEJA DE CORREO NO DESEADO</em>
		</div>
	</div>

	<!--SCRIPTS-->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>

	<script src="https://sibforms.com/forms/end-form/build/main.js"></script>
	<script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>
	<script type="text/javascript" src="js/masterScript.js"></script>
	<script type="text/javascript" src="js/mails.js"></script>
	<script type="text/javascript" src="js/form.js"></script>
	<script>
		let pause = document.getElementById('pause-video');
		let overlay = document.getElementById('overlay-black');

		pause.addEventListener('click', function () {
			document.getElementById('videoModal').pause();
		})

		overlay.addEventListener('click', function () {
			document.getElementById('videoModal').pause();
		})

	</script>
</body>

</html>