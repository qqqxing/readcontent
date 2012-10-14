<?php

if(!isset($_GET['content'])){
	die("There is no input.\n");
}else{
	$content = $_GET['content'];
	$filename = date( "Y-m-d-H-i-s").".txt";
	print $filename."\n";
	
	$file = fopen($filename,"w");
	if(!$file){
		die("Cannot write to file.\n");
	}else{
		$result = fwrite($file, $content);
		fclose($file);
		print "Result : $result\n";
	}
}


?>