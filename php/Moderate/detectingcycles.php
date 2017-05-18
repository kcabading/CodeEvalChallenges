<?php
/*Sample code to read in test cases:
$fh = fopen($argv[1], "r");
while (true) {
$test = fgets($fh);
# break loop if $test is an empty line
# $test represents the test case, do something with it
}
*/


function detectingcycles($data){

    //initialise the return result as string
    $result = "";
    //convert the data into array
    $arrSeries = explode(" ", $data);

    $cyclecount = array_count_values($arrSeries);

    foreach($cyclecount as $key => $value){

        if($value > 1){

            $result .= $key." ";
        }

    }

    trim($result);
    echo $result;

}



$fh = fopen($argv[1], "r");
while(!feof($fh)){    

    $data = trim(fgets($fh));

    detectingcycles($data);
    
    echo "\n";    
    

}


?>
