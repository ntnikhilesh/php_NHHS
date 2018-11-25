<?php 

$people[] = 'Gowtham';
$people[] = 'Som';
$people[] = 'Deb';
$people[] = 'Toshan';
$people[] = 'Ketan';
$people[] = 'Ankita';
$people[] = 'Krishna';

// get query string
$q = $_REQUEST['q'];

$suggestion = "";

// Get Suggestions
if($q !== ""){
    $q = strtolower($q);
    $len = strlen($q);
    foreach($people as $person){
        if(stristr($q, substr($person, 0, $len))){
            if($suggestion === ""){
                $suggestion = $person;
            }else{
                $suggestion .= ", $person";
            }
        }
    }
}

echo $suggestion === "" ? "No Suggestion" : $suggestion;
?>