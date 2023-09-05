<?php
include "test.php";

$b = new Book( "sku_nnn","Gone with name", 120);
$b->setType();
echo "Type= ".$b->getType();
echo "</br>";
echo "SKU= ".$b->getSKU();
echo "</br>";
echo "name= ".$b->getName();
echo "</br>";
echo "price= ".$b->getPrice()."$";
echo "</br>";
$b->setSpecificFeature(20);
echo $b->printSpecificFeature();

echo "</br>========================</br>";
$dvd1=new DVDdisc("sku_dvd","dvd disc1",9);
$dvd1->setType();
echo "Type= ".$dvd1->getType();
echo "</br>";
echo "SKU= ".$dvd1->getSKU();
echo "</br>";
echo "name= ".$dvd1->getName();
echo "</br>";
echo "price= ".$dvd1->getPrice()."$";

echo "</br>";
$dvd1->setSpecificFeature(700);
echo $dvd1->printSpecificFeature();

echo"</br>================================</br>";
$f1=new Furniture("SKU_table_round","Round table", 220);
$f1->setType();
echo "Type= ".$f1->getType();
echo "</br>";
echo "SKU= ".$f1->getSKU();
echo "</br>";
echo "name=".$f1->getName();
echo "</br>";
$f1->setSpecificFeature(12,14,10);
echo $f1->printSpecificFeature();
echo "</br>";
$dimensions=$f1->getSpecificFeature();
print_r($dimensions);
echo "</br>";
//$list('height'=> $h,'width'=> $w,'length'=> $l)=$dimensions;
extract($dimensions);
//print_r($height);
echo "dimensions=$height*$width*$length</br>";
echo "dimensions=".$height*$width*$length ."</br>";
echo implode(" ",$dimensions);