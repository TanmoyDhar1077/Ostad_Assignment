<?php
$studentGrades = [
    'student1' => ['80', '92', '96'],
    'student2' => ['77', '85', '91'],
    'student3' => ['84', '75', '97'],
];


foreach ($studentGrades as $student => $key){
    echo $student ."\n";
    arsort($key);
    $value   = array_slice($key, 0,5);
    $average = array_sum($value) / count($value);
    echo $average ."\n";
}
?>