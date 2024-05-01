<?php

/* if we do  $car = Beetle or, Astra  it works because they inherit Car */

// $car = new Car();
// $car = new Astra();
$car = new Beetie();


$drier = new Driver($car);


$drier->go();