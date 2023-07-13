<?php
//var_dump($_POST);
//exit();
include("functions.php");

if (
  !isset($_POST[' work_content']) || $_POST[' work_content'] === '' ||
  !isset($_POST[' work_time']) || $_POST['work_time'] === '' ||
  !isset($_POST[' work_point']) || $_POST['work_point'] === '' ||
  !isset($_POST[' work_day']) || $_POST['work_day'] === ''
) {
  echo json_encode(["error_msg" => "no input"]);
  exit();
}

$work_content = $_POST['work_content'];
$work_time = $_POST['work_time'];
$work_point = $_POST['work_point'];
$work_day = $_POST['work_day'];

$pdo = connect_to_db();

$sql = 'INSERT INTO work_table(id, work_content, work_time, work_point, work_day, created_at, updated_at) VALUES(NULL, :work_content, work_time, work_point, work_day, now(), now())';

$stmt = $pdo->prepare($sql);
$stmt->bindValue(':work_content', $todo, PDO::PARAM_STR);
$stmt->bindValue(':work_time', $deadline, PDO::PARAM_STR);
$stmt->bindValue(':work_point', $todo, PDO::PARAM_STR);
$stmt->bindValue(':work_day', $deadline, PDO::PARAM_STR);

try {
  $status = $stmt->execute();
} catch (PDOException $e) {
  echo json_encode(["sql error" => "{$e->getMessage()}"]);
  exit();
}

header("Location:todo_input.php");
exit();
