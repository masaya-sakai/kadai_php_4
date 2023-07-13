<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>DB連携型 car maintenance リスト（入力画面）</title>
</head>

<body>
  <form action="todo_create.php" method="POST">
    <fieldset>
      <legend>DB連携型car maintenanceリスト（入力画面）</legend>
      <a href="todo_read.php">一覧画面</a>
      <a href="todo_logout.php">logout</a>
      <div>
        work_content: <input type="text" name="work_content">
      </div>
      <div>
        work_time: <input type="text" name="work_time">
      </div>
      <div>
        work_point: <input type="text" name="work_point">
      </div>
      <div>
        work_day: <input type="date" name="work_day">
      </div>

      <div>
        <button>submit</button>
      </div>
    </fieldset>
  </form>

</body>

</html>