<?php
  include("env.php"); // 環境設定.
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title><?php echo TITLE; ?></title>
  </head>
  <body>
    <div class="page">
      <header class="page-header">
        <a href="index.php"><?php echo TITLE; ?></a>
        <a href="oneup_form.php">1UP</a>
      </header>
      <!-- 1UP一覧 -->
      <div class="page-content">
        <?php
          // JSONファイル読み込み.
          if (file_exists(ONEUP_FILE_PATH)) {
            $oneup = file_get_contents(ONEUP_FILE_PATH);
            // JSONを配列にデコードする.
            $oneup_array = json_decode($oneup);
            // 出力.
            foreach ($oneup_array as $i) {
              foreach ($i as $key => $value) {
                echo $value."<br>";
              }
            }
          }
        ?>
      </div>
    </div>
  </body>
</html>
