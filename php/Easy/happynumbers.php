<?php
/*Sample code to read in test cases:
$fh = fopen($argv[1], "r");
while (true) {
$test = fgets($fh);
# break loop if $test is an empty line
# $test represents the test case, do something with it
}
*/


function checkhappy($number){
    
    static $try = 0;
    $total = 0;
    for($i = 0; $i<strlen($number); $i++){
        
        $total += pow($number[$i], 2);                       
    
    }

        
    if($total!=1){        
                
        $try++;        
        if($try==100){
        
            echo 0;
            $try = 0;
            return;
            
            
        }        
        settype($total, 'string');
        checkhappy($total);               
    }
    
    else{
    
        echo 1;
        return;
    
    }    

}







$fh = fopen($argv[1], "r");

while(!feof($fh)){

    $line = fgets($fh);
    $line = trim($line);
    
    checkhappy($line);  
            
    echo "\n";
    


}


?>
