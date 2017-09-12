<?php
  date_default_timezone_set('Asia/Tokyo'); // タイムゾーン.
  $file_name = "oneup.json"; // ファイル名.
  $oneup_array = array(); // oneup配列.

  // フォームのPOSTを取得する.
  $oneup_txt = $_POST["oneup-text"];
  $oneup_date = strftime("%G/%m/%d %H:%M");
  $oneup_current_array = array(
    'txt' => $oneup_txt,
    'date' => $oneup_date
  );

  // 1upファイルを生成する.
  if (!file_exists($file_name)) {
    touch($file_name);
  }

  // 1upファイルを読み込む.
  $oneup = file_get_contents($file_name);
  // JSON形式をデコードする.
  $oneup_array = json_decode($oneup);

  // 1upファイルに書き込む.
  $oneup_array[count($oneup_array)] = $oneup_current_array;
  // JSON形式にエンコードする.
  $oneup_json = json_encode($oneup_array);
  file_put_contents($file_name, $oneup_json);

  // 1upファイルを表示する.
  var_dump($oneup_array);

  /*
  {
    {
      txt: "hello,php",
      date: "2017/09/12 16:10"
    }
  }
  */

  // INDEXへ戻る.
  echo "<a href='index.php'><p>#1UPMETER</p></a>";
?>
