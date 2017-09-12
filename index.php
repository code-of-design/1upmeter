<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>#1upmeter</title>
    <style media="screen">
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
        <a href="/"><h1 class="title">#1UPMETER</h1></a>
        <!--
          <button class="oneup-btn" type="button" name="oneup-btn">1UP</button>
        -->
      </header>
      <div class="page-content">
        <!-- 1upの読み込み -->
        <?php
          $file_name = "oneup.json"; // ファイル名.
          if (file_exists($file_name)) {
            $oneup = file_get_contents($file_name);
            // JSON形式をデコードする.
            $oneup_array = json_decode($oneup);

            foreach ($oneup_array as $i) {
              foreach ($i as $key => $value) {
                echo $value."<br>";
              }
            }
          }
        ?>
      </div>
      <!-- 1upの生成フォーム -->
      <form class="oneup-form" action="create_oneup.php" method="post">
        <textarea class="oneup-text" name="oneup-text" rows="4" cols="72" placeholder="今日の成長を記録しよう。"></textarea>
        <input class="oneup-submit" type="submit" name="oneup-submit" value="1UP">
      </form>
    </div>

  </body>
</html>
