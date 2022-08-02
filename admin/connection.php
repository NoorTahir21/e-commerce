<?php
$dbname='ecommerce';
$dbuser='root';
$dbpass='';
$dbhost='localhost';
$conn=new mysqli($dbhost,$dbuser,$dbpass,$dbname);
if ($conn) {
	echo "Connection successful";
}
else {
	echo mysqli_error($conn);
}
?>