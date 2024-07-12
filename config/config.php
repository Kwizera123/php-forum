<?php



//host
define("HOST", "localhost");

//DBNAME
define("DBNAME", "forum");

//User
define("USER", "root");

//Password
define("PASS", "root");

$conn = new PDO("mysql:host=".HOST.";dbname=".DBNAME.";",USER,PASS);
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

// if($conn == true){
//   echo "connection is a success";
// }else{
//   echo "error";
// }