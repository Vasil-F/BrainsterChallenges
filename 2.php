<?php 

$name = 'Kathrin';
$rating = 5;
$hour = date("H");
$rated = true;
$intcheck = is_int($rating);


if ($name == 'Kathrin') {
    echo ('Hello Kathrin');
} else {
    echo ('Nice name');
}

echo '<br>';

if ($hour < 12) {
    echo 'Good morning Kathrin';
} elseif ($hour >=12 && $hour <19) {
    echo 'Good afternoon Kathrin';
} elseif ($hour >=19) {
    echo 'Good evening Kathrin';
} else {
    echo 'Unknown time';
}

echo '<br>';

if ($rating >= 1 && $rating <=10) {
    echo 'Thank you for rating' . '<br>' ; 
    if ($rated == true) {
        echo 'You already voted' . '<br>';
    } 
    if ($rated == false) {
        echo 'Thank you for voting';
    } 
    if ($intcheck == true) {
        echo 'The input is an integer';
    } 
}   elseif ($intcheck == false) {
    echo 'Invalid rating, only numbers between 1 and 10' . '<br>';
    echo 'The input is something else';
}

    echo '<br>';
    echo '<hr>';

    if ($rating >= 1 && $rating <=10) {
        echo 'Thank you for rating';
    } else {
        echo 'Invalid rating, only numbers between 1 and 10';
    }
    echo '<br>';
    if ($rated == true) {
        echo 'You already voted';
    }   else {
        echo 'Thank you for voting';
    }
    echo '<br>';
    if ($intcheck == true) {
        echo 'The input is an integer';
    } else {
        echo 'The input is somthing else';
    }




?>