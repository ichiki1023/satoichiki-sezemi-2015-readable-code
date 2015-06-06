#README

##Editor
Sublime Text

##Language
PHP

#課題

##仕様1
オムライスを標準出力する
実行ファイルは /task/spec1/recipe.php
```
$ php recipe.php
```

##仕様2
README.mdを修正

##仕様3
オムライスを標準出力する
データファイルは /task/spec1/recipe.php
  
text形式を利用。
  
実行ファイルは /task/spec1/recipe.php
```
$ php recipe.php recipe-data.php
```

##仕様4
/task/spec4/recipe-data.txt

データファイルを以下の情報に変更

フォーマトなどは仕様3を参考
*オムライス
*親子丼
*杏仁豆腐
  
確認:
```
$ cat recipe-data.txt
```
  
実行例:
```
$ php recipe.php recipe-data.txt
```

##仕様5
レシピにIDを割り振る
  
データファイルは仕様4と変更なし
  
IDを割り振るためのカウントを用意
```
	$count_id = 0; //idを割り振るためのカウント
	while($line = fgets($file)){
		$count_id++;
		echo $count_id.": ".$line;
	}
```

実行例:
```
$ php recipe.php recipe-data.txt
1: オムライス
2: 親子丼
3: 杏仁豆腐
```

##仕様6
IDを指定したレシピを出力する

IDを割り振った配列を作成する。
```
    while($line = fgets($file)){
        // レシピにIDを付与する
        $count_id++;
        $recipe_array[$count_id] = $count_id.": ".$line;
    }
```

IDが指定されている場合とそうでない場合の表示を切り替える
```
    // IDが指定されているかチェックする。
    if(isset($recipe_num)) {
        // IDが指定されている場合
        echo $recipe_array[$recipe_num]."\n";
    } else {
        // IDが指定されていない場合はレシピを全表示する
        for ($i = 1; $i <= count($recipe_array); $i++) {
            echo $recipe_array[$i];
        }
        echo "\n";
    }
```

実行例1:
```
$ php recipe.php recipe-data.txt 2
2: 親子丼
```

実行例2:
```
$ php recipe.php recipe-data.txt
1: オムライス
2: 親子丼
3: 杏仁豆腐
```

##仕様7
仕様6とかわらず
