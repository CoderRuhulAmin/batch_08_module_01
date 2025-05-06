<?php 

// Project 1: Number Classifier
// Make a PHP script that checks a number. First, check if the number is positive or negative. Then, check if the number is even or odd.

// Take input or define variable

// Show output like: "The number -4 is Negative and Even".\



// ======= positive or negative =======
$num = 0;

if ($num == 0) {
    print("The number $num is Zero/None Negative.\n");
    echo "<br>";
} elseif( $num > 0) {  
    print("The number $num is Positive.\n");
    echo "<br>";
} elseif( $num < 0) {
    print("The number $num is Negative.\n");
    echo "<br>";
}


// ======= even or odd =======
$isEven = false;

if( $num % 2 == 0 ) {
    $isEven = true;
}

( $isEven ) ? printf("The number %d is Even.\n", $num ) : printf("The number %d is Odd.\n", $num );
