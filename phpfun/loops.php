<?php

/*
1-for
2- while
3- do...while
4- foreach
*/

// 1- for
// for($i = 0; $i< 10; $i++)
// {
//     echo 'Number: '. $i;
//     echo '<br>';
// }


// //  2 - while
// $i = 0;
// while($i < 15 ){
//         echo 'Number: '. $i;
//         echo '<br>';
//         $i ++;
// }

//  2 - do....while
// $i = 0;
// do{
//         echo 'Number: '. $i;
//         echo '<br>';
//         $i ++;
// }
// while($i < 20 );


//3 foreach
// $nhhh_Employies = array('Som', 'Toshan', 'Deb');
// foreach($nhhh_Employies as $emp){
//             echo 'Name: '. $emp;
//             echo '<br>';
// }

$emp_exp = array('Som' => 20 , 'Deb' => 10);
foreach($emp_exp as $emp_Name => $emp_ID ){
            echo 'Name: '. $emp_Name .' ID: '. $emp_ID;
            echo '<br>';
}
?>