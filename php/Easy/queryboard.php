<?php
/*Sample code to read in test cases:
$fh = fopen($argv[1], "r");
while (true) {
$test = fgets($fh);
# break loop if $test is an empty line
# $test represents the test case, do something with it
}
*/

$board = array();
$sum = 0;

function SetRow($i, $x){
    
    global $board;
    
    if($i<256 && $x <= 32){
        
        for($a = 0; $a< 256; $a++){
        
            $board[$i][$a] = $x;        
        }            
    }

}

function SetCol($j, $x){
        
    global $board;
    
    if($j<256 && $x <= 32){
        
        for($a = 0; $a< 256; $a++){
        
            $board[$a][$j] = $x;        
        }            
    }    

}

function QueryRow($i){
    
    global $board;
    global $sum;
    $a = 0;
    
        
        foreach($board[$i] as $number){
        
            $sum += $number;  
            $a++;
        }
        
        
        echo $sum;
        echo "\n";
        
    

}

function QueryCol($j){
    
    global $board;
    global $sum;
    $a = 0;    

    foreach($board as $number){
        
        if(array_key_exists($j, $number)){
                 
                $sum += $number[$j];  
              
        }
          $a++;
             
    } 
    
    echo $sum; 
    echo "\n";

}


$fh = fopen($argv[1], "r");

while(!feof($fh)){

    $query = fgets($fh);    
    $query = trim($query);
    $query = explode(" ", $query);    
    
    if($query[0]=='SetRow'){
    
        SetRow($query[1],$query[2]);
                    
    }        
    elseif($query[0]=='SetCol'){
    
        SetCol($query[1],$query[2]);
                    
    }
    elseif($query[0]=='QueryRow'){
    
        QueryRow($query[1]);        
                    
    }       
    else{
    
        QueryCol($query[1]);
        
    }                
    $sum = 0;

}


?>
