#src/mysql.php
<?php
$hostname	= "mysql";
$dbname		= "helloworld";
$username	= "helloworld";
$password	= "helloworld";

try {

	$conn = new PDO( "mysql:host=$hostname;dbname=$dbname", $username, $password );

	// Configure PDO error mode
	$conn->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );

	echo "<br />Connected successfully";
}
catch( PDOException $e ) {

	echo "<br />Failed to connect: " . $e->getMessage();
}

// Perform database operations

// Close the connection
$conn = null;