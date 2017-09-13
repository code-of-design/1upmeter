<?php
  include("env.php"); // 環境設定.

  date_default_timezone_set(TIMEZONE); // タイムゾーン.
  $oneup_array = array(); // 1up配列.

  // 1up POST.
  $oneup_txt = $_POST["oneup-txt"]; // 1up本文.
  $oneup_date = strftime("%G/%m/%d %H:%M"); // 1up時間.
  $oneup_post = array(
    'txt' => $oneup_txt,
    'date' => $oneup_date
  );

  // 1upファイルを生成する.
  if (!file_exists(ONEUP_FILE_PATH)) {
    touch(ONEUP_FILE_PATH);
  }

  // 1upファイルを読み込む.
  $oneup = file_get_contents(ONEUP_FILE_PATH);
  // JSONを1up配列にデコードする.
  $oneup_array = json_decode($oneup);
  // 1up POSTを1up配列に追加する.
  $oneup_array[count($oneup_array)] = $oneup_post;
  // 1ip配列をJSONにエンコードする.
  $oneup_json = json_encode($oneup_array);
  // 1upファイルに書き込む.
  file_put_contents(ONEUP_FILE_PATH, $oneup_json);

  // リダイレクト.
  header("Location: index.php");
  exit();
?>
