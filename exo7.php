<?php
// exo 6
const barname = "Het Vervolg";

class Beverage {

    
    private static ?string $adress = "Melkmarkt 9, 2000 Antwerpen";
    private ?string $color;
    private float $price;
    private ?string $temperature;

    public function __construct(string $color, float $price, string $temperature = "cold") {
        $this-> color = $color;
        $this-> price = $price;
        $this-> temperature = $temperature;
    }

    public function getInfo() {
        // return "the " . barname . ", located at " . self::$adress . ". this beverage is " . $this->temperature . " and " . $this->color . ".";
        return "the " . barname . ", located at " . Beverage::$adress . ". this beverage is " . $this->temperature . " and " . $this->color . ".";
    }

}

$cola = new Beverage("black", 2);
print_r($cola->getInfo());
echo "<br>";

// exo 2

class Beer extends Beverage {

private string $name;
private float $alcohol;

public function __construct(string $color, float $price, string $name, float $alcohol) {
    parent::__construct($color, $price);
    $this-> name = $name;
    $this-> alcohol = $alcohol;
}

public function getAlcoholPercentage() {
    return "on " . barname . " this beverage contains " . $this->alcohol . "% of alcohol.";
}


}

$duvel = new beer ("blond", 3.5, "Duvel", 8.5);
print_r($duvel->getAlcoholPercentage());

echo "<br>";
print_r($duvel->getInfo());
echo "<br>";
echo barname;
?>