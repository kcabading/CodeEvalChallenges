<?php

for($x = 1; $x<= 12; $x++){


    for($y = 1; $y<=12; $y++){
        
        $z = $x * $y;    
        
        echo $z = str_pad($z,4," ", STR_PAD_LEFT);       
     
    }

    echo "\n";
}

?>
