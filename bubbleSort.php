<?php
//bubble sort algorithm written by Mudassir Mirza
$array= array(13, 8, -1, 10, 4, 3, 11);

//function for bubble sort
function bubbleSort(&$array, $n){
    for($i=0; $i<$n; $i++){                     
        for($j=0; $j<$n-$i-1; $j++){           
            if($array[$j] > $array[$j+1]){      
                $temp= $array[$j];
                $array[$j]= $array[$j+1];
                $array[$j+1]= $temp;
            }
        }
    }
}

//function to print array
function printArray($array, $n){
    for($i=0; $i<$n; $i++){
        echo $array[$i] . " ";
    }

}

$n= sizeof($array);

//bubbleSort($array, $n);
//printArray($array, $n);

?>
