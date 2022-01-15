<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>write</title>
</head>
<body>
<a href="read.php">確認</a>
<a href="post.php">戻る</a>    
</body>

 <?php

// ファイルに書き込むデータ
$name = $_POST['name'];
$mail = $_POST['mail'];
$phone = $_POST['phone'];

$name = htmlspecialchars($name, ENT_QUOTES);
$mail = htmlspecialchars($mail, ENT_QUOTES);
$phone = htmlspecialchars($phone, ENT_QUOTES);

$date = date('Y/m/d H:i:s');

$array = array(
    array("date", "name", "mail", "phone"),
    array($date, $name, $mail, $phone)
);

// ファイルの用意
$file = fopen("./data.csv", "a");

// 書き込み
if ($file) {
    foreach ($array as $line){
        fputcsv($file, $line);
    }
}

// ファイルをクローズ
fclose($file);

?>
</html>