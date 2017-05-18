<?php
/*Sample code to read in test cases:
$fh = fopen($argv[1], "r");
while (true) {
$test = fgets($fh);
# break loop if $test is an empty line
# $test represents the test case, do something with it
}
*/
function racingchars($data){
    
    static $path_pos = 0;
    $return = "";

    if(strlen($data) > 12){
    
        echo "Invalid track";
        return;
    }    
           
    $cPost = strpos($data, 'C');
    $_post = strpos($data, '_');

    if($cPost){
    
        $i = 0; 
        while($i < strlen($data)){
            
            if($i == $cPost){
            
                if($path_pos == 0 || $path_pos == $i){    
                                
                    $return .= '|';
                    $path_pos = $i;
                    
                }
                elseif($path_pos > $i){
                
                    $return .= '/';
                    $path_pos = $i;
                }
                else{
                
                    $return .= '\\';
                    $path_pos = $i;
                }
                              
            
            }
            elseif($_post != false && $i == $_post){
            
                $return .= '_';
                        
            }
            else{
            
                $return .= '#';
            }
         
         $i++;
        }
    
    }// End of If
    elseif($_post){
    
        $i = 0; 
        while($i < strlen($data)){
            
            if($i == $_post){
            
                if($path_pos == 0 || $path_pos == $i){    
                                
                    $return .= '|';
                    $path_pos = $i;
                    
                }
                elseif($path_pos > $i){
                
                    $return .= '/';
                    $path_pos = $i;
                }
                else{
                
                    $return .= '\\';
                    $path_pos = $i;
                }
                              
            
            }
            else{
            
                $return .= '#';
            }
         
         $i++;
        }
    
    }
     
              
    echo $return;        
            
}


$fh = fopen($argv[1], "r");
while(!feof($fh)){

    $data = trim(fgets($fh));    
    racingchars($data);
    echo "\n";
}






?>
