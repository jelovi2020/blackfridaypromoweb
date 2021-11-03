<?php
// Init DB
require_once('./includes/dbconnect.php');
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
	<meta property="og:url" content="http://www.blackfridaypromoweb.com/es/companieslist.php"/>
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
							<h1>GANADOR en categoría Empresas</h1>						
                            <p>Enhorabuena a nuestra mejor promoción del Black Friday 2021</p>						                            
                        </div>     
                    </div>
                </div>            
            </div>
			<div class="lists-button">			
				<input type="button" value="Cambia al ganador de la categoría Personal" onclick="$(location).attr('href','personalwinner.php');" />
			</div>
        </div>
    </section>
	
	<?php
		// $table = "companies";
		$table = "companiestemp";
		
		// Create SQL sentence to get current data from DB
		$sqlSentence = "select * from `" . $table . "` order by `points` desc, `firstAccess` asc";
		if (!$sqlResult = $connection->query($sqlSentence)) {
			echo "Error: Executing SQL sentence: \n";
			echo "Query: " . $sqlSentence . "\n";
			echo "Errno: " . $connection->errno . "\n";
			echo "Error: " . $connection->error . "\n";
			exit();
		}
		
		if ($sqlResult->num_rows === 0) {
			echo '<script language="javascript">alert("Error: DB empty ¿?");window.location.href="index.php"</script>';
			$sqlResult->free();
			exit();
		}
		
		$total = $sqlResult->num_rows;
		$i=1;
		while ($user = @mysqli_fetch_array($sqlResult)) {
			$usersList[] = array('id' => $user['id'], 'name' => $user['name'], 'points' => $user['points'], 'image' => $user['image'], 'link' => $user['link'], 'description' => $user['description']);
			break;
		}
		
		$sqlResult->free();
	?>

    <section>      
        <div class="container my_container"> 
            <div class="row">  
				<?php						
				echo '
						<div class="box">
							<div class="box_title">
								<img src="img/stars.png" alt="WINNER">
							</div>
							<div>
								<p>
									<center>
										<span>' . $usersList[0]['name'] . '</span>
									</center>
								</p>		
				', PHP_EOL;
				
				if (!is_null($usersList[0]['image']) && !empty($usersList[0]['image']) && !is_null($usersList[0]['link']) && !empty($usersList[0]['link'])) {
					echo '
								<br>
								<p> 
									<a href="' . $usersList[0]['link'] . ' " target="_blank">
										<center>
											<img src="' . $usersList[0]['image'] . '" alt="Image" width="300" height="300" style="border:0px solid black">
										</center>
									</a>
								</p>						
					', PHP_EOL;
				} elseif (!is_null($usersList[0]['image']) && !empty($usersList[0]['image'])) {
					echo '						
								<br>
								<p> 
									<center>
										<img src="' . $usersList[0]['image'] . '" alt="Image" width="300" height="300" style="border:0px solid black">
									</center>
								</p>	
					', PHP_EOL;									
				}
				
				if (!is_null($usersList[0]['description']) && !empty($usersList[0]['description'])) {
					echo '
								<br>
								<p> 
									<center>
										<span>' . $usersList[0]['description'] . '</span>
									</center>
								</p>						
					', PHP_EOL;
				}					
				
				if (!is_null($usersList[0]['link']) && !empty($usersList[0]['link'])) {
					echo '
								<br>
								<p> 
									<span>
										<center>
											<img src="img/right_arrow.png" width="25" height="25">
												<strong><a href="' . $usersList[0]['link'] . '" target="_blank"> Visite aquí su web </a></strong>
											<img src="img/left_arrow.png" width="25" height="25">
										</center>
									</span>
								</p>						
					', PHP_EOL;
				}																
				
				echo '		
								<p> 
									<sub>Puntos: ' . $usersList[0]['points'] . '</sub>
								</p>
							</div>
						</div>  
				', PHP_EOL;
				?>
            </div>
        </div>		
    </section>							

    <script src="ext/bootstrap/js/jquery.js"></script>
    <script src="ext/bootstrap/js/bootstrap.min.js"></script>
</body>
</html>
