<?php
	$recipe_array = array();
	$file_path = $argv[1];

	$file = fopen($file_path, "r");

	/*1行ずつファイルを読み込み出力する*/
	if($file){
		$count_id = 0; //idを割り振るためのカウント
		while($line = fgets($file)){
			// レシピにIDを付与する
			$count_id++;
			$recipe_array[$count_id] = $count_id.": ".$line;
		}
	}
	fclose($file);

	$recipe_num = $argv[2]; // 入力されたレシピID

	// IDが指定されているかチェックする。
	if(isset($recipe_num)) {
		// IDが指定されている場合
		echo $recipe_array[$recipe_num];
	} else {
		// IDが指定されていない場合はレシピを全表示する
		for ($i = 1; $i <= count($recipe_array); $i++) {
			echo $recipe_array[$i];
		}
		echo "\n";
	}