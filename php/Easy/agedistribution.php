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
    
    $intAge = (int) fgets($fh);
    
    if($intAge > 0 && $intAge <= 2){
        echo "Still in Mama's arms\n";
    } elseif($intAge > 2 && $intAge <= 4){
        echo "Preschool Maniac\n";
    } elseif($intAge > 4 && $intAge <= 11){
        echo "Elementary school\n";
    } elseif($intAge > 11 && $intAge <= 14){
        echo "Middle school\n";
    } elseif($intAge > 14 && $intAge <= 18){
        echo "High school\n";
    } elseif($intAge > 18 && $intAge <= 22){
        echo "College\n";
    } elseif($intAge > 22 && $intAge <= 65){
        echo "Working for the man\n";
    } elseif($intAge > 65 && $intAge <= 100){
        echo "The Golden Years\n";
    } else {
        echo "This program is for humans\n";
    }


}



?>
