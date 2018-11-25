<?php
    // Variables
    /*
    - Prefix $
    - Start with al letter or underscore
    - Only letters, number and underscore
    - Case sensitive
    */


    // Data types
    /*

    String
    Integers
    Floats
    Boolean
    Arrays
    Objects
    NULL
    Resource
    */

    $num1 = 4;
    $num2 = 6;
    $sum = $num1 + $num2;

    $string1 = 'Hello';
    $string2 = 'World';
    $sting3 = $string1 .' '. $string2. '!';
    $sting4 = "$string1 $string2";

    $string5 = "They \" are..";

    $float1 = 4.4;
    $boolean1 = true;

    // constant
    define('GREETING1', 'HELOO..');
    define('GREETING2', 'HELOO..', true);

    // echo 'Hello world1';
    // print 'Hello world2';
    $output = 'Hello world3';
    echo GREETING1;
?>