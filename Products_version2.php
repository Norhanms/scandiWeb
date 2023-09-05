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
    //unique for each one (abstract methods)
    abstract public function setType();
    abstract public function getType(): string;
    abstract public function setSpecificFeature($feature);
    abstract public function getSpecificFeature(): int;
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
//==============================================
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
    public function setSpecificFeature($size)
    {
        $this->size = $size;
    }
    public function getSpecificFeature(): int
    {
        return $this->size;
    }
}
//=========================================================

class Book extends Products
{
    //product-specific attributes
    protected $weight; //(in Kg) 

    // only for book class
    public function setType()
    {
        $this->type = "Book";
    }
    public function getType(): string
    {
        return  $this->type;
    }
    public function setSpecificFeature($weight)
    {
        $this->weight = $weight;
    }
    public function getSpecificFeature(): int
    {
        return $this->weight;
    }
}

//=========================================================

//main
/*
$dvdDisc1 = new DVDdisc("DVD Album name 1", "SKU_DVD1", 123.4);
$dvdDisc1->setType("DVD-Disc");
echo "Type =" . $dvdDisc1->getType();
echo "</br>";
echo $dvdDisc1->getName();
echo "</br>";
echo $dvdDisc1->getSKU();
echo "</br>";
echo $dvdDisc1->getPrice();
*/
//=======================================

$book1 = new Book("mmmm", "mmmsku", 333);
echo "</br>====================Books=================</br>";
//$book1 = new Book("Gone with the wind", "book_SKU_1", 120);

$book1->setType();
echo "</br>";
echo "type=" . $book1->getType();
echo "</br>";
echo "name= " . $book1->getName();
echo "</br>";
echo "SKU = " . $book1->getSKU();
echo "</br>";
echo "price = " . $book1->getPrice();
echo "</br>";
$book1->setSpecificFeature(300);
echo "weight = " . $book1->getSpecificFeature();
