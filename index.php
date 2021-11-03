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
	<meta name="Description" content="Black Friday Promo Web 2021: List of the best offers and promotions (shops, companies, personal businesses, blogs, etc.) for the next Black Friday 2021. What is Black Friday? What day is Black Friday 2021 celebrated? When is Black Friday?">  
	<meta name="keywords" content="black, friday, 2021, promo, promos, promotions, offers"/>
	<meta property="og:title" content="Black Friday Promo Web 2021 (what day is it, when is it, promos, promotions, offers, stores, companies, personal businesses, blogs ...)"/>
	<meta property="og:description" content="Black Friday Promo Web 2021: List of the best offers and promotions (shops, companies, personal businesses, blogs, etc.) for the next Black Friday 2021. What is Black Friday? What day is Black Friday 2021 celebrated? When is Black Friday?"/>
	<meta property="og:type" content="website"/>
	<meta property="og:url" content="http://www.blackfridaypromoweb.com/index.php"/>
	<meta property="og:image" content="http://www.blackfridaypromoweb.com/img/bfpw.png"/>
	<meta property="og:site_name" content="BLACKFRIDAYPROMOWEB.COM"/>		
    <title>Black Friday 2021: the best offers and promotions added by the advertisers themselves</title>
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
                    <a class="nav-link" href="instructions.html">Instructions<span class="sr-only">(current)</span></a>
                  </li>				
                  <li class="nav-item active">
                    <a class="nav-link" href="position.html">Your position<span class="sr-only">(current)</span></a>
                  </li>
                  <li class="nav-item active">
                    <a class="nav-link" href="companywinner.php">This is how the winner will look<span class="sr-only">(current)</span></a>
                  </li>
                  <li class="nav-item active">
                    <a class="nav-link" href="companieslist.php">This is how the complete lists will look<span class="sr-only">(current)</span></a>
                  </li>  
                  <li class="nav-item active">
                    <a class="nav-link" href="contact.php">@Contact<span class="sr-only">(current)</span></a>
                  </li> 				  
                </ul>
				<a href="index.php"><img src="img/english.png" alt="English" title="English" width="20" height="20"></a>
				<a href="es/index.php"><img src="img/spanish.png" alt="Spanish" title="Español" width="20" height="20"></a>				
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
                            <p>Today is <?php echo $fechaHoy->format('Y/m/d'); ?></p>						
                            <h1>There are <?php echo $diffMonths; ?> months and <?php echo $diffDays; ?> days until Black Friday 2021</h1>
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
								<span><strong>Welcome </strong></span>                               
                                <span>to </span>
								<span><strong>Black Friday Promo Web 2021. </strong></span>
							</p>
							<p>
                                <span>The purpose of this website is to get a list of anyone who wants to promote themselves for the next Black Friday 2021, both personally and companies.</span>
                            </p>
							<p>
                                <span>With a symbolic price (from € 1, onwards), anyone can get a score to become the star promotion of Black Friday 2021.</span>
                            </p>	
							<p>
								<span>All participants and their promotions will appear in the final list that will be shown that day, <strong><a href="companieslist.php">on this same website.</a></strong></span>
                            </p>
							<p>
								<span>But the one that achieves the highest score in each category (personal and company) will appear prominently, in a <strong><a href="companywinner.php">privileged section</a></strong> for greater visibility.</span>
                            </p>							
							<p>
                            </p>
							<p>
								<span><strong>No register</strong>. <strong>No personal data</strong>. Just by filling out the simple form that you will find below.</span>
                            </p>							
							<p>
								<span>You can find the detailed operation and more information <strong><a href="instructions.html">here </a></strong><img src="img/left_arrow.png" width="25" height="25"></span>
                            </p>														
							<p>
								<span>And remember: the more times you participate, the more your score will skyrocket. <strong>Cheer up!</strong></span>
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
							<label for="formGroupBfpwIdInput">BlackFridayPromoWeb identifier, if you already have it</label>
							<input type="number" class="form-control" name="formGroupBfpwIdInput" id="formGroupBfpwIdInput" placeholder="Numeric identifier">
						  </div>					
						  <div class="form-group">
							<label for="formGroupNameInput" id="lblName" name="lblName">Your name, nickname, ...</label>
							<input type="text" class="form-control" name="formGroupNameInput" id="formGroupNameInput" placeholder="Name, nickname, ..." required>
							<div class="invalid-feedback">
							  Please, enter a valid value
							</div>						
							<small id="formGroupNameInputHelpBlock" class="form-text text-muted">
							  If you have entered a valid identifier in the previous field, you can put any value here
							</small>
						  </div>
						  <div class="form-group">
							<label for="formGroupImgInput">Web address with the logo, promotion, image ... that you want to show the world</label>
							<input type="text" class="form-control" name="formGroupImgInput" id="formGroupImgInput" placeholder="URL http:// ...">
						  </div>
						  <div class="form-group">
							<label for="formGroupLinkInput" id="lblLink" name="lblLink">Link to your website, blog, ...</label>
							<input type="text" class="form-control" name="formGroupLinkInput" id="formGroupLinkInput" placeholder="URL http:// ...">
						  </div>
						  <div class="form-group">
							<label for="formGroupLDescriptionInput" id="lblDescription" name="lblDescription">A brief description of your company, offer, promotion...</label>
							<textarea class="form-control" id="formGroupDescriptionInput" name="formGroupDescriptionInput" placeholder="Please enter your description (maximum 300 characters)" rows="7"  required maxlength="300"></textarea>
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
								Company
							  </label>
						  </div>
						  <script>
								function personalActions(object){
									lblName.innerHTML='Your name, nickname, ...'; 
									formGroupNameInput.placeholder='Name, nickname, ...';
									lblLink.innerHTML='Link to your website, blog, ...'; 
								}
								function companyActions(object){
									lblName.innerHTML='Name of your company or business'; 
									formGroupNameInput.placeholder='Company name';
									lblLink.innerHTML='Link to your business website'; 								
								}
						  </script> 
					</div>

					<div class="col-md-4" id="PayPalForm">
						<div class="paypal-form-group" id="smart-button-container">
							<div style="text-align: center"><label for="amount">Enter the amount you want to contribute </label><input name="amountInput" type="number" id="amount" value="" ><span> EUR</span></div>
							  <p id="priceLabelError" style="visibility: hidden; color:red; text-align: center;">Please, enter a valid price</p>
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
							  alert('Transaction completed by ' + details.payer.name.given_name + '!');
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
						<!-- button id="submitFormButton" type="submit" class="btn btn-primary">Submit form</button -->
						<button id="submitFormButton" type="submit" disabled="true" class="btn btn-primary">Submit form</button>
						<small id="formGroupNameInputHelpBlock" class="form-text text-muted">
						  Please, make the payment to enable the submission of the form. Thanks a lot.
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