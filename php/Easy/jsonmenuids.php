<?php
/*Sample code to read in test cases:
$fh = fopen($argv[1], "r");
while (true) {
$test = fgets($fh);
# break loop if $test is an empty line
# $test represents the test case, do something with it
}
*/

function addmenuids($data){

    // initialise return integer result
    $result = 0;
    $arrMenu = json_decode($data, TRUE);

    foreach($arrMenu['menu']['items'] as $item){

        if(isset($item['label'])){
             settype($item['id'], "integer");
             $result += $item['id'];
        }

    }

    echo $result;

}




$fh = fopen($argv[1], "r");
while(!feof($fh)){    

    $data = fgets($fh);

    addmenuids($data);
    echo "\n";    

}



?>
