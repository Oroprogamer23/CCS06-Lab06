<?php

// Check if both arguments are provided
if (count($argv) != 3) {
    echo "Usage: php agecli.php <name> <birth year>\n";
    exit(1);
}

$name = $argv[1];
$birthYear = $argv[2];

// Compute age
$age = date('Y') - $birthYear;

// Check if already a voter
if ($age >= 18) {
    echo "You are a voter\n";
}

// Check if already a senior citizen
if ($age >= 60) {
    echo "You are a senior citizen\n";
}

echo "Your name is $name, and your age is $age years old\n";

?>