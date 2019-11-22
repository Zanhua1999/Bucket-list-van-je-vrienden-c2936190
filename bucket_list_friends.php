<?php
$line = readline("Hoeveel vrienden zal ik vragen om hun droom?");
$friends = array();
for($i = 1; $i <= $line; $i++){
    $result1 = readline("Wat is jouw naam?");
    $result2 = readline("Wat is jouw droom?");
    $array = array(
        'Naam' => $result1,
        'Droom' =>$result2
    );
    array_push($friends, $array);
}
foreach ($friends as $friend) {
    print($friend['Naam'] . PHP_EOL );
    print($friend['Droom'] . PHP_EOL );
}
?>