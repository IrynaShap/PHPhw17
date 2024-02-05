<?php

function raiseToPower(float $number, int $power): float // PSR-12: 4.4/4.5 - Відповідне форматування аргументів функції
{
    return $number ** $power; // PSR-12: 6.2 - Пробіли навколо оператора піднесення до ступеня
}

function raiseToPowerReference(float &$number, int $power): void // PSR-12: 4.4/4.5 - Використання посилань в аргументах функції згідно зі стандартом
{
    $number = $number ** $power; // PSR-12: 6.2 - Пробіли навколо операторів присвоєння та піднесення до ступеня
}

function getNumericInput(): float|int // PSR-12: 4.4/4.5 - Використання об'єднаного типу повернення
{
    $number = trim(fgets(STDIN)); // PSR-12: 6.2 - Пробіли навколо оператора присвоєння
    if (!is_numeric($number)) { // PSR-12: 5.1 - Відповідне форматування умовних конструкцій
        echo "Ви ввели не число!\n";
        exit;
    }
    return $number;
}