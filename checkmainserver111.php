<?php
function urltest( $url ) {
  $timeout = 1;
  $ch = curl_init();
  curl_setopt ( $ch, CURLOPT_URL, $url );
  curl_setopt ( $ch, CURLOPT_RETURNTRANSFER, 1 );
  curl_setopt ( $ch, CURLOPT_TIMEOUT, $timeout );
  $http_respond = curl_exec($ch);
  $http_respond = trim( strip_tags( $http_respond ) );
  $http_code = curl_getinfo( $ch, CURLINFO_HTTP_CODE );
  if ( ( $http_code == "200" ) || ( $http_code == "302" ) ) 
	{
	return true;
	} 
	else 
	{
		return false;
	}
		curl_close( $ch );
	}
 
$website = "http://117.6.86.51/mlnd/tinhcuoc/index.php";
if( !urltest( $website ) ) 
{
    $main = 0;
    include ($_SERVER['DOCUMENT_ROOT'].'/pagemanager/logaccess.php');
	header("location:index.php");
}
else
{
    $main = 1;
    include ($_SERVER['DOCUMENT_ROOT'].'/pagemanager/logaccess.php');
	header("location:http://117.6.86.51/mlnd/tinhcuoc/index.php");
}
?>