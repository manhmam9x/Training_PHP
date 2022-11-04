<?php

abstract class Country
{
    protected $slogan;

    public function getSlogan()
    {
        return $this->slogan;
    }

    public function setSlogan($slogan)
    {
        $this->slogan = $slogan;
    }

    public function sayHello(){

    }
}

interface Boss{
    public function checkValidSlogan();
}

class EnglandCountry extends Country{
    public function getSlogan()
    {
        echo $this->slogan;
    }
}

class VietnamCountry extends Country{
    public function getSlogan()
    {
        echo $this->slogan;
    }
}

class EnglandCountry implements Boss{

    const england = true;

    public function checkValidSlogan()
    {
       return self::;
    }
}

class VietnamCountry implements Boss{
    const vietnam = true;

    public function checkValidSlogan()
    {
        return self::;
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




