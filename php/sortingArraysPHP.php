<?php

/* 배열의 정렬 */
$cars = array("Volvo", "BMW", "Toyota");
sort($cars);
/* 알파벳 오름차순 */
?> 

<?php

$numbers = array(4, 6, 2, 22, 11);
sort($numbers);
/* 숫자 오름차순 */
?> 

<?php

$cars = array("Volvo", "BMW", "Toyota");
rsort($cars);
/* 알파벳 내림차순 */
?> 

<?php

$numbers = array(4, 6, 2, 22, 11);
rsort($numbers);
/* 숫자 내림차순 */
?> 

<?php

$age = array("Peter" => "35", "Ben" => "37", "Joe" => "43");
asort($age);
/* 연관배열 값기준 오름차순 */
?> 

<?php

$age = array("Peter" => "35", "Ben" => "37", "Joe" => "43");
ksort($age);
/* 연관배열 키기준 오름차순 */
?> 

<?php

$age = array("Peter" => "35", "Ben" => "37", "Joe" => "43");
arsort($age);
/* 연관배열 값기준 내림차순 */
?> 

<?php

$age = array("Peter" => "35", "Ben" => "37", "Joe" => "43");
krsort($age);
/* 연관배열 키기준 내림차순 */
?> 