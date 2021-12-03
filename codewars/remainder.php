<?php
function remainder($a, $b) {
    if($a > $b){
      if($a != 0 && $b == 0){
        return null;
      }else{
        return $a % $b;
      }
    }
    elseif($a == 0 && $b == 0){
      return null;
    }
  else{
        if($a == 0 && $b != 0){
            return null;
            } 
        else{
            return $b % $a;
        }
    }
}
remainder(0,1)
?>

