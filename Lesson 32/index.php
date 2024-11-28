<?php

// phpinfo();

// $x = "Hello";
// print_r($x);

// $x = 5;
// echo gettype($x) . "<br>";

// $y = 10.5;
// echo gettype($y) . "<br>";

// $z = "Hello";
// echo gettype($z) . "<br>";

// function displayVersion(){
//     echo "this is php version" . phpversion();
//     echo "\n";
// }

// displayVersion();

function helloWorld(){
    echo "Hello world <br>";
}

helloWorld();


function sum(){
    $value = 20 + 30;
    echo "$value <br>";
}

sum();


function maximum($x,$y){
    if($x>$y){
        return $x;
    }else{
        return $y;
    }
}

echo maximum(20,30);
$n = 30;
function division($n){
    if($n%2==0){
        echo "<br> $n eshte i plotpjestueshem me 2";
    }else{
        echo "<br> $n nuk eshte i plotpjestueshem me 2";
    }
}
 division($n);

 $x = 5;

 function globalVariable(){
    $y = 10;
    // echo $x; qeshtu eshte gabim
    echo "<br> $y";

 }
 echo "<br> $x";
 globalVariable();

 $a = 20;
 $b = 30;

 function ab(){
    global $a, $b;
    $b = $a + $b;
 }
 ab();
 echo "<br> $b";

 function staticVariable(){
    static $count = 0;
    $count++;
    echo "<br> The value of count is $count <br>";

 }

 staticVariable();
 staticVariable();
 staticVariable();
 staticVariable();


//  $sports = array('Football', 'Basketball', 'Handball');

// print_r($sports);

$sports = ['Football', 'Basketball', 'Handball'];
echo end($sports)."<br>";
echo count($sports)."<br>";

$len = count($sports);

// array_push($sports, "volleyball");
// array_pop($sports);
// array_unshift($sports, 'Tennis');
// array_shift($sports);
// var_dump($sports);

// for ($i=0; $i<$len; $i++){
//     echo $sports[$i]. "<br>";
// }

$myvalues = array(12,24,36,48);

var_dump(array_sum($myvalues));

$mesatarja = array(1,2,3,4,5,6,7);
 $sum = array_sum($mesatarja)/7;

echo "Vlera mesatare eshte:  $sum";



?>