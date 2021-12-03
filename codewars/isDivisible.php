<?php

function isDivisible($n, $x, $y) {
            $first_value = ($n / $x);
            $second_value = ($n / $y);
            
            
            if(is_float($first_value) && is_float($second_value)){
              return false;
            }
            elseif(!is_float($first_value) && is_float($second_value)){
                return false;
            }
            elseif(is_float($first_value) && !is_float($second_value)){
                return false;
            }
            else{
              return true;
            }
            
          }


isDivisible(3,1,1)
?>

