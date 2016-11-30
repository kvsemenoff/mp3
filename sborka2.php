<?php

/*  */
function d($val){
	echo "<pre>";
	print_r($val);
	echo "</pre>";
}

$fn = "index.php"; 
$f = file_get_contents($fn);
$fh = htmlspecialchars($f); 
//d($fh);

$pattern0 = "#<\?php require_once('includes/seotext.php'); ?>#ui"; 
$pattern = "#\?php require_once\('([\W\w]+?)'\);#ui"; 
preg_match_all($pattern, $fh, $rs);
d($rs); 

foreach($rs[1] as $k => $v){
	$ftmp = file_get_contents($v);
	//d($ftmp); 
	$pt = "#". "require_once\('". $v ."\)'" . "#ui"; 
	$pt2 = "#". $v . "#ui"; 
	d($pt); 
	preg_match($pt, $f, $res); 
	d($res); 
	
	die();
}


?>