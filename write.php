<?php
$time =date("Y-m-d H:i:s");
var_dump($_POST);
$name = $_POST["name"];
$mail = $_POST["mail"];
$pass = $_POST["pass"];

//書き込むデータを整形する
// "\n"は改行。HTMLの<br>と同じようにtext中で利用されるとtextは改行される。
$data = $time . $name . $mail . $pass . "\n";

//第3引数に、FILE_APPENDしないと上書きされちゃう
file_put_contents("data/data.txt" , $data, FILE_APPEND);
?>

<html>

<head>
    <meta charset="utf-8">
    <title>File書き込み</title>
</head>

<body>

    <h1>書き込みしました。</h1>
    <h2>./data/data.txt を確認しましょう！</h2>

    <ul>
        <li><a href="read.php">確認する</a></li>
        <li><a href="input.php">戻る</a></li>
    </ul>
</body>

</html>
