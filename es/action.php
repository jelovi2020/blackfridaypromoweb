<?php
	// Restore and save html session data
	session_start();
	$diffDays=$_SESSION["diffDays"];
	$diffMonths=$_SESSION["diffMonths"];
	$_SESSION["post"]=$_POST;
	header("refresh:0;url=redirected.php");
	
	// Init DB
	require_once('./includes/dbconnect.php');
	
	// Determine which table to use
	$table='users';
	$company=0;	
	if (!is_null($_POST['exampleRadios']) && !empty($_POST['exampleRadios']) && $_POST['exampleRadios']=="empresa") {
		$table='companies';
		$company=1;
	}

	// Check if an ID has been provided (user exists)
	$exists=false;
	if (!is_null($_POST['formGroupBfpwIdInput']) && !empty($_POST['formGroupBfpwIdInput'])) {
		$id=$_POST['formGroupBfpwIdInput'];
		$exists=true;
	}
	else {		
		// Random value with microsec seed
		function make_seed()
		{
			list($usec, $sec) = explode(' ', microtime());
			return (float) $sec + ((float) $usec * 100000);
		}
		srand(make_seed());
		$id = rand();		
	}
	$_SESSION["id"]=$id;

	// Check if name has been provided (for non-existing users only)
	if (!$exists) {
		if (!is_null($_POST['formGroupNameInput']) && !empty($_POST['formGroupNameInput']) ) {
			$name = $_POST['formGroupNameInput'];
		}
		else {
			echo '<script language="javascript">alert("Error: name is null");window.location.href="index.php"</script>';
			exit();
		}
	}
	
	// Get current date and time
	$actualDate=new DateTime('NOW');

	// Calculate total days left until BF2021 date
	if ($diffMonths==9) { $totalDaysLeft=273; }
	elseif ($diffMonths==8) { $totalDaysLeft=242; }
	elseif ($diffMonths==7) { $totalDaysLeft=212; }
	elseif ($diffMonths==6) { $totalDaysLeft=181; }
	elseif ($diffMonths==5) { $totalDaysLeft=150; }
	elseif ($diffMonths==4) { $totalDaysLeft=120; }
	elseif ($diffMonths==3) { $totalDaysLeft=89; }
	elseif ($diffMonths==2) { $totalDaysLeft=59; }
	elseif ($diffMonths==1) { $totalDaysLeft=28; }
	$totalDaysLeft = $totalDaysLeft + $diffDays;
	
	// Update values on DB for existing users
	if ($exists) {	
		$lastAccess=$actualDate->format('Y-m-d\TH:i:s.u');
		
		$table = "users";	
		// Create SQL sentence to get this user from DB
		$sqlSentence = "SELECT * from `" . $table . "` WHERE `id`= " . $id; 
		if (!$sqlResult = $connection->query($sqlSentence)) {
			echo "Error: Executing SQL sentence: \n";
			echo "Query: " . $sqlSentence . "\n";
			echo "Errno: " . $connection->errno . "\n";
			echo "Error: " . $connection->error . "\n";
			exit();
		}
		
		// Try on companies table
		if ($sqlResult->num_rows === 0) {
			$table = "companies";
		
			// Create SQL sentence to get this company from DB
			$sqlSentence = "SELECT * from `" . $table . "` WHERE `id`= " . $id; 
			if (!$sqlResult = $connection->query($sqlSentence)) {
				echo "Error: Executing SQL sentence: \n";
				echo "Query: " . $sqlSentence . "\n";
				echo "Errno: " . $connection->errno . "\n";
				echo "Error: " . $connection->error . "\n";
				exit();
			}
			
			if ($sqlResult->num_rows === 0) {
				echo '<script language="javascript">alert("Error: id '.$id.' does not exist");window.location.href="index.php"</script>';
				$sqlResult->free();
				exit();
			}	
		}
		
		$user = $sqlResult->fetch_assoc();		
		// $points = $user['points'] + $_POST['amountInput']*(($diffMonths*30)+($diffDays));
		$points = $user['points'] + $_POST['amountInput']*$totalDaysLeft;
		$numberOfAccesses = $user['numberOfAccesses'] + 1;
		$totalPayments = $user['totalPayments'] + $_POST['amountInput'];	
		$name=$user['name'];
		
		// it is not allowed to modify the name in this version
		/*
		if (!is_null($_POST['formGroupNameInput']) && !empty($_POST['formGroupNameInput']) ) {
			$name = $_POST['formGroupNameInput'];
		}
		else {
			$name=$user['name'];
		}
		*/
		
		if (!is_null($_POST['formGroupImgInput']) && !empty($_POST['formGroupImgInput']) ) {
			$image = $_POST['formGroupImgInput'];
		}
		else {
			$image=$user['image'];
		}	

		if (!is_null($_POST['formGroupLinkInput']) && !empty($_POST['formGroupLinkInput']) ) {
			$link = $_POST['formGroupLinkInput'];
		}
		else {
			$link=$user['link'];
		}	
		
		if (!is_null($_POST['formGroupDescriptionInput']) && !empty($_POST['formGroupDescriptionInput']) ) {
			$description = $_POST['formGroupDescriptionInput'];
		}
		else {
			$description=$user['description'];
		}		
		
		$sqlResult->free();
		
		// Create the SQL sentence (UPDATE into DB)
		$sqlSentence = "UPDATE `" . $table . "` SET `name`='" . $name 
			. "', `image`='" . $image . "', `link`='" . $link . "', `points`=" . $points . ", `numberOfAccesses`=" . $numberOfAccesses
			. ", `totalPayments`=" . $totalPayments . ", `lastAccess`='" . $lastAccess . "', `description`='" . $description
			. "' WHERE `id`= " . $_POST['formGroupBfpwIdInput']; 
		if (!$sqlResult = $connection->query($sqlSentence)) {
			echo "Error: Executing SQL sentence: \n";
			echo "Query: " . $sqlSentence . "\n";
			echo "Errno: " . $connection->errno . "\n";
			echo "Error: " . $connection->error . "\n";
			exit();
		}		
	}
	// Store values on DB for new users
	else {
		$firstAccess=$actualDate->format('Y-m-d\TH:i:s.u');
		$lastAccess=$actualDate->format('Y-m-d\TH:i:s.u');
		$numberOfAccesses=1;
		$totalPayments=$_POST['amountInput'];
		
		if (!is_null($_POST['formGroupImgInput']) && !empty($_POST['formGroupImgInput']) ) {
			$image = $_POST['formGroupImgInput'];
		}
		else {
			$image=null;
		}	

		if (!is_null($_POST['formGroupLinkInput']) && !empty($_POST['formGroupLinkInput']) ) {
			$link = $_POST['formGroupLinkInput'];
		}
		else {
			$link=null;
		}	

		if (!is_null($_POST['formGroupDescriptionInput']) && !empty($_POST['formGroupDescriptionInput']) ) {
			$description = $_POST['formGroupDescriptionInput'];
		}
		else {
			$description=null;
		}			
		
		// $points = $_POST['amountInput']*(($diffMonths*30)+($diffDays));
		$points = $_POST['amountInput']*$totalDaysLeft;
		
		// Create the SQL sentence (INSERT into DB)
		$sqlSentence = "INSERT INTO `" . $table . "` (`id`, `name`, `image`, `link`, `company`, `points`, `numberOfAccesses`, `firstAccess`, `lastAccess`, `totalPayments`, `description`) VALUES (" 
			. $id . ", '" . $_POST['formGroupNameInput'] ."', '" . $_POST['formGroupImgInput'] ."', '" . $_POST['formGroupLinkInput'] ."', " . $company .", " . $points .", " . $numberOfAccesses .", '"
			. $firstAccess ."', '" . $lastAccess ."', " . $totalPayments . ", '" . $description . "')"; 
		
		if (!$sqlResult = $connection->query($sqlSentence)) {
			echo "Error: Executing SQL sentence: \n";
			echo "Query: " . $sqlSentence . "\n";
			echo "Errno: " . $connection->errno . "\n";
			echo "Error: " . $connection->error . "\n";
			exit();
		}		
	}
?> 






