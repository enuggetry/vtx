<?php

	$txt = $_GET['tx'];	// text string
	
	// Establish image factors:
	//$text = 'Sample space';
	$font_size = 12; // Font size is in pixels.
	$font_file = './fonts/DroidSans.ttf'; // This is the path to your font file.

	// Retrieve bounding box:
	$type_space = imagettfbbox($font_size, 0, $font_file, $txt);

	// Determine image width and height, 10 pixels are added for 5 pixels padding:
	$img_w = abs($type_space[4] - $type_space[0]) + 10;
	$img_h = abs($type_space[5] - $type_space[1]) + 10;
	
	$x = 5; // Padding of 5 pixels.
	$y = $img_h - 5; // So that the text is vertically centered.
	
	// replace _ with space
	$txt = str_replace("_"," ",$txt);
	
	// prepare transparent canvas
	$img = imagecreatetruecolor($img_w,$img_h);
	imagesavealpha($img, true);
	$bkg = imagecolorallocatealpha($img, 0, 0, 0, 127);
	imagefill($img, 0, 0, $bkg);
	
	// paint text
	$txtclr = imagecolorallocate($img, 0, 0, 255);
	//imagestring($img, 5, 5, 0, $txt, $txtclr);
	imagettftext($img, $font_size, 0, $x, $y, $tx_color, $font_file, $txt);	
        
	// rotate image
	$r_img = imagerotate($img, 90, $bkg,1);
	imagealphablending($r_img,false);
	imagesavealpha($r_img,true);

	header('Content-type: image/png');
	imagepng($r_img);
	imagedestroy( $img );	
	imagedestroy( $r_img );	
	
?>