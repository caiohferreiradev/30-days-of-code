<?php
$handle = fopen ("php://stdin","r");
$i = 4;
$d = 4.0;
$s = "HackerRank ";

// Variables declaration
$intVariable = intval(fgets(STDIN));
$doubleVariable = floatval(fgets(STDIN));
$stringVariable = fgets(STDIN);

// Operations
$sumInt = $i + $intVariable;
$sumDouble = $d + $doubleVariable;

// Print the results
echo "$sumInt\n$sumDouble\n$s$stringVariable";

fclose($handle);
?>
