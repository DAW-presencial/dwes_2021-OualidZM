<?php
function cycle($n) {
    $divis_val = 1/$n;
    $decimal = substr($divis_val, 2);
    $decimal_arr = array_map('intval',str_split($decimal));
    $check_arr = $decimal_arr[0] . $decimal_arr[1];
    $num_cycle = substr_count($decimal,$check_arr);
    $e = 0;
    $f = 0;

}

cycle(33);

?>