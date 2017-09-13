<?php
  include("env.php"); // 環境設定.
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title><?php echo TITLE; ?></title>
    <style>
      textarea {
        resize: none;
      }
      .oneup-text{
        display: block;
      }
    </style>
  </head>
  <body>
    <div class="page">
      <header class="page-header">
        <a href="/"><h1 class="title"><?php echo TITLE; ?></h1></a>
        <button class="oneup-btn" type="button" name="oneup-btn">1UP</button>
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
