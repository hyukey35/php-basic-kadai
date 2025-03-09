<!DOCTYPE html>
<html lang="ja">

<head>
   <meta charset="UTF-8">
   <title>PHP基礎編</title>
</head>

<body>
  
<p>
<?php

class Food {
    private $name;
    private $price;

    public function __construct(string $name, int $price) {
        $this->name = $name;
        $this->price = $price;
    }

    public function show_price() {
        echo $this->price;
    }
}

class Animal {
    private $name;
    private $height;
    private $weight;

    public function __construct(string $name, int $height, int 
    $weight) {
        $this->name = $name;
        $this->height = $height;
        $this->weight = $weight;
    }

    public function show_height() {
        echo $this->height;
    }
}

$food = new Food("potato", 250);
$animal = new Animal("dog", 60, 5000);

var_dump($food);
var_dump($animal);

$food->show_price();
echo "\n"; // 改行
$animal->show_height();

?>
   </p>
</body>

</html>