<?php 
function clean($str)
{
	$var = strip_tags(addslashes(stripslashes(htmlentities($str))));
	return $var;
}

?>