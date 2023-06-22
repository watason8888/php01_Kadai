<html>
<head>
    <meta charset="utf-8">
    <title>課題テンプレート</title>
</head>

<body>
<?php
// $name =$_POST["name"];
// $mail =$_POST["mail"];
// $pass =$_POST["pass"];

//変数を用意
// $time = date("Y-m-d H:i:s");

// 書き込むデータの内容を変形する。
// "\n"は改行。HTMLの<br>と同じようにtext中で利用されるとtextは改行される。
// $data = $time . "/" . $name . "/" . $mail . "/" . $pass . "/";

//第3引数に、FILE＿APPENDしないとうわがきされちゃう
// file_put_contents("data/data.txt", $data, FILE_APPEND);
// ?>

<form action="write.php" method="post">
        名前:   <input type="text" name="name">
        EMAIL:  <input type="text" name="mail">
        パスワード：<input type="text" name="pass">
    <input type="submit" value="送信">
</form>
</body>

</html>