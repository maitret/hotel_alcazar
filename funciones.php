<?php 

session_start();
date_default_timezone_set('America/Mexico_City'); 
error_reporting(E_ALL); 
ini_set('display_errors', '0');
header('Content-Type: text/html; charset=ISO-8859-1');

function Valida($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
	$data = str_replace("\0", '', $data);
    return $data;
}
function Valida_utf8($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    $data = utf8_decode($data);
	$data = str_replace("\0", '', $data);
    return $data;
}
$random = substr(md5(uniqid(rand())),0,6);

$uri = $_SERVER["REQUEST_URI"];
$return = Valida($_REQUEST['return']);

/**/
$isSecure = false;
if (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] == 'on') {
$isSecure = true;
}
//elseif (!empty($_SERVER['HTTP_X_FORWARDED_PROTO']) && $_SERVER['HTTP_X_FORWARDED_PROTO'] == 'https' || !empty($_SERVER['HTTP_X_FORWARDED_SSL']) && $_SERVER['HTTP_X_FORWARDED_SSL'] == 'on')
//{
//$isSecure = true;
//}
$HTTP = $isSecure ? 'https:' : 'http:';

$server = $_SERVER["SERVER_NAME"];
$url_server = $HTTP."//".$server."";
$server_url = $HTTP."//".$server."";

$url_thumbs = $server_url."/img.php";

//$Data_Idioma = "EN";
$Data_Idioma = $_COOKIE["Idioma"]; 

if($Data_Idioma !="")
{ $get_lang = "idioma/".$Data_Idioma.".php"; }
else
{ $get_lang = "idioma/ES.php"; }
/*** Y realizamos la inclusion del archivo de idioma ***/
if(file_exists($get_lang))
{ include_once($get_lang); }
else { include_once("idioma/ES.php"); }

?>