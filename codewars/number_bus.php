<?php 
function number($bus_stops) {

    $bus_in = 0;
    foreach($bus_stops as $in_out){
      $bus_in += $in_out[0] - $in_out[1];
    }
    return $bus_in;
  }
number([[5],[2]]);

  
?>