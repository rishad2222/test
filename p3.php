<?php

// $n = 10; 
// for ($i=$n, $fact = 1; $i>1; $i--  ){

//     $fact *= $i;
// }

// var_dump($fact);

// echo PHP_EOL;

// printf("Factorial Of %d is %d" , $n , $fact);



// // Liner Search
// linear_search([1,3,65,98,24,59,45,78,3,7],59);//
// function linear_search($number, $value){
//     $result = false;
//         for($i=0; $i<count($number);$i++){

//         if($number[$i] ==$value){
//             echo "$number[$i] is true \n";
//             $result = true;
//             break;
//         }
//         if(!$result){
//             echo "$value was not found.... \n";
//         }
//     }
// }

// Even or Odd
// function evenOrodd($n)
// {
//  if($n%2 ==0){
//     return true;
//  }return false;
// }

// $x=-17;

// if(evenOrodd($x)){
//    echo "{$x} is a even number"; 
// }else{
//     echo "{$x} is a odd number";
// }

function sum(int ...$number):int{
    $result = 0;

    for($i=0; $i<count($number); $i++){
        $result += $number[$i];
    }
    return $result;
}

echo sum(5,6,7,8);



?>