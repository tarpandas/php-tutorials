<?php
/*
< Less than
> Greater than
<= Less than or equal to
>= Greater than or equal to
== Equal to
=== Identical to
!= Not equal to
!== Not identical to
*/

// if - else statement syntax

$age = 20;
if($age >= 18) {
    echo 'You are old enough to vote. <br>';
}else{
    echo 'Sorry, you are not old enough to vote. <br>';
}

// elseif statement

$t = date("H"); // "H" for hour (24-hr format)

if($t < 12) {
    echo 'Good morning <br>';
}elseif($t < 17) {
    echo 'Good afternoon <br>';
}else{
    echo 'Good evening <br>';
}

$posts = ['First Post'];

if(!empty($posts)) {
    echo $posts[0].'<br>';
} else {
    echo 'No posts <br>';
}

// ternary operator

echo !empty($posts) ? $posts[0].'<br>' : 'No Posts <br>';

// switches
$favcolor = 'red';

switch($favcolor) {
    case 'red': echo 'Fav color is red'; break;
    case 'blue': echo 'Fav color is blue'; break;
    case 'green': echo 'Fav color is green'; break;

    default: echo 'Your favorite color is not red, green or blue';
}
?>