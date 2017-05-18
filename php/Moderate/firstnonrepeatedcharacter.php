<?php
/*Sample code to read in test cases:
$fh = fopen($argv[1], "r");
while (true) {
$test = fgets($fh);
# break loop if $test is an empty line
# $test represents the test case, do something with it
}
*/

function firstnonrepeating($data){

    // initialise the return result as a string
    $firstnonrepeating = "";
    // convert the input data as array
    $arrLetters = array();
    for($i = 0; $i < strlen($data); $i++){

        $arrLetters[] = $data[$i];
    }

    $values = array_count_values($arrLetters);
    
    foreach($values as $key => $value){

        if($value == 1){

            echo $key;
            return;
        } 

    }    
    


}



$fh = fopen($argv[1], "r");
while(!feof($fh)){    

    $data = trim(fgets($fh));

    firstnonrepeating($data);
    echo "\n";    
    

}





?>
