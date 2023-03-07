<?php




$dbhost="localhost";
$dbuser="u406176785_sparepartsuser";
$dbpass="v@PQfI&7";
$db="u406176785_spareparts";


// $dbhost="localhost";
// $dbuser="root";
// $dbpass="";
// $db = "spareparts";

$conn=new mysqli($dbhost,$dbuser,$dbpass,$db);

if($conn->connect_error)
{
	echo "Failed to connect";
	
}


?>