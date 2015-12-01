<?php
/*Sample code to read in test cases:
$fh = fopen($argv[1], "r");
while (true) {
$test = fgets($fh);
# break loop if $test is an empty line
# $test represents the test case, do something with it
}
*/

function batschallenge($data){

    // l = length of the wire
    // d > distance from each other
    // 6cm > distance from the building

    // initialise the return result as integer
    $intResult = 0;
    // explode the data
    $arExploded = explode(" ", $data);
    // length of the wire
    $intWireLen = $arExploded[0];
    // distance of each bat
    $intBatdist = $arExploded[1];
    // number of bats already hanging
    $intBatNumExist = $arExploded[2];
    // lets put the position of the bat already hanging in an array
    $arBatPos = array();    
    for($i = 3; $intBatNumExist > count($arBatPos); $i++ ){

        $arBatPos[] = $arExploded[$i];

    }
    // loop through each number starting from 6
    // while number is less than - 6 of the wire length
    for($i = 6; $i <= ($intWireLen - 6); $i = $i + $intBatdist){
            // add the bat to the wire
            $arAddedBats[] = $i;          
            // loop through each existing bats
            foreach($arBatPos as $oldbat){
                // check if old bat is greater than the newbat + distance
                if( ($oldbat < ($i + $intBatdist))  &&  ($oldbat > $i) ){
                    // remove the new bat
                    array_pop($arAddedBats);                                                    
                    // then add the old bat
                    $arAddedBats[] = $oldbat;
                    // change the number to the position of the new bat
                    $i = $oldbat;                
            }           
        }
    }
    // output the difference
    echo count($arAddedBats) - count($arBatPos);

}


$fh = fopen($argv[1], "r");
while (!feof($fh)) {
    $data = trim(fgets($fh));    
    batschallenge($data);
    echo "\n";
}
?>
