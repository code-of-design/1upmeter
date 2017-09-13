<?php
  include("env.php"); // 環境設定.

  date_default_timezone_set(TIMEZONE); // タイムゾーン.

  $oneup_file; // 1upファイル.
  $oneup_array = array(); // 1up配列.
  $oneup_post = array(
    "id" => NULL,
    "txt" => NULL,
    "date" => NULL
  ); // 1upPOST.
  $oneup_id; // 1upID.
  $oneup_txt = $_POST["oneup-txt"]; // 1up本文.
  $oneup_date = strftime("%G/%m/%d %H:%M"); // 1up時間.

  // 1upファイルを生成する.
  if (!file_exists(ONEUP_FILE_PATH)) {
    touch(ONEUP_FILE_PATH);
  }

  // 1upファイルを読み込む.
  $oneup_file = file_get_contents(ONEUP_FILE_PATH);
  // JSONを1up配列にデコードする.
  $oneup_array = json_decode($oneup_file);

  $oneup_id = count($oneup_array); // 1upIDを取得する.

  // 1upPOSTを取得する.
  $oneup_post["id"] = $oneup_id;
  $oneup_post["txt"] = $oneup_txt;
  $oneup_post["date"] = $oneup_date;

  // 1upPOSTを1up配列に追加する.
  $oneup_array[count($oneup_array)] = $oneup_post;
  // 1up配列をJSONにエンコードする.
  $oneup_file = json_encode($oneup_array);
  // 1upファイルに書き込む.
  file_put_contents(ONEUP_FILE_PATH, $oneup_file);

  // リダイレクト.
  header("Location: index.php");
  exit();
?>
