<?php

interface Printable{
    public function print();
    public function sneakpeek();
    public function fullinfo();
}

class Furniture {
    private $width;
    private $length;
    private $height;
    private $is_for_sitting;
    private $is_for_sleeping;
    
    public function __construct(int $width, int $length, int $height) 
    {
        $this->width = $width;
        $this->length = $length;
        $this->height = $height;
    }

    public function getIs_for_sitting()
    {
        return $this->is_for_sitting;
    }

    public function setIs_for_sitting(bool $is_for_sitting)
    {
        $this->is_for_sitting = $is_for_sitting;

        return $this;
    }

    public function getIs_for_sleeping()
    {
        return $this->is_for_sleeping;
    }

    public function setIs_for_sleeping(bool $is_for_sleeping)
    {
        $this->is_for_sleeping = $is_for_sleeping;

        return $this;
    }

    public function getWidth()
    {
        return $this->width;
    }

    public function setWidth(int $width)
    {
        $this->width = $width;
    }

    public function getLength() 
    {
        return $this->length;
    }

    public function setLength(int $length)
    {
        $this->length = $length;
    }

    public function getHeight()
    {
        return $this->height;
    }

    public function setHeight(int $height)
    {
        $this->height = $height;
    }

    public function area()
    {
        $area = $this->width * $this->length;
        return $area;
    }

    public function volume() 
    {
       $volume = $this->area() * $this->height;
       return $volume;
    }

    public function checkPurpose()
    {
        if ($this->getIs_for_sitting() == true)
        {
            return "Sitting only ";
        } else if ($this->getIs_for_sleeping() == true)
            {
                return "Sleeping only ";
            }
    }
}

class Sofa extends Furniture implements Printable {

    private $seats;
    private $armrests;
    private $length_opened;

    public function __construct(int $width, int $length, int $height)
    {
        parent::__construct($width, $length, $height);
    }
  
    public function getSeats()
    {
        return $this->seats;
    }
    
    public function setSeats(int $seats)
    {
        $this->seats = $seats;
    }
    
    public function getArmrests()
    {
        return $this->armrests;
    }

    public function setArmrests(int $armrests)
    {
        $this->armrests = $armrests;
    }

    public function getLength_opened()
    {
        return $this->length_opened;
    }

    public function setLength_opened(int $length_opened)
    {
        $this->length_opened = $length_opened;
    }

    public function area_opened()
    {
        if ($this->getIs_for_sleeping() == true)
        {
            return $this->getWidth() * $this->getLength_opened();
        }   else if ($this->getIs_for_sitting() == true)
        {
            echo "This sofa is for sitting only, it has {$this->getArmrests()} armrests and {$this->getSeats()} seats";
        }
    }

    public function print()
    {
        echo "Item: {$this->sneakpeek()}, purpose: {$this->checkPurpose()}, area: {$this->area()} cm2";
    }

    public function sneakpeek()
    {
       return  get_class($this);
    }

    public function fullinfo()
    {
        echo "Item: {$this->sneakpeek()}, {$this->checkPurpose()}, {$this->area()} cm2, width: {$this->getWidth()}cm, length: {$this->getLength()}cm, height: {$this->getHeight()}cm";
    }
}

class Bench extends Sofa implements Printable {
    public function __construct($width, $length, $height)
    {
        parent::__construct($width, $length, $height);
    }

    public function print()
    {
        echo  "Item : {$this->sneakpeek()} , purpose:  {$this->checkPurpose()} , area:  {$this->area()} cm2";
    }

    public function sneakpeek()
    {
       return get_class($this);
    }

    public function fullinfo()
    {
        echo "Item: {$this->sneakpeek()}, {$this->checkPurpose()}, area: {$this->area()}cm2, width: {$this->getWidth()}cm, length: {$this->getLength()}cm, height: {$this->getHeight()}cm";
    }

}

class Chair extends Furniture implements Printable {
    public function __construct($width, $length, $height)
    {
        parent::__construct($width, $length, $height);
    }

    public function print()
    {
        echo "Item: {$this->sneakpeek()}, purpose: {$this->checkPurpose()}, area: {$this->area()} cm2";
    }

    public function sneakpeek()
    {
       return  get_class($this);
    }

    public function fullinfo()
    {
        echo "Item: {$this->sneakpeek()}, {$this->checkPurpose()}, {$this->area()} cm2, width: {$this->getWidth()}cm, length: {$this->getLength()}cm, height: {$this->getHeight()}cm";
    }
}

$furniture = new Furniture(200,40,50);
echo "This furniture's area is  {$furniture->area()} cm2";
echo "<br>";
echo "This furniture's volume is {$furniture->volume()} cm3";
echo "<hr>";

$sofa = new Sofa (150,200,50);
$sofa->setSeats(4);
$sofa->setArmrests(2);
$sofa->setLength_opened(300);
$sofa->setIs_for_sitting(true);

echo "This sofa's area is  {$sofa->area()} cm2";
echo "<br>";
echo "This sofa's volume is  {$sofa->volume()} cm3";
echo "<br>";
echo $sofa->area_opened();
echo "<br>";

$sofa->setIs_for_sleeping(true);
$sofa->setLength_opened(300);
echo "When opened, this sofa's area is {$sofa->area_opened()} cm2";
echo "<hr>";


$bench = new Bench(170,220,75);
$bench->setSeats(6);
$bench->setArmrests(4);
$bench->setLength_opened(320);
$bench->setIs_for_sleeping(true);
$bench->print();
echo "<br>";
echo $bench->sneakpeek();
echo "<br>";
$bench->fullinfo();
echo "<hr>";


$chair = new Chair(65,45,50);
$chair->setIs_for_sitting(true);
$chair->print();
echo "<br>";
echo $chair->sneakpeek();
echo "<br>";
$chair->fullinfo();
echo "<hr>";


$sofa2 = new Sofa(150,200,50);
$sofa2->setSeats(4);
$sofa2->setArmrests(2);
$sofa2->setLength_opened(300);
$sofa2->setIs_for_sleeping(true);
$sofa->print();
echo "<br>";
echo $sofa->sneakpeek();
echo "<br>";
$sofa->fullinfo();
echo "<hr>";

?>