<?php
/*Sample code to read in test cases:
$fh = fopen($argv[1], "r");
while (true) {
$test = fgets($fh);
# break loop if $test is an empty line
# $test represents the test case, do something with it
}
*/

function roadTrip($linedata){
    
    
    $return = '';
    $city_array = array();
    $city_distance = explode(';', $linedata);
    
    foreach($city_distance as $city_distance){
    
        $array = explode(',', $city_distance);
        $city = $array[0];
        $distance = $array[1];
        
        $city_array[$city] = $distance;
        
    }

    asort($city_array);
    sort($city_array);
    
    $i = 0;
    while($i < count($city_array)){
    
        if($i > 0){
        
            $return .= $city_array[$i] - $city_array[$i-1].",";
            
        }
        else
            $return .= $city_array[$i].",";   
        
        $i++;
    }
    
    $return = rtrim($return,' ,');    
    return $return;        
        
    

}


$fh = fopen($argv[1], "r");

while(!feof($fh)){

    $linedata = trim(fgets($fh));
    
    $linedata = preg_replace('/;$/', '', $linedata);        
    $result = roadTrip($linedata);
    
    echo $result;
            
    echo "\n";


}



?>
