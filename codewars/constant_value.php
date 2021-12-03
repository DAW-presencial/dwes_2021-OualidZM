<?php

function solve($s) {

    if(is_null($s)){
        return null;
    }else{
        $alph = str_split("abcdefghijklmnopqrstuvwxyz");
        $alph = array_combine(range(1,count($alph)),$alph);
        $trimed = trim($s);
        $spli_string = str_split($trimed);
        $spli_string = array_combine(range(1,count($spli_string)),$spli_string);
        $arr_cont = [];
        $cont = 0;
        $last_key = end(array_keys($spli_string));
        foreach($alph as $k => $v){
            $val = array_search($spli_string[$k],$alph);
            $lett = $alph[$val];

            if($lett == $spli_string[$k]){
                    if(($lett == 'a' || $lett == 'e' || $lett == 'i' || $lett == 'o' || $lett == 'u') && ($k != $last_key)){
                    array_push($arr_cont,$cont);
                    $cont = 0;
                    }
                    elseif(($lett == 'a' || $lett == 'e' || $lett == 'i' || $lett == 'o' || $lett == 'u') && ($k == $last_key)){
                        break;
                    }
                    else{
                        if($k == $last_key){
                            $cont += $val;
                            array_push($arr_cont,$cont);
                            break;
                        }else{
                            $cont += $val;
                        }
                    }
            }
            else{
                continue;
            }
        }
        $result = max($arr_cont);
        return $result;
    }
}

solve("codewars");
  
?>

