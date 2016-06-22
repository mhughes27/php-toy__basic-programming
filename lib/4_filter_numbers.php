<?php 

// Modify this function to get its tests passing.
// 
// Remember: Don't change the name of the function. Just modify its body.
// 
// Run `bin/check` from the command line to execute the automated tests.

function filterNumbers($arr) {
  // Your code goes here.
	$digits = array();
	foreach ($arr as $i) {
		if ($i < 10){
			array_push($digits, $i);
		}
	}
	return $digits;
}

// Write your own "tests" below. Refer to the the examples from exercise #1.
echo "\nTesting removal of two numbers\n";
if (filterNumbers(array(5, 15, 25)) == array(5)) {
  echo "Success!";
}
else{
  echo "Failed!";
}
echo "\n-------------------------------------------------------------------\n";


echo "\nTesting the removal of 10 with others; the given example.\n";
if (filterNumbers(array(30, 5, 9, 10, 11)) == array(5, 9)) {
  echo "Success!";
}
else{
  echo "Failed!";
}
echo "\n-------------------------------------------------------------------\n";


echo "\nTesting the removal of all numbers.\n";
if (filterNumbers(array(200, 400, 600)) == array()){
  echo "Success!";
}
else{
  echo "Failed!";
}
echo "\n-------------------------------------------------------------------\n";


echo "\nTesting that no numbers area removed\n";
if (filterNumbers(array(9, 8, 7, 6, 5)) == array(9, 8, 7, 6, 5)){
  echo "Success!";
}
else{
  echo "Failed!";
}
echo "\n-------------------------------------------------------------------\n";

echo "\n###################################################################\n";
echo "Tests complete.\n";

?>