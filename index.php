<?php
class Vertebrates {
public function __construct() {
$this->printVertebrates();
}

protected function printVertebrates() {
echo "Sono un animale Vertebrato\n";
}
}

class WarmBlooded extends Vertebrates{
public function __construct() {
parent::__construct();
$this->printWarmBlooded();
}

protected function printWarmBlooded() {
echo "Sono un animale a sangue caldo\n";
}
}

class Mammals extends WarmBlooded{
public function __construct() {
parent::__construct();
$this->printMammals();
}

protected function printMammals() {
echo "Sono un mammifero\n";
}
}

class Birds extends WarmBlooded{
public function __construct() {
parent::__construct();
$this->printBirds();
}

protected function printBirds() {
echo "Sono un uccello\n";
}
}


class ColdBlooded extends Vertebrates{
public function __construct() {
parent::__construct();
$this->printColdBlooded();
}

protected function printColdBlooded() {
echo "Sono un animale a sangue freddo\n";
}
}


class Fish extends ColdBlooded{
public function __construct() {
parent::__construct();
$this->printFish();
}

protected function printFish() {
echo "Sono un pesce\n";
echo "Splash!\n";
}
}

class Reptiles extends ColdBlooded{
public function __construct() {
parent::__construct();
$this->printReptiles();
}

protected function printReptiles() {
echo "Sono un rettile\n";
}
}

class Amphibians extends ColdBlooded{
public function __construct() {
parent::__construct();
$this->printAmphibians();
}

protected function printAmphibians() {
echo "Sono un anfibio\n";
}

}
$magikarp = new Fish();

?>