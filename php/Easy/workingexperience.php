<?php
/*Sample code to read in test cases:
$fh = fopen($argv[1], "r");
while (true) {
$test = fgets($fh);
# break loop if $test is an empty line
# $test represents the test case, do something with it
}
*/

function workingexperience($data){


    $arAllDates = array();
    $result = 0;
    // explode the dates
    $arDates = explode(";", $data);

    
    foreach($arDates as $date){                
         preg_match_all("|[0-9]{4}|", $date, $matches);
         $i =0;

         foreach($matches[$i] as $match){
            settype($match, "integer");
            $arAllDates[] = $match;            
            $i++;
         }                  
    }


    for($i = 0; $i < count($arAllDates); $i++){

        $x = $i;
        if( (($x + 1) % 2 == 0)){            
            $endDates[] = $arAllDates[$i];            
        } else {

            $startDates[] = $arAllDates[$i];            
        }

    }

    for($i =0; $i < count($startDates); $i++){

        $result += $endDates[$i] - $startDates[$i];

    }

    echo $result;
    
    
    


}




$fh = fopen($argv[1], "r");

while (!feof($fh)) {

    $data = trim(fgets($fh));    
    workingexperience($data);
    echo "\n";
    
    
}



?>
