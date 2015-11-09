<?Php
$dbhost_name = "localhost"; // Your host name 
$database = "maristcollege";       // Your database name
$username = "root";            // Your login userid 
$password = "";            // Your password 


//////// Do not Edit below /////////
try {
$dbo = new PDO('mysql:host='.$dbhost_name.';dbname='.$database, $username, $password);
} catch (PDOException $e) {
print "Error!: " . $e->getMessage() . "<br/>";
die();
}
?> 