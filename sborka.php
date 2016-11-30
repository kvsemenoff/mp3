<?php
  header('Content-type: text/css');
  ob_start("compress");
  //ob_start();
  function compress($buffer) {
    /* remove comments */
    $buffer = preg_replace('!/\*[^*]*\*+([^/][^*]*\*+)*/!', '', $buffer);
    /* remove tabs, spaces, newlines, etc. */
    $buffer = str_replace(array("\r
", "\r", "
", "\t", '  ', '    ', '    '), '', $buffer);
    return $buffer;
  }

	/* your css files 
	include('./css/master.css');
	include('./css/typography.css');
	include('./css/grid.css');
	include('./css/print.css');
	include('./css/handheld.css');*/

	include('./css/reset.css'); 
	include('./css/style2.css'); 
	include('./css/style3.css'); 
	include('./css/style4.css'); 
	include('./css/style5.css'); 
	include('./css/fonts.css'); 
  
  ob_end_flush();
?>