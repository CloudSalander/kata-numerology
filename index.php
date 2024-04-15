<?php
define("EXIT_CODE",-1);

function sumFigures(int $number): int {
    if (intdiv($number,10) == 0) return $number;
    else return $number%10 + sumFigures(intdiv($number,10));
}

function reduceNumber(int $number): int {
    $sum_figures = $number;
    while ($sum_figures > 9) {
        $sum_figures = sumFigures($number);
        $number = $sum_figures;
    }
    return $sum_figures;
}

function getNumberMeaning(int $number): string {
    return match($number) {
        0 => 'el tot',
        1 => 'individualitat',
        2 => 'dualidad',
        3 => 'raó',
        4 => 'estabilitat',
        5 => 'amor',
        6 => 'destrucció',
        7 => 'saviessa',
        8 => 'poder',
        9 => 'generositat'
    };
}

function printNumberMeaning(int $number): void {
    $reduced_number = reduceNumber($number);
    echo getNumberMeaning($reduced_number).PHP_EOL;
}

$num = 0;
while($num != EXIT_CODE) {
    $num = readline("Tell me a number! :)");
    //TODO: Input validation, now we are assuming that its a number!
    printNumberMeaning(intval($num));
}

?>