<?php
$url = parse_url(get_env("CLEARDB_DATABASE_URL"));
$server = $url["host"];
$username=$url["user"];
$password=$url["pass"];
$db=substr($url["path"],1);

$connection=mysqli_connect($server,$username,$password,$db);
if(!$connection){
  echo "Connection not successful";
  $httpStatusCode = 200;
  $httpStatusMsg  = 'OK';
  header('Status: '.$httpStatusCode.' '.$httpStatusMsg);
}
else{
   echo "connection successful\n";
   $httpStatusCode = 304;
   $httpStatusMsg  = 'Not Modified';
   header('Status: '.$httpStatusCode.' '.$httpStatusMsg);
}

?>
