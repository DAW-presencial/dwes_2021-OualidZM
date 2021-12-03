<?php

function remove_char(string $s):string {
    $res = substr($s, 1,-1);
    return $res;
}

  remove_char("hola");
?>