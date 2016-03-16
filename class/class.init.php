<?php

class init {
  function __Construct($array){
    $this->array = stripslashes($array);
  }
  function getComb() { // Set function getComb with the argument array
    $arr = explode(',',$this->array); // Split the array based on comma's 
    $arrCount = count($arr); // Count the array values
    $maxComb = pow($arrCount, $arrCount); // Calculate the maximum amount of combinations.
    $res = array(); // Define the array res
    if($arrCount > 1): // If there is values set to the array
    $j=0; // Set j to 0
      for($i=0;$i<$maxComb;$i++): // Set an incrementing for loop
        shuffle($arr); // Shuffle the array order
        if(!in_array(implode($arr), $res)): // If the shuffled combination hasn't already been used
          $res[$j] = implode($arr); // Set the shuffled array as a string to the array res
          $j++; // Increment j
        endif;
      endfor;
      return array($res); // return the array res
    endif;
  
    return false; // If the above fails return false.
  
  }
}


?>