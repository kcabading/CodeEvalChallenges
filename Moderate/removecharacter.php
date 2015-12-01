<?php
/*Sample code to read in test cases:
$fh = fopen($argv[1], "r");
while (true) {
$test = fgets($fh);
# break loop if $test is an empty line
# $test represents the test case, do something with it
}
*/


function removeChar($line){
    
    
    $split = explode(",",$line);
    
    $word = $split[0];
    $letter = $split[1];
    $i = 0;
    
    while($i < strlen($letter)){
        
        if( $pos = strpos($word, $letter[$i]) !== false )
        {
            
            $word = str_replace($word[$pos], "", $word);
            
        }
        
        $i++;
        
    }
    
    echo $word;
    
    
}




$fh = fopen($argv[1], "r");

while(!feof($fh)){
    
    $line = trim(fgets($fh));
    
    removeChar($line);
    
    echo "\n";
    
}



?>
