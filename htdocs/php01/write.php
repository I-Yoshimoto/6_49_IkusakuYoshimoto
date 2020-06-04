<?php
//input.phpのフォームに入力されたデータをここで受け取る
$name = $_POST["user_name"];
$gender = $_POST["gender"];
$age = $_POST["age"];
$how = $_POST["how"];
$email = $_POST["email"];
$message = $_POST["message"];


//日時を取得
$date = date("Y/m/d H:i");


//ファイルに書き込み
$file = fopen("data/data.txt","a");

    // fwrite($file,$name." ".$email."\n");
    fwrite($file,$name."\n");
    fwrite($file,$gender."\n");
    fwrite($file,$age."\n");
    fwrite($file,$how."\n");
    fwrite($file,$email."\n");
    fwrite($file,$message."\n");
    fwrite($file,$date."\n");

fclose($file);

?>


<html>
<head>
<meta charset="utf-8">
<title>File書き込み</title>
</head>
<body>

<h1>書き込みしました。</h1>
<h2>data/data.txt を確認しましょう！</h2>

<ul>
<li><a href="read.php">アンケート結果の集計を確認する</a></li>
</ul>
</body>
</html>