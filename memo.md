#メモ

##仕様1
単純に出力

##仕様2
README.mdを修正


##仕様3
データファイルを分離

ループ処理はわかりやすい様にコメントを追加

### 実際のコード
https://github.com/Asuforce/satoichiki-sezemi-2015-readable-code/blob/07fdfa0be9b3408b03464a85e85f59f20a4dccb0/task/spec3/recipe.php

```php
$file = fopen($argv[1], "r");
```

### どうしてリーダブルだと思っているかの説明
ファイルのパスを指定するのではなく、コマンドで実行した時に読み込ませているのが、汎用性があっていいと思いました。

### この書き方の一言説明
汎用性


##仕様4
ただカウントするための変数を$countとするのではなく、$count_idにして、何をカウントしているのかを明確にした。さらにコメントを追加して、よりわかりやすくしました。

### 実際のコード
https://github.com/Asuforce/satoichiki-sezemi-2015-readable-code/blob/a453627fec3886da702714c8a43319d1e404125a/task/spec4/recipe.php

```php
while($line = fgets($file)){
    echo $line;
}
```

### どうしてリーダブルだと思っているかの説明
直接fgets()を出力せずに、変数に代入することで何を出力しているのかがわかりやすいです。
判定を兼ねているのも良いと思いました。

### この書き方の一言説明
可読性の向上

##仕様6
### 実際のコード
https://github.com/Asuforce/satoichiki-sezemi-2015-readable-code/blob/d172f33b2dd495b380d334c385d62120ed29a9ac/task/recipe.php

```php
while($line = fgets($file)){
    // レシピにIDを付与する
    $count_id++;
    $recipe_array[$count_id] = $count_id.": ".$line;
}
```

### どうしてリーダブルだと思っているかの説明
適切な名前の配列に入れることで、次の処理で何を出力しているのかがわかりやすくなると思います。

### この書き方の一言説明
適切な命名
