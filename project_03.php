<?php
// Project 3: Basic Auth System
// Create a PHP script with a hardcoded username and password.

// Set variables like $username = "admin" and $password = "1234".

// Create another sets of variable with inputUsername and inputPassword.

// Check if both match, show "Login Successful", otherwise show "Invalid username or password".

// Saved on Database
$username = "admin";
$password = "1234";

// User input
$inputUsername = "admin";
$inputPassword = "1234";

if($inputUsername == $username && $inputPassword == $password)
    echo "Login Successful.\n";
else
    echo "Invalid username or password.\n";

