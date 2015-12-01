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

    $data = fgets($fh);    
    $dataarray = explode("|", $data);
    
        
    if(count($dataarray)!=2){
    
        echo "Invalid input";
        
    }
    else{
    
    $num1 = trim($dataarray[0]);
    $num2 = trim($dataarray[1]);
    
    $num1 = explode(' ', $num1);
    $num2 = explode(' ', $num2);
        
        if( (count($num1)!=count($num2)) || (count($num1)>10) || (count($num1)<1) || (count($num2)>10) || (count($num2)<1)        ) {
        
            echo "Invalid input: numbers should be equal and should range to 1 to 10 only";
        
        
        }    
        else{
            
            for($i=0; $i<count($num1); $i++){
                
                
                if($num1[$i] > 99 || $num2[$i] > 99){
                    echo "Invalid input: a number should only range from 0 to 99";
                    break;
                
                }
                else{
            
                echo $num1[$i] * $num2[$i];
                echo " ";
                }    
            
            }
            
        
        }
        

    }

    echo "\n";


}


?>
