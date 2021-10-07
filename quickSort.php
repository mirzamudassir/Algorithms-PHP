<?php
//qucik sort algorithm written by mudassir Mirza

//make the array into two partitions, left and right with help of a pivot
//we will take most right element of array as the pivot number and will divide accordingly.
function partition(&$Array, $left, $right){
    $i= $left;
    $pivot= $Array[$right];

    for($j= $left; $j <= $right; $j++){
        if($Array[$j] < $pivot){
            $temp= $Array[$i];
            $Array[$i]= $Array[$j];
            $Array[$j]= $temp;
            $i++;
        }
        $temp= $Array[$right];
        $Array[$right]= $Array[$i];
        $Array[$i]= $temp;

        return $i;

    }
}

//method to print the array
function printArray($Array, $n){
    for($i=0; $i < $n; $i++){
        echo $Array[$i] . " ";
    }
}


?>