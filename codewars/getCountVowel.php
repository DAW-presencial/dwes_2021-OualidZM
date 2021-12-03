<?php
function getCount($str) {
    $vowelsCount = 0;
    $vowels = ['a','e','i','o','u'];
    $str = str_split($str);
    foreach($str as $is_vow){
        foreach($vowels as $vowels_val){
            if($is_vow == $vowels_val){
                $vowelsCount++;
            }else{
                continue;
            }
        }
    }
    return $vowelsCount;
  }

  getCount("hello");
?>