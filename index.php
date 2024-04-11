<?php
define("EXIT_CODE",-1);

function sumFigures(int $number): int {
    $sum = 0;
    while(($number / 10) > 0) {
        $sum += $number % 10;
        $number /= 10;
    }
    return $sum + $number % 10;
}

function reduceNumber(int $number): int {
    $sum_figures = $number;
    while ($sum_figures >= 10) {
        $sum_figures = sumFigures($number);
    }
    return $sum_figures;
}

function getNumberMeaning(int $number): void {
    
}

function printNumberMeaning(int $number): void {
    $reduced_number = reduceNumber($number);
    var_dump($reduced_number);
}

$num = 0;
while($num != EXIT_CODE) {
    $num = readline("Tell me a number! :)");
    //TODO: Input validation, now we are assuming that its a number!
    printNumberMeaning(intval($num));
}

?>