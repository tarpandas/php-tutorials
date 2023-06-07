<?php
// For loop

for ($x = 0; $x <= 10; $x++) {
    echo $x.',';
}

echo '<br>';

// while loop

$x = 1;
while($x <= 15) {
    echo 'Number '.$x.'<br>';
    $x++;
}

// do while loop

$x = 1;
do{
    echo 'No.'.$x.'<br>';
    $x++;
}while($x <= 5);

// for each loop
$posts = ['First Post', 'Second Post', 'Third Post'];
foreach($posts as $index => $post) {
    echo $index + 1 . '-' . $post.'<br>';
}
?>