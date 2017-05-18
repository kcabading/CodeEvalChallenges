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
while (!feof($fh)) {

    $fibonaccinumber = fgets($fh);
    $i = 1;
    $x = 0;
    $y = 1;
    $array = array();    
    
    if($fibonaccinumber == 1){
    
       
        echo "1\n";
    
    }
    
    elseif($fibonaccinumber == 0){
    
        echo "0\n";
    
    }
    
    else{
        
          
        while($i<$fibonaccinumber){
                                    
            $z = $x + $y;  
            $array[$i] = $z;
            $x = $y;
            $y = $z;                        
            $i++;    
        }
                    
        $size = count($array);
        echo $array[$size]."\n";                           
        
        
    }   

    

}







?>
