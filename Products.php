<?php
//abstract class is a class that is not able to have objects
//any class that contains at least one abstract method 
//must also be abstract
abstract class Products
{
    protected $name;
    protected $SKU;
    protected $price;
    protected $type;
    public function __construct($name, $SKU, $price)
    {
        $this->name = $name;
        $this->SKU = $SKU;
        $this->price = $price;
    }
    //unique for each one
    abstract public function setType();
    abstract public function getType(): string;
    //===========================================
    //common methods
    public function getName()
    {
        return $this->name;
    }
    public function getSKU(): string
    {
        return $this->SKU;
    }
    public function getPrice(): float
    {
        return $this->price;
    }
}
class DVDdisc extends Products
{
    //product-specific attributes
    protected $size; //(in MB) for DVD-disc (int)
    public function setType()
    {
        $this->type = "DVD-disc";
    }
    public function getType(): string
    {
        return  $this->type;
    }
    // only for DVD-disc class
    public function setSize(int $size)
    {
        $this->size = $size;
    }
    public function getSize(): int
    {
        return $this->size;
    }
    public function print_size()
    {
        return $this->getsize() . " MG";
    }
}
//=========================================================

class Book extends Products
{
    //product-specific attributes
    protected $weight; //(in Kg) 
    public function __construct($name, $SKU, $price, $weight)
    {
        parent::__construct($name, $SKU, $price);
        $this->weight = $weight;
    }
    public function setType()
    {
        $this->type = "Book";
    }
    public function getType(): string
    {
        return  $this->type;
    }
    // only for book class
    public function setWeight(int $weight)
    {
        $this->weight = $weight;
    }
    public function getWeight(): int
    {
        return $this->weight;
    }
    public function print_weight()
    {
        return $this->getWeight() . " Kg";
    }
}

//=========================================================

//main
$dvdDisc1 = new DVDdisc("DVD Album name 1", "SKU_DVD1", 123.4);
$dvdDisc1->setType("DVD-Disc");
echo "Type =" . $dvdDisc1->getType();
echo "</br>";
echo $dvdDisc1->getName();
echo "</br>";
echo $dvdDisc1->getSKU();
echo "</br>";
echo $dvdDisc1->getPrice();
echo "</br>";
$dvdDisc1->setSize(23);
echo "</br>";
echo $dvdDisc1->print_size();
//=======================================

echo "</br>====================Books=================</br>";
$book1 = new Book("Gone with the wind", "book_SKU_1", 120, 200);

$book1->setType();
echo "</br>";
echo "type=" . $book1->getType();
echo "</br>";
echo "name= " . $book1->getName();
echo "</br>";
echo "SKU = " . $book1->getSKU();

echo "</br>";
echo "price= " . $book1->getPrice();
echo "</br>";
echo "weight= " . $book1->print_weight();
