<?php

define('HOST','localhost');
define('USUARIO','root');
define('SENHA','acmilan1988');
define('DB','escolarvot');


/*define('HOST','mysql.hostinger.com.br');
define('USUARIO','u673158254_root');
define('SENHA','tna*013cram');
define('DB','u673158254_simo');*/

//Funcao de conexao
function connect(){
  $dns = "mysql:host=".HOST.";dbname=".DB;
	try{
	  $conn = new PDO($dns, USUARIO, SENHA);	
	  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	  return $conn;
	}
	catch(PDOException $erro){
	  echo $erro->getMessage();	
	}
}
