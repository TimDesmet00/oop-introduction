<?php
// exo 1
class Beverage {

    private ?string $color;
    private float $price;
    private ?string $temperature;

    public function __construct(string $color, float $price, string $temperature = "cold") {
        $this-> color = $color;
        $this-> price = $price;
        $this-> temperature = $temperature;
    }

    public function getInfo() {
        return "this beverage is " . $this->temperature . " and " . $this->color . ".";
    }


}

$cola = new Beverage("black", 2);
print_r($cola->getInfo());

echo "<br>";
print_r($cola->this->temperature);
echo "<br>";

?>