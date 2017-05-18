<?php
/*Sample code to read in test cases:
$fh = fopen($argv[1], "r");
while (true) {
$test = fgets($fh);
# break loop if $test is an empty line
# $test represents the test case, do something with it
}
*/


function shortest_repetition($data){

    //convert the input string to array
    $arInputData = array();

    for($i =0; $i< strlen($data); $i++){

        $arInputData[] = $data[$i];
    }    

    $arCountValues = array_count_values($arInputData);

    echo count($arCountValues);


}

$fh = fopen($argv[1], "r");

while(!feof($fh)){    


    $data = trim(fgets($fh));    

    shortest_repetition($data);
    echo "\n";    


}



?>
