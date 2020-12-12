<?php

/** @var string FIZZ */
const FIZZ = 'Fizz';

/** @var string BUZZ */
const BUZZ = 'Buzz';

/** @var int $theMaxValue */
$theMaxValue = (empty($argv) || !isset($argv[1]) || !is_numeric($argv[1]))
    ? 20 : intval($argv[1]);

fizzBuzzAndPrintValues(1, $theMaxValue);

/**
 * Print the fizzBuzzedValues
 * 
 * @param int $minValue The min value to fizzBuzz
 * @param int $maxValue The max value to fizzBuzz
 */
function fizzBuzzAndPrintValues(int $minValue, int $maxValue)
{
    for ($i = $minValue; $i <= $maxValue; $i++) {
        echo (fizzBuzzAValue($i) . PHP_EOL);
    }
}

/**
 * Return the processed fizzBuzzAValue for an integer
 * @param int $theValue the integer to process
 * @return int|string the FizzBuzzedValue
 */
function fizzBuzzAValue(int $theValue)
{
    /** @var string $outputVal */
    $outputVal = '';

    if ($theValue % 3 === 0) {
        $outputVal = FIZZ;
    }
    if ($theValue % 5 === 0) {
        $outputVal .= BUZZ;
    }
    if (empty($outputVal)) {
        return $theValue;
    } else {
        return $outputVal;
    }
}