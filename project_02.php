<?php 

// Project 2: Temperature Converter
// Make a PHP script that takes temperature input or static variable and converts it between Celsius and Fahrenheit.

// Celsius to Fahrenheit: (celsius * 9/5) + 32


// Fahrenheit to Celsius: (fahrenheit - 32) * 5/9


// ======= Celsius to Fahrenheit =======

$inputCelsius = 1.8;
$resultToFahrenheit = ($inputCelsius * 9/5) + 32;

echo "$inputCelsius Degree Celsius to Fahrenheit: $resultToFahrenheit degree.\n";
echo "<br>\n";


// ======= Fahrenheit to Celsius =======

$inputFahrenheit = 35.24;
$resultToCelsius = ($inputFahrenheit - 32) * 5/9;

echo "$inputFahrenheit Degree Fahrenheit to Celsius: $resultToCelsius degree.\n";
echo "<br>\n";

