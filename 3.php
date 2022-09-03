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

    echo '<br>';
    echo '<hr>';

$people=array("Marija"=>array(false,5), "Nikola"=>array(true,8), "Angela"=>array(false,'aa'), 
"Petar"=>array(true,1), "Marko"=>array(false,99), "Stefan"=>array(true,8), "Nikolina"=>array(false,9),
"Ivona"=>array(true,3), "Viktorija"=>array(false,'ss'), "Luka"=>array(false,11));

foreach($people as $person => $person_value)
{
    if($hour<12)
    { echo "Good morning $person"; }
    elseif($hour>=12 && $hour<19)
    { echo "Good afternoon $person"; }
    else
    { echo "Good evening $person"; }
    
    echo "<br>";
    
    if(is_int($person_value[1]))
    {
        if($person_value[1]>=1 && $person_value[1]<=10)
        { 
            if($person_value[0])
            {
                echo "You already voted with $person_value[1] ";
                echo "<br>";
            }
            if(!($person_value[0]))
            {
                echo "Thanks vor voting with $person_value[1]";
                echo "<br>";
            }
        }
        else
        { 
            echo "Invalid rating, only number between 1 and 10";
            echo "<br>";
        }
    }
    else{
        echo "The input is not an integer.";
        echo "<br>";
    }
}




?>