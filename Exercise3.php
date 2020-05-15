<?php

function total(){
    $total = 0;

foreach(func_get_args() as $number){

    $total += $number;
}
    return $total;
}

echo(" sum(2,3)= ");
echo total(2,3);
echo(" ;sum(2,3,4) =  ");
echo total(2,3,4);
echo(" ;sum(2,3,4,5) =  ");
echo total(2,3,4,5);
?>


