<?php
// exo 1
class Beverage {

    private $color;
    private $price;
    private $temperature;

    public function __construct(string $color, float $price, string $temperature = "cold") {
        $this-> color = $color;
        $this-> price = $price;
        $this-> temperature = $temperature;
    }

    public function getInfo() {
        return 'This beverage is ' . $this->temperature . ' and ' . $this->color . '.' . PHP_EOL . 'The price is: ' . $this->price . ' euro.';
    }

    public function displayInfo() {
        echo $this->temperature;
        echo "<br>";
        echo $this->price;

    }
}

$cola = new Beverage("black", 2);
print_r($cola->getInfo());
$reflectionPrice = new \ReflectionProperty(Beverage::class, 'price');
$reflectionPrice->setAccessible(true);
$reflectionPrice->setValue($cola, 3.5);
echo "<br>";
print_r($cola->getInfo());


?>