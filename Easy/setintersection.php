<?php
/*Sample code to read in test cases:
$fh = fopen($argv[1], "r");
while (true) {
$test = fgets($fh);
# break loop if $test is an empty line
# $test represents the test case, do something with it
}
*/

$fh = fopen($argv[1], "r");

while(!feof($fh)){
    $numbers = trim(fgets($fh));
    $list = explode(";", $numbers);
    $listitem1 = explode(",", $list[0]);
    $listitem2 = explode(",", $list[1]);
    $intersect = array_intersect($listitem1,$listitem2);
    if(count($intersect)!=0){
        $result = '';
        foreach($intersect as $intersect){
            $result .= $intersect.",";
        }
        
        $result = rtrim($result,",");
        echo "$result\n";
    
    }else{
        echo "\n";
    }
    


}


?>
