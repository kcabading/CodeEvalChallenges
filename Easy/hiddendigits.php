<?php
/*Sample code to read in test cases:
$fh = fopen($argv[1], "r");
while (true) {
$test = fgets($fh);
# break loop if $test is an empty line
# $test represents the test case, do something with it
}
*/

$hiddenDigits = array("a"=>0,"b"=>1,"c"=>2,"d"=>3,"e"=>4,"f"=>5,"g"=>6,"h"=>7,"i"=>8,"j"=>9);

function findhidden($linedata){

    global $hiddenDigits;    
    $results = '';

    
    $i = 0;
    while($i < strlen($linedata)){
    
            
        foreach($hiddenDigits as $key=>$value){
            
                if($linedata[$i] == $key){
                
                    $results .= $value;                
                }
                                                    
        }
        
        
        if(is_numeric($linedata[$i])){
        
            $results .= $linedata[$i];
        
        }
                                
        $i++;    
            
    }
    
    return $results;
        
}




$fh = fopen($argv[1], "r");

while(!feof($fh)){
    
    $linedata = trim(fgets($fh));
    
    $results = findhidden($linedata);    
    
    if($results){
    
        echo $results;
    
    }
    else{
    
        echo "NONE";
    }
    
    echo "\n";

}


?>

?>
