<?php
/*Sample code to read in test cases:
$fh = fopen($argv[1], "r");
while (true) {
$test = fgets($fh);
# break loop if $test is an empty line
# $test represents the test case, do something with it
}
*/

function letterPercentage($data){

    // initialise the number of lower and upper case
    $lower = 0;
    $upper = 0;

    // loop through each letter
    for($i = 0; $i < strlen($data); $i++){

        if(ctype_lower($data[$i])){

            $lower += 1;
        } else {

            $upper += 1;
        }

    }

    $lowerPercentage = number_format(($lower / strlen($data)) *100, 2);
    $upperPercentage = number_format(($upper / strlen($data)) *100, 2);

    echo "lowercase: ".$lowerPercentage." uppercase: ".$upperPercentage;

}

$fh = fopen($argv[1], "r");

while(!feof($fh)){    

    $data = trim(fgets($fh));

    letterPercentage($data);
    echo "\n";    
    

}



?>
