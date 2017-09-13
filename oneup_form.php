<?php
  include("env.php"); // 環境設定.
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
      <form action="create_oneup.php" method="POST">
        <textarea name="oneup-txt" rows="4" cols="80" placeholder="今日の成長を記録しよう"></textarea>
        <input type="submit" name="oneup-submit" value="1UP">
      </form>
    </div>
  </body>
</html>
