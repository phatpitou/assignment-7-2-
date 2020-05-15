<?php

        $newStr = '';
        $temp = '';
        $i = 0;
        while(@$str[$i] != '')
        {
          if($str[$i] == ' ') {
             $newStr .= $temp . ' ';
             $temp = '';
          }
          else {
           $temp = $str[$i] . $temp;
          }
          $i++;
        }
        $newStr .= $temp . ' ';
       
echo("original ");
$arr=[2, 3, 4, 6, 7, 9, 11, 20];
print_r($arr);
$evenArray = array_filter($arr, fn($var)=> !($var&1));
echo("After filter ");
print_r(array_filter($evenArray));
?>