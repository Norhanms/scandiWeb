<?php
//abstract class is a class that is not able to have objects
//any class that contains at least one abstract method 
//must also be abstract
abstract class Products
{
    protected $SKU;
    protected $name;
    protected $price;
    protected $type;
    public function __construct($SKU,$name, $price)
    {
        $this->SKU = $SKU;
        $this->name = $name;
        $this->price = $price;
    }

    abstract public function setSpecificFeature($feature);
    abstract public function getSpecificFeature();
    abstract public function printSpecificFeature();
    abstract public function setType();
    //===========================================
    //common methods
    public function getName()
    {
        return $this->name;
    }
    public function getSKU()
    {
        return $this->SKU;
    }
    public function getPrice()
    {
        return $this->price;
    }
     public function getType(){
        return $this->type;
    }
}

//=========================================================

class Book extends Products
{
    //product-specific attributes
    //Weight (in Kg) for Book
     protected $wieght; //(in Kg) 
    public function setType(){
        $this->type="Book";
        
    }

    public function setSpecificFeature($wieght)
    {
        $this->wieght = $wieght;
    }
    public function getSpecificFeature()
    {
        return $this->wieght;
    }
    public function printSpecificFeature(){
        return $this->wieght." Kg";

    }
   


}
//=======================================================
class DVDdisc extends Products{
    //product-specific attributes
    //Weight (in Kg) for Book
    protected $size; //(in MG) 
    public function setType(){
        $this->type="DVD-Disc";
    }

    public function setSpecificFeature($size)
    {
        $this->size = $size;
    }
    public function getSpecificFeature()
    {
        return $this->size;
    }
    public function printSpecificFeature(){
        return $this->size." MG";

    }
     
}
//=========================================

class Furniture extends Products{
    //product-specific attributes
    //Weight (in Kg) for Book
    protected  $height;
    protected $width;
    protected $length;
    protected $dimensions;
    public function setType(){
        $this->type="Furniture";
    }
    

    public function setSpecificFeature($height=0,$width=0,$length=0)
    {
        $this->height=$height;
        $this->width=$width;
        $this->length=$length;
    }
    public function getSpecificFeature()
    {
        $this->dimensions=array("height"=>$this->height,"width"=>$this->width,"length"=>$this->length);
        return $this->dimensions;
    }
    public function printSpecificFeature(){
        return "height= ".$this->height." CM </br>"."width= ".$this->width.
        " CM </br>"."length= ".$this->length." CM";

    }
    //setter and getter
    public function setHeight($height){
        $this->height;
    }
     public function setWidth($width){
        $this->width;
    }
     public function setLength($length){
        $this->length;
    }
     
    //getters
     public function getHeight(){
       return $this->height;
    }
     public function getWidth(){
       return $this->width;
    }
     public function getLength(){
       return $this->length;
    }
}
