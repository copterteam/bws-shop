<?
$env = getenv('APPLICATION_ENV') ? getenv('APPLICATION_ENV') : 'prod';

if( $env !== 'dev' ) {
	
    $db_user = 'u61668';
    $db_pass = 'tip9tnxyw4';
    $db_name = 'u61668_bws';

}else{
	
	$db_user = 'root';
    $db_pass = '';
    $db_name = 'bws';
	
	
}	

  try{ $link = new PDO("mysql:host=localhost;dbname=".$db_name,$db_user,$db_pass); } 

  catch (Exception $e) { die("MySQL NOT connected!: " . $e->getMessage()); }

  $link->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

  $link->query("SET NAMES 'utf8'");
  
  
  

  
  ?>