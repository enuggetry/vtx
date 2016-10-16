<?php

	$txt = $_GET['tx'];	// text string
	$hstr = $_GET['h'];	// height
	$h = intval($hstr);
	
	$img = imagecreatetruecolor($h,20);
	imagesavealpha($img, true);
	$bkg = imagecolorallocatealpha($img, 0, 0, 0, 127);
	imagefill($img, 0, 0, $bkg);

	$txtclr = imagecolorallocate($img, 0, 0, 255);
	imagestring($img, 5, 0, 0, $txt, $txtclr);
	$r_img = imagerotate($img, 90, $bkg,1);
	imagealphablending($r_img,false);
	imagesavealpha($r_img,true);

	header('Content-type: image/png');
	imagepng($r_img);
	imagedestroy( $img );	
	imagedestroy( $r_img );	
	
?>