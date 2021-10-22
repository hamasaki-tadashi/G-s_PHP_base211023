<?php

$hours = $_POST["hours"];
$today = $_POST["today"];
// $code_data = $_POST;  // データ受け取り

$write_data = "{$today},{$hours}\n";  // スペース区切りで最後に改行 

// $write_data02 = "{$code_data}\n";

$file = fopen("data/todo.csv", "a");  // ファイルを開く 引数はa
flock($file, LOCK_EX);  // ファイルをロック
fwrite($file, $write_data);  // データに書き込み，
flock($file, LOCK_UN);  // ロック解除
fclose($file);  // ファイルを閉じる
header("Location:todo_csv_input.php");  // 入力画面に移動