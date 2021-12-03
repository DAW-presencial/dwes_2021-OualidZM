<?php

function lovefunc($flower1, $flower2) {
    $is_flow1 = $flower1 % 2;
    $isflow2 = $flower2 % 2;

    if(($is_flow1 != 0 && $isflow2 == 0) ||  ($is_flow1 == 0 && $isflow2 != 0) ){
        return true;
    }
    else{
        return false;
    }
}

lovefunc(1,4)

?>