<?php

//create simple function
function simpleFunction(){
    echo 'Hello world!';
}

// call function
// simpleFunction();

// function with param
// function sayHello($name){
//     echo 'Hello ', $name;
// }

function sayHello($name = 'Gowtham'){
    echo 'Hello ', $name;
}

sayHello();
echo '<br>';
sayHello('Som');
echo '<br>';
echo '<br>';

function returnHello($name = 'Gowtham'){
    return 'Hello '. $name;
}

echo returnHello('NHHS');


echo '<br>';
echo '<br>';

// By refrence
$myNum = 10;

function addNum($num){
    return $num += 5;
}

function addNumByRef(&$num){
    return $num += 10;
}

echo addNum(5);
echo '<br>';
echo '<br>';
echo addNum($myNum);
echo '<br>';
echo '<br>';
addNumByRef($myNum);
echo $myNum;
echo '<br>';
echo '<br>';
?>