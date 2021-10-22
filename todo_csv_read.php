<?php
$str = '';   // 出力用の空の文字列
$code_today = '';
$code_hours = '';
$file = fopen("data/todo.csv", "r"); // ファイルを開く(読み取り専用) 
flock($file, LOCK_EX); // ファイルをロック
if ($file) {
  while ($line = fgets($file)) {  // fgets()で1行ずつ取得→$lineに格納
    $str .= "<tr><td>{$line}</td></tr>";  // 取得したデータを$strに入れる 
  }
}
flock($file, LOCK_UN);  // ロック解除 
fclose($file);  // ファイル閉じる
// ($strに全部の情報が入る!)

?>

<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="http://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.3.0/Chart.min.js"></script>
  <script src="mychart.js"></script>
  <title>コードを書いた時間（一覧画面）</title>
</head>

<body>
  <!--グラフ-->
  <!-- <div style="width: 100%; height: 100%;">
    <canvas id="myChart" style="width: 100%; height: auto;"></canvas>
  </div> -->
  <fieldset>
    <legend>コードを書いた時間（一覧画面）</legend>
    <a href="todo_csv_input.php">入力画面</a>
    <table>
      <thead>
        <tr>
          <th>結果</th>
        </tr>
      </thead>
      <tbody>
        <?= $str ?>
      </tbody>
    </table>
  </fieldset>

</body>

</html>