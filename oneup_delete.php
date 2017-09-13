<?php
  include("env.php"); // 環境設定.

  session_start(); // セッション開始.

  $file_index = $_SESSION["file_index"];

  $oneup_file = file_get_contents(ONEUP_FILE_PATH);
  $oneup_array = json_decode($oneup_file);

  unset($oneup_array[$file_index]);
  $oneup_array = array_merge($oneup_array);

  $oneup_file = json_encode($oneup_array);
  file_put_contents(ONEUP_FILE_PATH, $oneup_file);

  // リダイレクト.
  header("Location: index.php");
  exit();
?>
