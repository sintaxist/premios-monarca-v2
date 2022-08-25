<!doctype html>
<html>
<head>
<meta charset="UTF-8">
	<title>Login Premios Monarca - 16va edición</title>
	<meta name=“description” content="Llegó el momento de volver a compartir el gran honor de reconocer a los mejores distribuidores de tecnología a nivel nacional en un evento único y especial"/>

	<meta property=“og:title” content="Premios Monarca - 16va edición" />
	<meta property=“og:description” content="Llegó el momento de volver a compartir el gran honor de reconocer a los mejores distribuidores de tecnología a nivel nacional en un evento único y especial" />
	<meta property=“og:image” content=“http://premiosmonarcahp.com/img/graph.jpg” />
	<meta property=“og:url” content=“premiosmonarcahp.com” >

	<meta name=“twitter:card” content="Premios Monarca - 16va edición">
	<meta name=“twitter:title” content="Premios Monarca - 16va edición">
	<meta name=“twitter:description” content="Llegó el momento de volver a compartir el gran honor de reconocer a los mejores distribuidores de tecnología a nivel nacional en un evento único y especial">
	<meta name=“twitter:image” content=“http://premiosmonarcahp.com/img/graph.jpg”>
	<meta name=“twitter:image:alt” content="Premios Monarca HP">
	<meta name=“twitter:url” content=“premiosmonarcahp.com” />

	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Cormorant:wght@300;400;700&display=swap" rel="stylesheet">
	<link href="./css/style.css" rel="stylesheet">
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
<section id="login-section">
	<div class="login-container">
        <img src="./img/logo-header.svg" alt="logo">
		<form method="post" action="sesion-server.php" id="input-validate">
            <h2>Ingresa tu correo par acceder a la pagina</h2>
			<div id="input-container">
                <input id="mail-validar" type="text" name="correo" required class="input-login">
                <label for="mail-validar">Correo electronico</label>
            </div>
			<input id="verificar-form" type="submit" name="submit" value="Ingresar" class="log-btn">
		</form>
	</div>
</section>
</body>
</html>