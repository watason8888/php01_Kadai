// POSTを受け取る
<?php
// var_dump($_POST);
// $name = $_POST["name"];
// $mail = $_POST["mail"];
// $password = $_POST["password"];

//XSS対策
function h($str)
{
    return htmlspecialchars($str, ENT_QUOTES);
}

$name = $_POST['name'];
$mail = $_POST['mail'];
$pass = $_POST['pass'];
?>

<html>

<head>
    <meta charset="utf-8">
    <title>POST（受信）</title>
</head>

<body>
    <p>お名前：<?= htmlspecialchars($name, ENT_QUOTES) ?></p>
    <p>EMAIL:<?= htmlspecialchars($mail, ENT_QUOTES) ?></p>
    <p>PASSWORD:<?= htmlspecialchars($pass, ENT_QUOTES) ?></p>
    
    <p>お名前：<?= h($name) ?></p>
    <p>EMAIL:<?= h($mail) ?></p>
    <p>PASSWORD:<?= h($pass) ?></p>
    
    <ul>
        <li><a href="index.php">index.php</a></li>
    </ul>
</body>
</html>
