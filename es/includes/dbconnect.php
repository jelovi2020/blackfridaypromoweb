<?php
function db_connect() {

    static $connection;

	// Try to connect if there are no connection established
    if(!isset($connection)) {
        // $config = parse_ini_file('../../../private/config.ini'); 	
		$config = parse_ini_file('/var/www/private/config.ini');
        $connection = mysqli_connect($config['server'],$config['user'],$config['pass'],$config['db']);
    }

    if($connection === false) {
        return mysqli_connect_error(); 
    }
    return $connection;
}

// DB connection
$connection = db_connect();

// Review connection
if ($connection->connect_error) {
    die("Connection failed: " . $connection->connect_error);
}
?>