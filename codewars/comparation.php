<?php

function comp($a1, $a2) {
    sort($a1);
    sort($a2);
    
    foreach($a1 as $key => $value){
        $val_arr_one = $a1[$key];
        $val_arr_two = $a2[$key];
        if(empty($val_arr_one) || empty($val_arr_two)){
            return null;
        }
        elseif($val_arr_one == $val_arr_two){
            continue;
        }
        if($val_arr_one > $val_arr_two){
            
            foreach($a2 as $k => $val){
                $a2[$key] = $val * $val;
            }
        }
        else{
            if($val_arr_one < $val_arr_two){
                $a1[$key] = $value * $value;
            }
        }
    }
    $arr_diff = array_diff($a1,$a2);
    if($arr_diff == null){
        return true;
    }
    else{
        return false;
    }
}

$a1 = [3,12,15,31,31,34,40,59,69,72,80,90,91,98];
$a2 = [3*3,12*12,15*15,31*31,31*31,34*34,40*40,59*59,69*69,72*72,80*80,90*90,91*91,98*98];

comp($a1,$a2);



?>