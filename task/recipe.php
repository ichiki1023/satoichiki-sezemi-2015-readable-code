<?php
	class Recipe {
		public $params;

		public function printRecipe($argv) {
			$this->params = $argv;
			$recipe_array = $this->addRecipeID();
			$recipe_num = $this->params[2]; // 入力されたレシピID
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
		}

		private function addRecipeID() {
			$recipe_array = array();
			$file_path = $this->params[1];

			$file = fopen($file_path, "r");

			/*1行ずつファイルを読み込み出力する*/
			$count_id = 1; //idを割り振るためのカウント

			if($file){
				while($line = fgets($file)){
					// レシピにIDを付与する
					$recipe_array[$count_id] = $count_id.": ".$line;
					$count_id++;
				}
			}
			fclose($file);
			return $recipe_array;
		}
	}

	$recipe = new Recipe;
	$recipe->printRecipe($argv);
