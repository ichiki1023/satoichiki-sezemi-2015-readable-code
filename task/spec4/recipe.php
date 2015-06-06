<?php
	$file = fopen($argv[1], "r");

	/*1行ずつファイルを読み込み出力する*/
	if($file){
		while($line = fgets($file)){
			echo $line;
		}
		echo "\n";
	}
