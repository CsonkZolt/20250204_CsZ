<?php
    echo "Hello world <pre>";
    $valtozo1 = 1;
    $valtozo1 = "qwe";
    $valtozo1 = false;

    if($valtozo1 === false){
        echo "Változó hamis";
    }else{
        echo "Változó igaz";
    }

    for ($i=0; $i < 10; $i++) { 
        echo "<br>i: $i";
    }

    $tomb1 = array(1,2,3,4);
    $tomb2 = ["elsoelem" ,true,15];

     echo "<br>";
    var_dump($tomb1,$tomb2);

    function fuggveny(int $a, int $b): int
    {
        return $a+$b;
    }
    echo fuggveny(true,12);

    include_once 'Car.php';

    $auto = new Car("Ford","Barna", 2019);
    $auto->szin = "piros";
    $auto->setMarka("Skoda");
    var_dump($auto);
    include_once 'SportCar.php';

    $sportcar = new SportCar("Ford","Barna", 2020);
    $sportcar->setKobcenti(5500);
    var_dump($sportcar);

    echo "sport auto szine: ", $sportcar->szin,"<br>";
    echo "sport auto köbcentije: ", $sportcar->getKobcenti(),"<br>";

    echo "kobcenti: ",$sportcar->setKobcenti(2000)->getKobcenti(),"<br>";