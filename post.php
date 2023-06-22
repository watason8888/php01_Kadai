<html>

<head>
    <meta charset="utf-8">
    <style>
        .menu {
            background-color: #2FA6E9;
        }
    </style>
    <title>POST_課題</title>
</head>

<body>
    <P>※post_confirm.phpにpostで送ってください。</P>

<main>

<form action="post_confirm.php" method="post">
        名前:   <input type="text" name="name">
        EMAIL:  <input type="text" name="mail">
        パスワード：<input type="text" name="pass">
    <input type="submit" value="送信">
</form>

</main>
</body>