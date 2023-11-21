<?php
// exo 1
class Beverage {

    public ?string $color;
    public float $price;
    public ?string $temperature;

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
print_r($cola->temperature);
echo "<br>";


// exo 2

class Beer extends Beverage {

    public string $name;
    public float $alcohol;

    public function __construct(string $color, float $price, string $name, float $alcohol) {
        parent::__construct($color, $price);
        $this-> name = $name;
        $this-> alcohol = $alcohol;
    }

    public function getAlcoholPercentage() {
        return "this beverage contains " . $this->alcohol . "% of alcohol.";
    }


}

$duvel = new beer ("blond", 3.5, "Duvel", 8.5);
print_r($duvel->getAlcoholPercentage());
echo "<br>";
print_r($duvel->alcohol);
echo "<br>";
print_r($duvel->color);
echo "<br>";
print_r($duvel->getInfo());







print_r($cola->getAlcoholPercentage());
?>