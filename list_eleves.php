<?php
/**
 * Created by PhpStorm.
 * User: apprenti
 * Date: 20/09/16
 * Time: 16:21
 */
$students = [
    "Emmanuel"  => 42,
    "Thierry"   => 51,
    "Pascal"    => 45,
    "Eric"      => 48,
    "Nicolas"   => 19
];

$nbstudents=count($students);
/*$total=array_sum($students);*/

foreach ($students as $key => $age) {
    echo $key . ' ' . $age . '<br>';
}
echo "La moyenne d'âge est de " . array_sum($students) / $nbstudents . " ans.";