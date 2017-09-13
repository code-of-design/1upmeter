<?php
  include("env.php"); // 環境設定.
?>
<?php
  /*
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

  // INDEXへ戻る.
  echo "<a href='index.php'><p>#1UPMETER</p></a>";
  */
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form class="oneup-form" action="create_oneup.php" method="post">
      <textarea class="oneup-text" name="oneup-text" rows="4" cols="72" placeholder="今日の成長を記録しよう。"></textarea>
      <input class="oneup-submit" type="submit" name="oneup-submit" value="1UP">
    </form>
  </body>
</html>
