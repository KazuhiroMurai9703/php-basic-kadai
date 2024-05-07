<!DOCTYPE html>
 <html lang="ja">
 
 <head>
     <meta charset="UTF-8">
     <title>SAMURAI課題/PHPの基礎を学ぼう/テストの平均点を計算しよう</title>
 </head>
 
 <body>
     <p>
        <?php

        // 連想配列
        $data = ['名前' => '玉ねぎ', '値段' => 200, '産地' => '北海道'];

        // 連想配列の値を出力する
        foreach ($data as $key => $value) {
            echo $key . " : ". $value.'<br>';
        }    
        ?>
     </p>
 </body>
 
 </html>