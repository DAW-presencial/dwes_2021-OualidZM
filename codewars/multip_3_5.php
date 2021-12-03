<?php

function solution($number){
    $arr_dist = range(1,$number);
    $arr_multi = [];
    $contador = 0;
    if($number < 0){
      return 0;
    }else{
      foreach($arr_dist as $k => $v){
        $mult_thr = $v / 3;
        $mul_fiv = $v / 5;
        $contador++;
        $not_float =!is_float($mult_thr) || !is_float($mul_fiv);
            if($not_float && ($contador < $number)){
              array_push($arr_multi,$v);
            }else{
              continue;
            }
      }
      return array_sum($arr_multi);
    }
}

solution(10);

?>