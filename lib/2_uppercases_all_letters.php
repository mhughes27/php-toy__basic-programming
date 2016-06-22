<?php 

// Modify this function to get its tests passing.
// 
// Remember: Don't change the name of the function. Just modify its body.
// 
// Run `bin/check` from the command line to execute the automated tests.

function uppercasesAllLetters($str) {
  // Your code goes here.
	$str = strtoupper($str);
	return $str;
}

// Write your own "tests" below. Refer to the the examples from exercise #1.

echo "\nTesting that dog is now DOG.\n";
if (uppercasesAllLetters("dog") == "DOG") {
  echo "Success!";
}
else{
  echo "Failed!";
}
echo "\n-------------------------------------------------------------------\n";


echo "\nTesting that Omaha, NE is now OMAHA, NE.\n";
if (uppercasesAllLetters("Omaha, NE") == "OMAHA, NE") {
  echo "Success!";
}
else{
  echo "Failed!";
}
echo "\n-------------------------------------------------------------------\n";


echo "\nTesting that WOW id now WOW\n";
if (uppercasesAllLetters("WOW") == "WOW") {
  echo "Success!";
}
else{
  echo "Failed!";
}
echo "\n-------------------------------------------------------------------\n";

echo "\n###################################################################\n";
echo "Tests complete.\n";


?>
