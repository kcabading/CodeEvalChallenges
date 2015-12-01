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
    $data = trim($data);    
    $dataarray = explode(" ", $data);

    $occurence = array_count_values($dataarray);
            
    $unique = array();    
    
        foreach($occurence as $key=>$value){
        
            if($value == 1){
            
                $unique[] = $key;
                
            }        
        }    
    
    
    if(!($unique)){
     
        echo "0";        
        
    }
    else
    {
        sort($unique);        
        $lowest = $unique[0];
        
        
        foreach($dataarray as $key => $value){
        
            if($value==$lowest){
                
                $key += 1;        
                echo $key;
            
            }        
                    
        }    
    }    
    
    echo "\n";
    
    


}

?>
