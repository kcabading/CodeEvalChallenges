<?php
/*Sample code to read in test cases:
$fh = fopen($argv[1], "r");
while (true) {
$test = fgets($fh);
# break loop if $test is an empty line
# $test represents the test case, do something with it
}
*/

function findwriter($data){

    $data = trim($data);
    
    $dataarray = explode('|', $data);
    
    if(count($dataarray)!=2){
    
        echo "Invalid Input";
        return;
    
    }
    else{
        
    $string = trim($dataarray[0]);
    $key = explode(' ',trim($dataarray[1]));
    $writer = '';         
            
    foreach($key as $key){    
        
    
        $writer = $writer.$string[$key-1];
                
    }
        
    return $writer;       
     
        
    }

}


$fh = fopen($argv[1], "r");

while(!feof($fh)){

    $data = fgets($fh);
    
    $writer = findwriter($data);          

    echo $writer;
    echo "\n";
}

?>
