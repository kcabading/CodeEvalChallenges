<?php
/*Sample code to read in test cases:
$fh = fopen($argv[1], "r");
while (true) {
$test = fgets($fh);
# break loop if $test is an empty line
# $test represents the test case, do something with it
}
*/

// INITIALISE GLOBAL VARIABLES
// initialise the card ranks
    $arCardRanks = array(
            0 => "High Card",
            1 => "One Pair",
            2 => "Two Pair",
            3 => "Three of a Kind",
            4 => "Straight",
            5 => "Flush",
            6 => "Full House",
            7 => "Four of a Kind",
            8 => "Straight Flush",
            9 => "Royal Flush"
        );
    // initialise the card values
    $arCardValue = array(
            0 => 2,
            1 => 3,
            2 => 4,
            3 => 5,
            4 => 6,
            5 => 7,
            6 => 8,
            7 => 9,
            8 => "T",
            9 => "J",
            10 => "Q",
            11 => "K",
            12 => "A",
       );


// function to check if card combination is royal flush
function is_royalFlush($digits, $suites){
    // inialise the correct digit combination of the royal flush
    $arRFlush = array("T","J","Q","K","A");
    // if they all have the same suites
    if(count(array_count_values($suites))==1){
        // iterates through each digit
        foreach($digits as $digit){
            // check if they exist in the royal flush digits
            if(!in_array($digit, $arRFlush)){
                // if not exist, return false
                return false;
            }
        }
        // return true if all digits exist
        return true;        
    }
    // return false if all cards are not on the same suite
    return false;
}

// function to check if card combination is straight flush
function is_straightFlush($digits, $suites){    
    //get the max value in the digits
    $intMaxDigit = max($digits);  
    //set the right combination for straight flush      
    $arSFlush = array($intMaxDigit, $intMaxDigit-1, $intMaxDigit-2, $intMaxDigit-3, $intMaxDigit-4);
    // if they all have the same suites
    if( (count(array_count_values($suites))==1) && (count(array_count_values($digits))==5) ) { 
        // iterates through each digit
        foreach($digits as $digit){
            // check if they exist in the royal flush digits            
            if(!in_array($digit, $arSFlush)){
                // if not exist, return false
                return false;
            }
        }
        // return true if all digits exist
        return true;        
    }
    // return false if all cards are not on the same suite
    return false;
}

// function to check if card combination is four of a kind
function is_fourOfAKind($digits){

    // check if the array count values is equal to 2    
    if(count($occurence = array_count_values($digits))==2){ 
        // then lets loop through each occurence
        foreach($occurence as $key =>$value){
            // if occurence is equal to 4, we have a four of a kind combination            
            if($value == 4){
                // return true
                return true;
            }   
        }
    }
    // return false
    return false;
}

// function to check if card combination is full house
function is_fullHouse($digits){

    // check if the array count values is equal to 2    
    if(count($occurence = array_count_values($digits))==2){ 
        // then lets loop through each occurence
        foreach($occurence as $key =>$value){
            // if occurence is equal to 4, we have a four of a kind combination            
            if( ($value == 3) || ($value == 2) ){
                // return true
                return true;
            }   
        }
    }
    // return false
    return false;
}

// function to check if card combination is flush
function is_flush($suites){
    // if they all have the same suites
    if(count(array_count_values($suites))==1){
        return true;
    }
    return false;
}

// function to check if card combination is straight
function is_straight($digits){    
    //lets access the global variable to determine the card value
    global $arCardValue;
    $intDigitValue = array();
    //loop through each digits
    foreach($digits as $digit){
        // check if the digit exist in the global variable        
        if(in_array($digit, $arCardValue)){        
            // if exist, get the equivalent value
            $intDigitKey = array_search($digit, $arCardValue);
            // assign it to the new variable
            $intDigitValue[] = $intDigitKey;
        }               
    }
    // lets get the max value in the new variable
    // to set the right combination for straight
    $strMaxValue = max($intDigitValue);
    // right combination for straight
    $arStraight = array(
                    $arCardValue[$strMaxValue], 
                    $arCardValue[$strMaxValue - 1],
                    $arCardValue[$strMaxValue - 2],
                    $arCardValue[$strMaxValue - 3],
                    $arCardValue[$strMaxValue - 4],
                    );  
    // check that the occurence is 5
    if(count($occurence = array_count_values($digits))==5){ 
        // now lets loop through each digits
        foreach($digits as $digit){
            // if digit is not in the correct combination array, 
            // return false
            if(!in_array($digit, $arStraight)){
                return false;
            }
        }
        // if all digits exist return true
        return true;
    }

}

// function to check if card combination is Three of a Kind
function is_threeOfAKind($digits){

    // check if the array count values is equal to 3    
    if(count($occurence = array_count_values($digits))==3){ 
        // then lets loop through each occurence
        foreach($occurence as $key =>$value){
            // if occurence is equal to 4, we have a four of a kind combination            
            if($value == 3){
                // return true
                return true;
            }   
        }
    }
    // return false
    return false;
}

// function to check if card combination is Two pairs
function is_twoPairs($digits){

    // check if the array count values is equal to 3    
    if(count($occurence = array_count_values($digits))==3){ 
        // then lets loop through each occurence
        foreach($occurence as $key =>$value){
            // if occurence is equal to 4, we have a four of a kind combination            
            if($value == 2){
                // return true
                return true;
            }   
        }
    }
    // return false
    return false;
}

function is_onePair($digits){
    // check if the array count values is equal to 4    
    if(count($occurence = array_count_values($digits))==4){ 
        // then lets loop through each occurence
        foreach($occurence as $key =>$value){
            // if occurence is equal to 4, we have a four of a kind combination            
            if($value == 2){
                // return true
                return true;
            }   
        }
    }
    // return false
    return false;
}



function checkrank($data){

    //set the access for globals
    global $arCardRanks;

    // lets get all the digits first
    $digits = array();    
    foreach($data as $card){
        $digits[] = $card[0];
    }
    // then the suites
    $suites = array();
    foreach($data as $card){
        $suites[] = $card[1];
    }

    // lets run all the function to check for combination

    if(is_royalFlush($digits,$suites)){
        $rank = 9;
    } elseif (is_straightFlush($digits,$suites)){
        $rank = 8;
    } elseif (is_fourOfAKind($digits)){
        $rank = 7;
    } elseif (is_fullHouse($digits)){
        $rank = 6;        
    } elseif (is_flush($suites)){
        $rank = 5;        
    } elseif (is_straight($digits)){
        $rank = 4;
    } elseif (is_threeOfAKind($digits)){
        $rank = 3;
    } elseif (is_twoPairs($digits)){
        $rank = 2;
    } elseif (is_onePair($digits)){
        $rank = 1;
    } else {
        $rank = 0;
    }

    return $rank;
    // echo "<br />";
    // echo "Combination: ". $arCardRanks[$rank];
    

    // echo "<br>";
    // print_r($digits);
    // echo "<br>";
    // print_r($suites);


}



function pokerhands($data){    

    //initialise the left and the right hands as array
    $arLeftHand = array();
    $arRightHand = array();
    //lets separate the five cards
    $arCards = explode(" ", $data);
    // now lets assign the cards on each hands
    for($i = 0; $i < count($arCards); $i++){
        if($i < 5){
            $arLeftHand[] = $arCards[$i];
        } else {
            $arRightHand[] = $arCards[$i];
        }
    }

    // print_r($arLeftHand);
    // echo "<br>";
    // print_r($arRightHand);

    $intLeftRank = checkrank($arLeftHand);
    $intRightRank = checkrank($arRightHand);

    if($intLeftRank > $intRightRank){
        echo "left";
    } elseif ($intLeftRank < $intRightRank){
        echo "right";
    } else {
        echo "none";
    }



}


$fh = fopen($argv[1], "r");
while (!feof($fh)) {
    
    $data = trim(fgets($fh));

    pokerhands($data);
    echo "\n";    
    
}


?>
