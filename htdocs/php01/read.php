<?php
//ファイル名を変数に入れる
$filename = "data/data.txt";

$fp = fopen($filename, 'r');

//データの数だけ描画する処理
while ( !feof($fp) ) { //!feof($fp)で、データの数だけ反復

    //fgetsでデータを取得して、変数に代入
    $txt = fgets($fp);

    //出力
    echo $txt.'<br>';

}

//fcleseでファイルを閉じる
fclose($fp);


?>


<html>
<head>
<meta charset="utf-8">
<title>File書き込み</title>
</head>
<body>
    <ul>
        <li><a href="input.php">アンケート画面に戻る</a></li>
    </ul>
</body>
</html>