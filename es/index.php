<?php
session_start();
?>

<!DOCTYPE html>
<html>

<head>
	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-188037078-1"></script>
	<script>
	  window.dataLayer = window.dataLayer || [];
	  function gtag(){dataLayer.push(arguments);}
	  gtag('js', new Date());

	  gtag('config', 'UA-188037078-1');
	</script>
	  <!-- Google Analytics -->
	  <script>
		(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		})(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

		ga('create', 'UA-188037078-1', 'auto');
		ga('send', 'pageview');
	  </script>
	  <!-- End Google Analytics -->	

    <meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie-edge">	
	<meta name="Description" content="Black Friday Promo Web 2021: Listado de las mejores ofertas y promociones, añadidas por los propios anunciantes (tiendas, empresas, negocios personales, blogs, etc) del próximo Black Friday 2021. ¿Qué es el Black Friday? ¿Qué día se celebra el Black Friday 2021? ¿Cuándo es el Black Friday?">  
	<meta name="keywords" content="black, friday, 2021, promo, promos, promociones, ofertas"/>
	<meta property="og:title" content="Black Friday Promo Web 2021 (qué día es, cuándo es, promos, promociones, ofertas, tiendas, empresas, negocios personales, blogs...)"/>
	<meta property="og:description" content="Black Friday Promo Web 2021: Listado de las mejores ofertas y promociones, añadidas por los propios anunciantes (tiendas, empresas, negocios personales, blogs, etc) del próximo Black Friday 2021. ¿Qué es el Black Friday? ¿Qué día se celebra el Black Friday 2021? ¿Cuándo es el Black Friday?"/>
	<meta property="og:type" content="website"/>
	<meta property="og:url" content="http://www.blackfridaypromoweb.com/es/index.php"/>
	<meta property="og:image" content="http://www.blackfridaypromoweb.com/img/bfpw.png"/>
	<meta property="og:site_name" content="BLACKFRIDAYPROMOWEB.COM"/>		
    <title>Black Friday 2021: las mejores ofertas y promociones añadidas por los propios anunciantes</title>
	<link rel="icon" href="img/bfpw.png" type="image/png" />
	<link rel="alternate" hreflang="en-gb" href="http://www.blackfridaypromoweb.com/index.php" />
	<link rel="alternate" hreflang="en-us" href="http://www.blackfridaypromoweb.com/index.php" />
	<link rel="alternate" hreflang="en" href="http://www.blackfridaypromoweb.com/index.php" />
	<link rel="alternate" hreflang="es-es" href="http://www.blackfridaypromoweb.com/es/index.php" />
	<link rel="alternate" hreflang="es" href="http://www.blackfridaypromoweb.com/es/index.php" />
	<link rel="alternate" hreflang="x-default" href="http://www.blackfridaypromoweb.com/index.html" />		
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

	<?php
		$df='!Y-m-d';
		$fechaFinal  = DateTime::createFromFormat($df,'2021-11-26');
		$fechaHoy=new DateTime('today');
		$diffDays = $fechaFinal->diff($fechaHoy)->d;       
		$diffMonths = $fechaFinal->diff($fechaHoy)->m;       
		$msgInfo = $fechaFinal == $fechaHoy ? "Terminado": "Faltan $diffDays días";
		$_SESSION["diffDays"]=$diffDays;
		$_SESSION["diffMonths"]=$diffMonths;
	?>
	
    <section>
        <div class="container my_container"> 
            <div class="cont_banner_presentation">
                <div class="banner_presentation_shadow">
                    <div class="row">  
                        <div class="col-md-12">
                            <p>Hoy es <?php echo $fechaHoy->format('d/m/Y'); ?></p>						
                            <h1>Faltan <?php echo $diffMonths; ?> meses y <?php echo $diffDays; ?> días para el Black Friday 2021</h1>
                        </div>     
                    </div>
                </div>            
            </div>                    
        </div>
    </section>

    <section>      
        <div class="container my_container"> 
            <div class="row">  
                <div class="col-md-12">
                    <div class="box">
                        <div class="box_title">
                            <img src="img/bfpw.png" alt="INTRO">
                        </div>
                        <div>
                            <p> 
								<span><strong>Bienvenido </strong></span>                               
                                <span>a </span>
								<span><strong>Black Friday Promo Web 2021. </strong></span>
							</p>
							<p>
                                <span>El propósito de esta web es conseguir un listado de todo aquel que desee promocionarse de cara al próximo Black Friday 2021, tanto a título personal, como empresas.</span>
                            </p>
							<p>
                                <span>Por un precio simbólico (a partir de 1€, en adelante) cualquiera puede conseguir puntuación de cara a convertirse en la promoción estrella del Black Friday 2021.</span>
                            </p>	
							<p>
								<span>Todos los participantes y sus promociones aparecerán en el listado definitivo que se mostrará ese día, <strong><a href="companieslist.php">en esta misma web.</a></strong></span>
                            </p>
							<p>
								<span>Pero aquel que logre la mayor puntuación en cada categoría (personal o empresa) aparecerá destacado, en un <strong><a href="companywinner.php">apartado privilegiado</a></strong> para su mayor visibilidad.</span>
                            </p>							
							<p>
                            </p>
							<p>
								<span><strong>Sin registros</strong>. <strong>Sin datos personales</strong>. Simplemente rellenando el sencillo formulario que encontrarás a continuación.</span>
                            </p>							
							<p>
								<span>Puedes encontrar el funcionamiento detallado y más información <strong><a href="instructions.html">aquí </a></strong><img src="img/left_arrow.png" width="25" height="25"></span>
                            </p>														
							<p>
								<span>Y, recuerda: cuantas más veces participes, más se disparará tu puntuación. <strong>¡Anímate!</strong></span>
                            </p>																					
                        </div>
                    </div>  
                </div>               
            </div>
        </div>
    </section>

    <section> 
	    <div class="container my_form_container"> 
			<div class="row">  				
					<div class="col-md-4" id="formulario">
				<form method="POST" action="action.php" class="needs-validation" id="formulario" novalidate>				
						  <div class="form-group">
							<label for="formGroupBfpwIdInput">Identificador blackfridaypromoweb, si ya lo tienes</label>
							<input type="number" class="form-control" name="formGroupBfpwIdInput" id="formGroupBfpwIdInput" placeholder="Identificador numérico">
						  </div>					
						  <div class="form-group">
							<label for="formGroupNameInput" id="lblName" name="lblName">Tu nombre, apodo, ...</label>
							<input type="text" class="form-control" name="formGroupNameInput" id="formGroupNameInput" placeholder="Nombre, apodo, ..." required>
							<div class="invalid-feedback">
							  Por favor, introduce algún valor
							</div>						
							<small id="formGroupNameInputHelpBlock" class="form-text text-muted">
							  Si has introducido un identificador válido en el campo anterior, puedes poner cualquier valor aquí
							</small>
						  </div>
						  <div class="form-group">
							<label for="formGroupImgInput">Dirección web con el logo, promoción, imagen... que quieras mostrar al mundo</label>
							<input type="text" class="form-control" name="formGroupImgInput" id="formGroupImgInput" placeholder="URL http:// ...">
						  </div>
						  <div class="form-group">
							<label for="formGroupLinkInput" id="lblLink" name="lblLink">Enlace a tu web, blog, ...</label>
							<input type="text" class="form-control" name="formGroupLinkInput" id="formGroupLinkInput" placeholder="URL http:// ...">
						  </div>
						  <div class="form-group">
							<label for="formGroupLDescriptionInput" id="lblDescription" name="lblDescription">Breve descripción de tu empresa, oferta, promoción...</label>
							<textarea class="form-control" id="formGroupDescriptionInput" name="formGroupDescriptionInput" placeholder="Escribe aquí tu descripción (máximo 300 caracteres)" rows="7"  required maxlength="300"></textarea>
						  </div>						  
						  <div class="form-check">
							  <input class="form-check-input" type="radio" name="exampleRadios" id="personalRadios" value="personal" onclick="personalActions(this)" checked>
							  <label class="form-check-label" for="personalRadios">
								Personal
							  </label>
						  </div>
							<div class="form-check">
							  <input class="form-check-input" type="radio" name="exampleRadios" id="companyRadios" value="empresa" onclick="companyActions(this)">
							  <label class="form-check-label" for="companyRadios">
								Empresa
							  </label>
						  </div>
						  <script>
								function personalActions(object){
									lblName.innerHTML='Tu nombre, apodo, ...'; 
									formGroupNameInput.placeholder='Nombre, apodo, ...';
									lblLink.innerHTML='Enlace a tu web, blog, ...'; 
								}
								function companyActions(object){
									lblName.innerHTML='Nombre de tu empresa o negocio'; 
									formGroupNameInput.placeholder='Nombre empresa';
									lblLink.innerHTML='Enlace a la web de tu empresa'; 								
								}
						  </script> 
					</div>

					<div class="col-md-4" id="PayPalForm">
						<div class="paypal-form-group" id="smart-button-container">
							<div style="text-align: center"><label for="amount">Introduce el importe que quieres aportar </label><input name="amountInput" type="number" id="amount" value="" ><span> EUR</span></div>
							  <p id="priceLabelError" style="visibility: hidden; color:red; text-align: center;">Por favor, introduce un precio válido</p>
							<div style="text-align: center; margin-top: 0.625rem;" id="paypal-button-container"></div>
						</div>
					</div>				  
					<script src="https://www.paypal.com/sdk/js?client-id=AXnJc0z0fwh6E1H1IDhoVzNmhfdSSWkSkCVHiH25hZF5P_4ysGKvniLB_ralQrlJ5fdd75lQS91-OpAA&currency=EUR" data-sdk-integration-source="button-factory"></script>
					<script>
					  function initPayPalButton() {
						var amount = document.querySelector('#smart-button-container #amount');
						var priceError = document.querySelector('#smart-button-container #priceLabelError');

						var elArr = [amount];

						var purchase_units = [];
						purchase_units[0] = {};
						purchase_units[0].amount = {};

						function validate(event) {
						  return event.value.length > 0;
						}

						paypal.Buttons({
						  style: {
							color: 'silver',
							shape: 'rect',
							label: 'paypal',
							layout: 'vertical',
							
						  },

						  onInit: function (data, actions) {
							actions.disable();

							elArr.forEach(function (item) {
							  item.addEventListener('keyup', function (event) {
								var result = elArr.every(validate);
								if (result) {
								  actions.enable();
								} else {
								  actions.disable();
								}
							  });
							});
						  },

						  onClick: function () {

							if (amount.value.length < 1) {
							  priceError.style.visibility = "visible";
							} else {
							  priceError.style.visibility = "hidden";
							}

							purchase_units[0].amount.value = amount.value;
						  },

						  createOrder: function (data, actions) {
							return actions.order.create({
							  purchase_units: purchase_units,
							});
						  },

						  onApprove: function (data, actions) {
							return actions.order.capture().then(function (details) {
							  alert('Pago realizado por ' + details.payer.name.given_name + '!');
							  $('#submitFormButton').attr("disabled", false);
							});
						  },

						  onError: function (err) {
							console.log(err);
						  }
						}).render('#paypal-button-container');
					  }
					  initPayPalButton();
					</script>
																		 
					<div class="submit-button">
						<!--button id="submitFormButton" type="submit" class="btn btn-primary">Enviar formulario</button -->
						<button id="submitFormButton" type="submit" disabled="true" class="btn btn-primary">Enviar formulario</button>
						<small id="formGroupNameInputHelpBlock" class="form-text text-muted">
						  Por favor, realiza el pago para habilitar el envío del formulario. Muchas gracias.
						</small>						
					</div>
				</form>					
				<script>
					// Example starter JavaScript for disabling form submissions if there are invalid fields
					(function() {
					  'use strict';
					  window.addEventListener('load', function() {
						// Fetch all the forms we want to apply custom Bootstrap validation styles to
						var forms = document.getElementsByClassName('needs-validation');
						// Loop over them and prevent submission
						var validation = Array.prototype.filter.call(forms, function(form) {
						  form.addEventListener('submit', function(event) {
							if (form.checkValidity() === false) {
							  event.preventDefault();
							  event.stopPropagation();
							}
							form.classList.add('was-validated');
						  }, false);
						});
					  }, false);
					})();
				</script>
			</div>					
        </div>				
    </section>

    <script src="ext/bootstrap/js/jquery.js"></script>
    <script src="ext/bootstrap/js/bootstrap.min.js"></script>
</body>
</html>