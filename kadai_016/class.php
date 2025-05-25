<!DOCTYPE html>
<html lang="ja">

<head>
   <meta charset="UTF-8">
   <title>課題_16</title>
</head>

<body>
<p>
<?php
class Food {
  public $name;
  public $price;

  public function  __construct($name, $price){
    $this->name = $name;
    $this->price = $price;
  }

  public function show_price(){
    echo $this->price . '<br>';
  }
}

class Animal {
  public $name;
  public $height;
  public $weight;

  public function  __construct($name, $height, $weight){
    $this->name = $name;
    $this->height = $height;
    $this->weight = $weight;
  }

  public function show_height(){
    echo $this->height . '<br>';
  }
}

$Food = new Food('から揚げ', 500);
$Animal = new Animal('猫',60,40);

print_r($Food);
echo '<br>';
print_r($Animal);
echo '<br>';

$Food ->show_price();
$Animal ->show_height();

?>
</p>
</body>

</html>


