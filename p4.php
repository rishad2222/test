<?php

// factorial Non negetive
// function factNum($n){
//     if($n==0){
//         return 1; 
//     }else{
//         return $n* factNum($n-1);
//     }

    
// }

// print_r(factNum(-4)."\n");

// function isPrime($n){
//     for($x=2; $x<$n; $x++){
//         if($n %$x ==0){
//             return 0;
//         }
//     }
//     return 1;
// }

// $a = isPrime();
// if($a==0)
// echo "This is not prime number... \n";
// else
// echo "This is prime number";

$name = [
    "jahid",
    "hira",
    "jami",
    "ishita",
];

$n = count($name);

for ($i=0; $i < $n; $i++){
    echo $name[$i] . "\n";
}

for ($i=$n-1; $i >= 0; $i--){
    echo $name[$i] . "\n";
}


?>