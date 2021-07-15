<?php
define ("DB_SERVER",  "localhost");
define ("DB_USER", "root");
define ("DB_PASS",  "");
define ("DB_NAME", "efeed");


$conn = mysqli_connect(DB_SERVER,DB_USER,DB_PASS,DB_NAME);
// check if the connection was successful
if(!$conn){
die  ("connection failed:".mysqli_connect_error());
}


//    $DB_HOST = '127.0.0.1';
// 	$DB_USER = 'root';
// 	$DB_PASS = '';
// 	$DB_NAME = 'efeed';
	
// 	try{
// 		$conn = new PDO("mysql:host={$DB_HOST};dbname={$DB_NAME}",$DB_USER,$DB_PASS);
// 		$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
// 	}
// 	catch(PDOException $e){
// 		echo $e->getMessage();
//     }

?>

