<?Php
$dbhost_name = "fdb12.awardspace.net"; // Your host name 
$database = "u781582974_db";       // Your database name
$username = "u781582974_root";            // Your login userid 
$password ="babblu1993";            // Your password 


//////// Do not Edit below /////////
try {
$dbo = new PDO('mysql:host='.$dbhost_name.';dbname='.$database, $username, $password);
} catch (PDOException $e) {
print "Error!: " . $e->getMessage() . "<br/>";
die();
}
?> 