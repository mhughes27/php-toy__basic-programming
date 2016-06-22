<?php 

// Modify this function to get its tests passing.
// 
// Remember: Don't change the name of the function. Just modify its body.
// 
// Run `bin/check` from the command line to execute the automated tests.

function addUpNumbers($arr) {
  $total = array_sum($arr);
  return $total;
}

echo "\nTesting the sum of an array with three integers\n";
if (addUpNumbers([3, 6, 9]) == 18) {
  echo "Success!";
}
else{
  echo "Failed!";
}
echo "\n-------------------------------------------------------------------\n";


echo "\nTesting the sum of a single integer.\n";
if (addUpNumbers([27]) == 27) {
  echo "Success!";
}
else{
  echo "Failed!";
}
echo "\n-------------------------------------------------------------------\n";


echo "\nTesting the sum of an array with many integers.\n";
if (addUpNumbers([1, 2, 3, 4, 5, 6, 7, 8, 9, 91, 92, 93, 94, 95, 96, 97, 98, 99]) == 900) {
  echo "Success!";
}
else{
  echo "Failed!";
}
echo "\n-------------------------------------------------------------------\n";


echo "\nTesting the sum of rationals.\n";
if (addUpNumbers([1.2, 3.4, 5.6]) == 10.2) {
  echo "Success!";
}
else{
  echo "Failed!";
}
echo "\n-------------------------------------------------------------------\n";

echo "\n###################################################################\n";
echo "Tests complete.\n";
?>
