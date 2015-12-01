<?php
/*Sample code to read in test cases:
$fh = fopen($argv[1], "r");
while (true) {
$test = fgets($fh);
# break loop if $test is an empty line
# $test represents the test case, do something with it
}
*/

$arAlphabets = array(
                    0 => "a",
                    1 => "b",
                    2 => "c",
                    3 => "d",
                    4 => "e",
                    5 => "f",
                    6 => "g",
                    7 => "h",
                    8 => "i",
                    9 => "j",
                    10 => "k",
                    11 => "l",
                    12 => "m",
                    13 => "n",
                    14 => "o",
                    15 => "p",
                    16 => "q",
                    17 => "r",
                    18 => "s",
                    19 => "t",
                    20 => "u",
                    21 => "v",
                    22 => "w",
                    23 => "x",
                    24 => "y",
                    25 => "z"
                    );

function beautifulstrings($data){

    global $arAlphabets;
    // inialise the beauty of the string as integer
    $intBeauty = 0;    
    // assign each letter of the string to an array
    $arEachLetter = array();
    for($i = 0; $i < strlen($data); $i++){
        // lets add the value only if its in alphabet
        if(in_array($data[$i], $arAlphabets)){
            $arEachLetter[] = $data[$i];
        }                
        
    }    
    // lets count the duplicate letter
    $arLetterDuplicates = array_count_values($arEachLetter);
    // lets reverse sort the array so we can start with the most number of duplicates
    rsort($arLetterDuplicates);
    // loop through each duplicates
    $beauty = 26;
    foreach($arLetterDuplicates as $letter=>$times){
        //multiply the beauty times the number of times the letter occured
        $intBeauty += $times * $beauty;
        $beauty--;
    }  
    // output the result
    echo $intBeauty; 

}



$fh = fopen($argv[1],"r");

while(!feof($fh)){    

    $data = strtolower(trim(fgets($fh)));  
    
     beautifulstrings($data);
     echo "\n";  
    
    

}





?>
