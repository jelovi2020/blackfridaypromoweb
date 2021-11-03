<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie-edge">	
	<meta name="Description" content="Black Friday Promo Web 2021: List of the best offers and promotions (shops, companies, personal businesses, blogs, etc.) for the next Black Friday 2021. What is Black Friday? What day is Black Friday 2021 celebrated? When is Black Friday?">  
	<meta name="keywords" content="black, friday, 2021, promo, promos, promotions, offers"/>
	<meta property="og:title" content="Black Friday Promo Web 2021 (what day is it, when is it, promos, promotions, offers, stores, companies, personal businesses, blogs ...)"/>
	<meta property="og:description" content="Black Friday Promo Web 2021: List of the best offers and promotions (shops, companies, personal businesses, blogs, etc.) for the next Black Friday 2021. What is Black Friday? What day is Black Friday 2021 celebrated? When is Black Friday?"/>
	<meta property="og:type" content="website"/>
	<meta property="og:url" content="http://www.blackfridaypromoweb.com/contact.php"/>
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

    <section>
        <div class="container my_container"> 
            <div class="cont_banner_presentation">
                <div class="banner_presentation_shadow">
                    <div class="row">  
                        <div class="col-md-12">
                            <h1>Contact us</h1>
                        </div>     
                    </div>
                </div>            
            </div>                    
        </div>
    </section>
	
	<?php		
	use PHPMailer\PHPMailer\PHPMailer;
	use PHPMailer\PHPMailer\Exception;
	
    if (!isset($_POST['submit'])) 
	{  
	?>	
	
    <section> 	
		<div class="container my_container">
			<div class="row">
				<div class="col-md-12">
					<div class="well well-sm">
						<form class="form-horizontal" action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="post">
							<fieldset>
								<legend class="text-center header">From here you can send us any incident, comment, suggestion, improvement ...</legend>
								<div class="form-group">
										<input id="fname" name="fname" type="text" placeholder="Name (optional)" class="form-control">
								</div>
								<div class="form-group">
										<input id="bfpwid" name="bfpwid" type="number" placeholder="BlackFridayPromoWeb identifier  (if you have it)" class="form-control">
								</div>
								<div class="form-group">
										<input id="email" name="email" type="email" placeholder="Email Address (optional)" class="form-control">
								</div>
								<div class="form-group">
										<textarea class="form-control" id="message" name="message" placeholder="Please enter your massage for us here (required)" rows="7"  required maxlength="2000"></textarea>
								</div>
								<div class="form-group">
									<div class="col-md-12 text-center">
										<button type="submit" name="submit" class="btn btn-primary btn-lg">Submit</button>
									</div>
								</div>
							</fieldset>
						</form>
					</div>
				</div>
			</div>
		</div>
	</section>
	<?php
	}
	else   
	{  			
		require '/root/vendor/autoload.php';
		
		// $smtpConfig = parse_ini_file('../../private/smtpConfig.ini'); 	
		$smtpConfig = parse_ini_file('/var/www/private/smtpConfig.ini');

		$sender = $smtpConfig['sender'];
		if (!is_null($_POST['fname']) && !empty($_POST['fname'])) {
			$senderName=$_POST['fname'];
		}
		else {
			$senderName = 'INFO BFPW';
		}		
		$recipient = $smtpConfig['recipient'];
		$usernameSmtp = $smtpConfig['usernameSmtp'];
		$passwordSmtp = $smtpConfig['passwordSmtp'];

		// Specify a configuration set. If you do not want to use a configuration
		// set, comment or remove the next line.
		// $configurationSet = 'ConfigSet';

		// If you're using Amazon SES in a region other than US West (Oregon),
		// replace email-smtp.us-west-2.amazonaws.com with the Amazon SES SMTP
		// endpoint in the appropriate region.
		$host = $smtpConfig['host'];
		$port = $smtpConfig['port'];

		// The subject line of the email
		if (!is_null($_POST['bfpwid']) && !empty($_POST['bfpwid'])) {
			$subject='Suggestions form, ' . $_POST['bfpwid'];
		}
		else {
			$subject = 'Suggestions form';
		}		

		// The plain-text body of the email			
		$bodyText = "From: " . $_POST['fname'] . "\r\n";
		$bodyText .= "Email: " . $_POST['email'] . "\r\n";
		$bodyText .= "ID: " . $_POST['bfpwid'] . "\r\n";
		$bodyText .= "\r\n";
		$bodyText .= $_POST['message'];
		$bodyText .= "\r\n";			

		// The HTML-formatted body of the email
		$bodyHtml = '<h1>Email from Suggestions Web Form</h1>';
		$bodyHtml .= '<p>From: ' . $_POST['fname'] . ' </p>';
		$bodyHtml .= '<p>Email: ' . $_POST['email'] . ' </p>';
		$bodyHtml .= '<p>ID: ' . $_POST['bfpwid'] . ' </p>';
		$bodyHtml .= '<p></p>';
		$bodyHtml .= '<p>' . $_POST['message'] . ' </p>';
		$bodyHtml .= '<p></p>';
		
		

		$mail = new PHPMailer(true);

		try {
			// Specify the SMTP settings.
			$mail->isSMTP();
			if (!is_null($_POST['email']) && !empty($_POST['email'])) {
				$mail->addReplyTo($_POST['email']);
			}		
			$mail->setFrom($sender, $senderName);
			$mail->Username   = $usernameSmtp;
			$mail->Password   = $passwordSmtp;
			$mail->Host       = $host;
			$mail->Port       = $port;
			$mail->SMTPAuth   = true;
			$mail->SMTPSecure = 'tls';
			// $mail->addCustomHeader('X-SES-CONFIGURATION-SET', $configurationSet);

			// Specify the message recipients.
			$mail->addAddress($recipient);
			// You can also add CC, BCC, and additional To recipients here.

			// Specify the content of the message.
			$mail->isHTML(true);
			$mail->Subject    = $subject;
			$mail->Body       = $bodyHtml;
			$mail->AltBody    = $bodyText;
			$mail->Send();
			echo "<center><h2>Your comments have been sent successfully. Thanks a lot.</h2></center>", PHP_EOL;
		} catch (phpmailerException $e) {
			echo "An error occurred. {$e->errorMessage()}", PHP_EOL; //Catch errors from PHPMailer.
		} catch (Exception $e) {
			echo "Email not sent. {$mail->ErrorInfo}", PHP_EOL; //Catch errors from Amazon SES.
		}
    }	
	?>	
	

    <script src="ext/bootstrap/js/jquery.js"></script>
    <script src="ext/bootstrap/js/bootstrap.min.js"></script>
</body>
</html>		