<!DOCTYPE html>
<html lang="en">

<!--nama muhammad putra erlangga syawaludin-->
<!--Kelas XI RPL-->

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Object</title>
</head>
<body>
    <?php
    class Car {
        public $color;
        public $model;
        public function __construct($color, $model) {        
          $this->color = $color;
          $this->model = $model;
        }
        public function message() {
          return "My car is a " . $this->color . " " . $this->model . "!";
        }
    }

    $myCar = new Car("black", "Volvo");
    echo $myCar->message();
    ?>
</body>
</html>