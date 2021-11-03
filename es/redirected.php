<?php
session_start();
$_POST=$_SESSION["post"];
$id=$_SESSION["id"];
$_SESSION["post"]="";
$_SESSION["id"]="";
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie-edge">	
	<meta name="Description" content="Black Friday Promo Web 2021: Listado de las mejores ofertas y promociones (tiendas, empresas, negocios personales, blogs, etc) del próximo Black Friday 2021. ¿Qué es el Black Friday? ¿Qué día se celebra el Black Friday 2021? ¿Cuándo es el Black Friday?">  
	<meta name="keywords" content="black, friday, 2021, promo, promos, promociones, ofertas"/>
	<meta property="og:title" content="Black Friday Promo Web 2021 (qué día es, cuándo es, promos, promociones, ofertas, tiendas, empresas, negocios personales, blogs...)"/>
	<meta property="og:description" content="Black Friday Promo Web 2021: Listado de las mejores ofertas y promociones (tiendas, empresas, negocios personales, blogs, etc) del próximo Black Friday 2021. ¿Qué es el Black Friday? ¿Qué día se celebra el Black Friday 2021? ¿Cuándo es el Black Friday?"/>
	<meta property="og:type" content="website"/>
	<meta property="og:url" content="http://www.blackfridaypromoweb.com/es/redirected.php"/>
	<meta property="og:image" content="http://www.blackfridaypromoweb.com/img/bfpw.png"/>
	<meta property="og:site_name" content="BLACKFRIDAYPROMOWEB.COM"/>		
    <title>Black Friday Promo Web 2021</title>
	<link rel="icon" href="img/bfpw.png" type="image/png" />
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="ext/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/keyframes.css">
    <link rel="stylesheet" href="css/banner.css">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
            <a class="navbar-brand" href="index.php">BlackFridayPromoWeb</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                  <li class="nav-item active">
                    <a class="nav-link" href="instructions.html">Instrucciones<span class="sr-only">(current)</span></a>
                  </li>				
                  <li class="nav-item active">
                    <a class="nav-link" href="position.html">Tu posición<span class="sr-only">(current)</span></a>
                  </li>
                  <li class="nav-item active">
                    <a class="nav-link" href="companywinner.php">Así se verá el ganador<span class="sr-only">(current)</span></a>
                  </li>
                  <li class="nav-item active">
                    <a class="nav-link" href="companieslist.php">Listados completos<span class="sr-only">(current)</span></a>
                  </li>  
                  <li class="nav-item active">
                    <a class="nav-link" href="contact.php">@Contacto<span class="sr-only">(current)</span></a>
                  </li> 				  
                </ul>
				<a href="index.php"><img src="img/spanish.png" alt="Spanish" title="Español" width="20" height="20"></a>				
				<a href="../index.php"><img src="img/english.png" alt="English" title="English" width="20" height="20"></a>				
              </div>            
          </nav>
    </header>

    <section>
        <div class="container my_container"> 
            <div class="cont_banner_presentation">
                <div class="banner_presentation_shadow">
                    <div class="row">  
                        <div class="col-md-12">
                            <h1>Hola <?php echo $_POST['formGroupNameInput']; ?> </h1>
                            <p>Este es tu identificador BlackFridayPromoWeb <img src="img/right_arrow.png" width="25" height="25"> <?php echo $id; ?> <img src="img/left_arrow.png" width="25" height="25"><strong> Por favor, no olvides anotar este identificador</strong></p>
							<p>Has pagado: <?php echo $_POST['amountInput']; ?> Euros</p>
                            <hr />
                        </div>     
                    </div>
                </div>            
            </div>                    
        </div>
    </section>

    <script src="ext/bootstrap/js/jquery.js"></script>
    <script src="ext/bootstrap/js/bootstrap.min.js"></script>
</body>
</html>

