<?php
	$file = fopen($argv[1], "r");

	/*1行ずつファイルを読み込み出力する*/
	if($file){
		$count_id = 0; //idを割り振るためのカウント
		while($line = fgets($file)){
			$count_id++;
			echo $count_id.": ".$line;
		}
		echo "\n";
	}
