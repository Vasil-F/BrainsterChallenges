<?php 

$name = 'Kathrin';
$rating = 5;


if ($name == 'Kathrin') {
    echo ('Hello Kathrin');
} else {
    echo ('Nice name');
}

echo '<br>';

if ($rating >= 1 && $rating <=10) {
    echo ('Thank you for rating');
}   else {
    echo ('Invalid rating, only numbers between 1 and 10');
}



?>