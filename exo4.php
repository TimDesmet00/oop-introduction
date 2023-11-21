<?php
// exo 3
class Beverage {

    protected ?string $color;
    protected float $price;
    protected ?string $temperature;

    public function __construct(string $color, float $price, string $temperature = "cold") {
        $this-> color = $color;
        $this-> price = $price;
        $this-> temperature = $temperature;
    }

    public function getInfo() {
        return "this beverage is " . $this->temperature . " and " . $this->color . ".";
    }

    public function getColor() {
        return $this->color;
    }

    public function getPrice() {
        return $this->price;
    }

    public function getTemperature() {
        return $this->temperature;
    }

    public function setColor(string $color) {
        $this->color = $color;
    }

    public function getAlcoholPercentage() {
        return "this beverage contains " . $this->alcohol . "% of alcohol.";
    }

    public function getName() {
        return $this->name;
    }

    public function getAlcohol() {
        return $this->alcohol;
    }


}

class Beer extends Beverage {

    protected string $name;
    protected float $alcohol;

    public function __construct(string $color, float $price, string $name, float $alcohol, string $temperature = "cold") {
        parent::__construct($color, $price, $temperature);
        $this-> name = $name;
        $this-> alcohol = $alcohol;
    }

   


}

$duvel = new Beer ("blond", 3.5, "Duvel", 8.5, "cold");
print_r($duvel->getAlcoholPercentage());
echo "<br>";
print_r($duvel->getAlcohol());
echo "<br>";
print_r($duvel->getColor());
echo "<br>";
print_r($duvel->getInfo());
$duvel->setColor("light");
echo "<br>";
print_r($duvel->getColor());
?>