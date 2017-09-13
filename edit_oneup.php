<?php
  include("env.php"); // 環境設定.

  session_start(); // セッション開始.

  $oneup_get = array(
    "id" => NULL,
    "txt" => NULL,
    "date" => NULL
  ); // 1upGET.

  $oneup_id = $_GET["id"]; // 1upID.

  // 1upファイルを読み込む.
  $oneup_file = file_get_contents(ONEUP_FILE_PATH);
  // JSONを1up配列にデコードする.
  $oneup_array = json_decode($oneup_file);

  $file_index; // 1upファイルのインデックス.

  // 検索.
  foreach ($oneup_array as $i => $v) {
    foreach ($v as $key => $value) {
      if ($key == "id" && $value == $oneup_id) {
        $file_index = $i;
      }
    }
  }

  // 取得.
  $_SESSION["file_index"] = $file_index;
  $oneup_get["txt"] = $oneup_array[$file_index]->txt;
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title><?php echo TITLE ?></title>
    <style>
      textarea {
        resize: none;
        display: block;
      }
    </style>
  </head>
  <body>
    <div class="page">
      <header class="page-header">
        <a href="index.php"><?php echo TITLE; ?></a>
      </header>
      <form action="" method="POST">
        <textarea name="oneup-txt" rows="4" cols="80" placeholder="今日の成長を記録しよう"><?php echo $oneup_get["txt"]; ?></textarea>
        <input type="submit" name="oneup-submit" value="1UP">
      </form>
      <form action="oneup_delete.php" method="POST">
        <input type="submit" name="oneup-submit" value="削除">
      </form>
    </div>
  </body>
</html>
