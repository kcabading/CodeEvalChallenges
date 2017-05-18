<?php
/*Sample code to read in test cases:
$fh = fopen($argv[1], "r");
while (true) {
$test = fgets($fh);
# break loop if $test is an empty line
# $test represents the test case, do something with it
}
*/


function cashRegister($data){

    //initialise the return value as string
    $strReturnValue = "";

    //create register remaining values as array



    $arRegister = array(
            'ONE HUNDRED'=>100.00, 
            'FIFTY'=>50.00, 
            'TWENTY'=> 20.00, 
            'TEN'=>10.00, 
            'FIVE'=> 5.00, 
            'TWO'=>2.00, 
            'ONE'=>1.00,
            'HALF DOLLAR'=>.50,
            'QUARTER' => .25,
            'DIME' => .10,
            'NICKEL' => .05,
            'PENNY' => .01,
        );
    

    //separate the input values
    $arSepValues = explode(";", $data);

    $intPP = $arSepValues[0];    
    $intCH = $arSepValues[1];

    settype($intPP, "float");
    settype($intCH, "float");

    $intChange = $intCH - $intPP;

    if($intChange < 0){

        $strReturnValue .= "ERROR";
    } elseif($intChange == 0){
        
        $strReturnValue .= "ZERO";

    } else {


        foreach($arRegister as $keybill => $valbill){

            if( $intChange >= $valbill  ){

                $intChange = $intChange - $valbill;

                $arReturnChange[] = $keybill;            
            }

        }

        foreach($arReturnChange as $change){

            $strReturnValue .= $change.",";
        }
  


    }

    echo trim($strReturnValue,",");




}





$fh = fopen($argv[1],"r");

while(!feof($fh)){    

    $data = trim(fgets($fh));  

    cashRegister($data);
    echo "\n";   
    
    

}

?>
