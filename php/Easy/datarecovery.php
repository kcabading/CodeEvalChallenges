<?php
/*Sample code to read in test cases:
$fh = fopen($argv[1], "r");
while (true) {
$test = fgets($fh);
# break loop if $test is an empty line
# $test represents the test case, do something with it
}
*/
function datarecovery($data){
    //initialise the return result as array
    $arResult = array();    
    // separate the keys to the words
    $arSepValues = explode(";", $data);
    $strWords = $arSepValues[0];
    $strKeys = $arSepValues[1];
    $arWords = explode(" ",$strWords);
    $arKeys = explode(" ",$strKeys);
    // get the value of missing key
    $kcount = count($arKeys) + 1;
    for($i = 0; $i <= $kcount; $i++){
        if( (!in_array($i, $arKeys)) && ($i!=0) ){
            $arKeys[] = $i;            
        } 
          $arResult[$arKeys[$i]] = $arWords[$i];        
    }        
    ksort($arResult);
    foreach($arResult as $word){
        $strResult .= $word." ";
    }
    echo trim($strResult);    
}
$fh = fopen($argv[1], "r");
while (!feof($fh)) {
    $data = trim(fgets($fh));    
    datarecovery($data);
    echo "\n";
}
?>
