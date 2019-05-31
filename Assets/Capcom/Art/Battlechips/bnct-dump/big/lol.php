<?php
	$c = 243;
	$col = 10;
	$row = ceil($c/$col);
	$w = 64;
	$h = 56;
	
	$img = imagecreatetruecolor($w*$col,$h*$row);
	$r = 0;
	for($i = 0;$i<=$c; $i++) {
		$chip = imagecreatefromgif(sprintf('%03d',$i).'.gif');
		imagecopy($img,$chip, ($i%$col)*$w, $r*$h, 0,0,$w,$h);
		imagedestroy($chip);
		if($i%$col == $col-1) $r++;
	}
	imagepng($img,'lol.png');
?>