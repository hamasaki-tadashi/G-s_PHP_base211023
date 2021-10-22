<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>コードを書いた時間(入力画面)</title>
</head>

<body>
  <form action="todo_csv_create.php" method="POST">
    <fieldset>
      <legend>コードを書いた時間（入力画面）</legend>
      <a href="todo_csv_read.php">一覧画面</a>
      <div>
        code: <input type="number" min="0" max="24" name="hours">時間
      </div>
      <div>
        today: <input type="date" name="today">
      </div>
      <div>
        <button>submit</button>
      </div>
    </fieldset>
  </form>

</body>

</html>