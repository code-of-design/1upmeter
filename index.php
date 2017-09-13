<?php
  include("env.php"); // 環境設定.

  $oneup_file;
  $oneup_array = array();
  $oneup_id; // 1upID.
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
      <!-- 1up一覧 -->
      <div class="page-content">
        <?php
          // 1upファイルを読み込む.
          if (file_exists(ONEUP_FILE_PATH)) {
            $oneup_file = file_get_contents(ONEUP_FILE_PATH);
            // JSONを1up配列にデコードする.
            $oneup_array = json_decode($oneup_file);
            // 表示.
            foreach ($oneup_array as $v) {
              foreach ($v as $key => $value) {
                if ($key == "id") {
                  $oneup_id = $value;
                }
                else {
                  echo "<p>{$value}</p>";
                }
              }
              echo "<a href="."'edit_oneup.php?id=".$oneup_id."'>EDIT</a>";
            }
          }
        ?>
      </div>
    </div>
  </body>
</html>
