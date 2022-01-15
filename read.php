<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        tr,td {border: solid 1px;              /* 枠線指定 */}
    </style>
</head>
<body>
<section>
    <?php
// ファイルを開く

$date = $_POST['date'];
$name = $_POST['name'];
$mail = $_POST['mail'];
$phone = $_POST['phone'];


$file = fopen('./data.csv','r');

// ファイル内容を1行ずつ読み込んで出力
// while (($array = fgetcsv($file)) !== FALSE){
//     if(!array_diff($array, array(''))){
// 		continue;
// 	}
//     echo "<tr>";
// 	for($i = 0; $i < count($array); ++$i ){
// 		$elem = nl2br(mb_convert_encoding($array[$i], 'UTF-8', 'SJIS'));
// 		$elem = $elem === "" ?  "&nbsp;" : $elem;
// 		echo("<td>".$elem."</td>");
// 	}
// 	echo "</tr>\n";
// }

while ($str = fgets($file)) {
    echo "<tr>\n<td>";
    $strItem = nl2br($str);
    $strItem2 = str_replace (",","</td>\n<td>",$strItem);
    echo $strItem2;
    echo "</tr>\n";
}

// ファイルを閉じる
fclose($file);
?> 
</section>

</body>
</html>


