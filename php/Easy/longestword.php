<?php


function checklongest($sentence){
    
    $longest = "";
    $word_array = explode(' ', $sentence);
    for($i = 0; $i < count($word_array) ; $i++){
        if(strlen($word_array[$i]) > strlen($longest)){
            $longest = $word_array[$i];
        }
    }
    echo $longest;
    
}





$fh = fopen($argv[1], "r");
while(!feof($fh)) {

    $sentence = trim(fgets($fh));
        
    # //call a function to check the longest word 
    checklongest($sentence);
    echo "\n";

# break loop if $test is an empty line
# $test represents the test case, do something with it
}



?>
