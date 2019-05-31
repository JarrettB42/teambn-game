<?php
	$d = opendir("./");
	$files = array();
	while($file = readdir($d)) {
		if(preg_match("#^(.*)\.gif$#",$file)) $files[] = "./".$file;
	}
	closedir($d);
	header("Content-Type: image/gif");
	header("Pragma: no-cache");
	header("Expires: -1");
	echo file_get_contents($files[rand(0,count($files)-1)]);
?>