<?php

// Project 4: Simple Electricity Bill Calculator
// Make a PHP script to calculate the electricity bill based on the number of units entered.

// If units are less than or equal to 50: bill = units * 3.50
// If units are less than or equal to 100: bill = 50 * 3.50 + (units - 50) * 4.00
// If units are less than or equal to 200: bill = 50 * 3.50 + 50*  4.00 + (units - 100) * 5.20
// If units are more than 200 means else case: bill = 50* 3.50 + 50 * 4.00 + 100 * 5.20 + (units - 200) * 6.50

// Show the total amount clearly with a message.



$unit = 250;
$bill = 0;

if( $unit <= 50 && $unit > 0 ) {

    $bill = $unit * 3.50;
    echo "Your Electricity Bill = $bill Taka.\n";

}elseif( $unit <= 100 && $unit > 50 ){

    $bill = 50 * 3.50 + ($unit - 50) * 4.00;
    echo "Your Electricity Bill = $bill Taka.\n";

}elseif( $unit <= 200 && $unit > 100 ){

    $bill = 50 * 3.50 + 50 * 4.00 + ($unit - 100) * 5.20;
    echo "Your Electricity Bill = $bill Taka.\n";

}elseif( $unit > 200 ){

    $bill = 50 * 3.50 + 50 * 4.00 + 100 * 5.20 + ($unit - 200) * 6.50;
    echo "Your Electricity Bill = $bill Taka.\n";

}