<?php
// Declare variables
$intVariable = 0;
$doubleVariable = 0.0;
$stringVariable = "";

// Read input from stdin
$intVariable = intval(trim(fgets(STDIN)));
$doubleVariable = floatval(trim(fgets(STDIN)));
$stringVariable = trim(fgets(STDIN));

// Perform the operations
$sumInt = $i + $intVariable;
$sumDouble = $d + $doubleVariable;

// Print the results
echo $sumInt . "\n";
echo number_format($sumDouble, 1) . "\n";
echo $s . $stringVariable;

fclose($handle);
?>
