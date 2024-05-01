<?php

echo "Interface Segregation";

$bird = new Penguin();
/* if Penguin  does not need Birdinterface and we dont use it 
also, penguin does not fly 
*/

$bird->fly();

