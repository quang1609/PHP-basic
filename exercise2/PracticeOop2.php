<?php
trait Active
{
	public function defindYourSelf()
    {
        return get_class($this);
    }
}

abstract class Country  
{
	use Active;

    protected $slogan;
    abstract function sayHello();
    public function getSlogan()
    {
        return $this->slogan;
    }

    public function setSlogan($slogan)
    {
        $this->slogan = $slogan;
    }
}

interface Boss
{
    public function checkValidSlogan();
}

class EnglandCountry extends Country implements Boss 
{
    public function sayHello() 
    {
        echo 'Hello';
    }
    
    public function checkValidSlogan()
    {
        $check1 = strpos(strtolower($this->getSlogan()), 'england');
        $check2 = strpos(strtolower($this->getSlogan()), 'english');
        if($check1 !== false || $check2 !== false) {
        	return true;
        } else {
            return false;
        }
    }
}

class VietnamCountry extends Country implements Boss 
{
    public function sayHello() 
    {
        echo 'Xin chào';
    }

    public function checkValidSlogan()
    {
        $check1 = strpos(strtolower($this->getSlogan()), 'vietnam');
        $check2 = strpos(strtolower($this->getSlogan()), 'hust');
        if($check1 !== false && $check2 !== false) {
        	return true;
        } else {
            return false;
        }
    }
}
$englandCountry = new EnglandCountry();
$vietnamCountry = new VietnamCountry();

$englandCountry->setSlogan('England is a country that is part of the United Kingdom. It shares land borders with Wales to the west and Scotland to the north. The Irish Sea lies west of England and the Celtic Sea to the southwest.');

$vietnamCountry->setSlogan('Vietnam is the easternmost country on the Indochina Peninsula. With an estimated 94.6 million inhabitants as of 2016, it is the 15th most populous country in the world.');

$englandCountry->sayHello(); // Hello
echo "<br>";
$vietnamCountry->sayHello(); // Xin chao

echo "<br>";

var_dump($englandCountry->checkValidSlogan()); // true
echo "<br>";
var_dump($vietnamCountry->checkValidSlogan()); // false

echo "<br>";

echo 'I am ' . $englandCountry->defindYourSelf(); 
echo "<br>";
echo 'I am ' . $vietnamCountry->defindYourSelf(); 

