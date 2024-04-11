<?php
define("EXIT_CODE",-1);

function sumFigures(int $number): int {

}

function reduceNumber(int $number): int {

}

function getNumberMeaning(int $number): string {
    
}

function printNumberMeaning(int $number): void {

}

$num = 0;
while($num != EXIT_CODE) {
    $num = readline("Tell me a number! :)");
    //TODO: Input validation, now we are assuming that its a number!
    getNumberMeaning(intval($num));
}

?>