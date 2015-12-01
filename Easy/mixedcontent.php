<?php
/*Sample code to read in test cases:
$fh = fopen($argv[1], "r");
while (true) {
$test = fgets($fh);
# break loop if $test is an empty line
# $test represents the test case, do something with it
}
*/

function mixcontent($data){

    $strResult = "";
    $mixArray = explode(',', $data);        
    $numbers = array();
    $letters = array();
    
    foreach($mixArray as $value){
    
        if(is_numeric($value)){
            $numbers[] = $value;
        }
        else{
            $letters[] = $value;
        }
        
    }    


    if( (count($numbers)!=0) && (count($letters)!=0)){

        foreach($letters as $letter){
        $strResult .= $letter.",";
        }    
        $strResult = trim($strResult,",");    
        $strResult.="|";
       foreach($numbers as $number){
            $strResult .= $number.",";
        }
        $strResult = trim($strResult,",");        

    } elseif (count($numbers)!=0){

         foreach($numbers as $number){
            $strResult .= $number.",";
        }
        $strResult = trim($strResult,",");        
    } else {

        foreach($letters as $letter){
        $strResult .= $letter.",";
        }    
        $strResult = trim($strResult,","); 


    }
      echo $strResult;

   

}


$fh = fopen($argv[1], "r");

while (!feof($fh)) {

    $data = trim(fgets($fh));    
    mixcontent($data);
    echo "\n";
    
    
}



?>
