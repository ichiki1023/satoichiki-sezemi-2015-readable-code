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