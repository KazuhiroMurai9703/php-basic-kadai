<!DOCTYPE html>
 <html lang="ja">
 
 <head>
     <meta charset="UTF-8">
     <title>課題 クラスを2つ作ってそれぞれのインスタンスを出力しよう</title>
 </head>
 
 <body>
    <p>
        <?php
            class Food{
                // プロパティ                        
                private $name;
                private $price;
    
                // コンストラクタ
                public function __construct(string $name, int $price) {
                    $this->name = $name;
                    $this->price = $price;
                }
                // メソッド
                public function show_price() {
                    echo $this->price.'<br>';
                }
            }
            
            class Animal{
                // プロパティ                       
                private $name;
                private $height;
                private $weight;

                // コンストラクタ
                public function __construct(string $name, int $height, int $weight) {
                    $this->name = $name;
                    $this->height = $height;
                    $this->weight = $weight;
                }

                // メソッド
                public function show_height() {
                    echo $this->height.'<br>';
                }
            }
            
            // インスタンス化
            $food = new Food('potato', 250);
            $animal = new Animal('dog', 60 , 5000);
    
            // 各インスタンスのプロパティ値を出力する
            echo print_r($food,true).'<br>';
            echo print_r($animal,true).'<br>';

            // メソッドにアクセスして実行する。
            $food->show_price();
            $animal->show_height();

         ?>
    </p>
 </body>
 
 </html>