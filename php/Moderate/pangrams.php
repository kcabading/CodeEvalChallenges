<?php
/*Sample code to read in test cases:
$fh = fopen($argv[1], "r");
while (true) {
$test = fgets($fh);
# break loop if $test is an empty line
# $test represents the test case, do something with it
}
*/




function checkmissing($sentence){
    
    $alphabet = array("a","b","c","d","e","f","g","h","i","j","k","l","m","n","o","p","q","r","s","t","u","v","w","x","y","z");
    $result=array();
    
    //loop through each letter of the sentence
    for($i=0; $i< strlen($sentence); $i++){
        
        if(ctype_alpha($sentence[$i])){
            $result[] = strtolower($sentence[$i]);
        }
    }    
    
    
    $diff = array_diff($alphabet, $result);
    
    if($diff){
        
        sort($diff);
        
        foreach($diff as $diff){
            
            echo $diff;
            
        }    
        
    }
    else{
       
            echo "NULL";
        
    }
    
    
    
    }


$fh = fopen($argv[1], "r");
while (!feof($fh)) {

    $sentence = trim(fgets($fh));
    checkmissing($sentence);
    echo "\n";
    

}



?>
