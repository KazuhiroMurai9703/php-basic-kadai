<!DOCTYPE html>
 <html lang="ja">
 
 <head>
     <meta charset="UTF-8">
     <title>SAMURAI課題/PHPの基礎を学ぼう/テストの平均点を計算しよう</title>
 </head>
 
 <body>
     <p>
        <?php

        // 代入
        $score1 = 80;
        $score2 = 60;
        $score3 = 55;
        $score4 = 40;
        $score5 = 100;
        $score6 = 25;
        $score7 = 80;
        $score8 = 95;
        $score9 = 30;
        $score10 = 60;
	
        // 計算
        $sum = ( $score1 + $score2 + $score3 + $score4 + $score5 + $score6 +  $score7 + $score8 + $score9 + $score10) / 10;
        
        // 課題
        echo $sum ;

        ?>
     </p>
 </body>
 
 </html>