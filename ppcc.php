<?php
error_reporting (E_ALL ^ E_NOTICE);

$page = "http://hostname/ppclipboard.php";
$pass = "PASSWORD";

$pp = popen ("xclip -o","r");
$str = "";
while (!feof ($pp)) {
	$str .= fgets ($pp,1024);
}
pclose($pp);

$str = urlencode($str);

$curl = curl_init();
curl_setopt($curl,CURLOPT_URL,"{$page}?p={$pass}");
curl_setopt($curl,CURLOPT_POSTFIELDS,"c={$str}");
curl_exec ($curl);
curl_close ($curl);
?>
