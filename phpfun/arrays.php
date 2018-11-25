<?php

// Array - Variable that holds multiple values
/*

- Indexed
- Associative
- Multi - dimentional

*/

// Indexed
$nhhh_Employies = array('Som', 'Toshan', 'Deb');
$cars = ['Honda', 'Ford'];
$cars[2] = 'Toyota';
//append at the end of the array
$cars[] = 'BMW';
// echo $nhhh_Employies[1];
// echo $cars[3];
// echo count($cars);
// print_r($cars);
// var_dump($cars);


// Associative array
$emp_exp = array('Som' => 20 , 'Deb' => 10);
// echo $emp_exp['Som'];

// Multy dimention array
$car_details = array(
    array('Honda', 'vt', 'vt.6'),
    array('Toyota', 'vt', 'vt.8'),
    array('Ford', 'vt', 'vt.9')
);

echo $car_details[1][0];

?>