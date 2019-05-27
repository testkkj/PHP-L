<?php

$cars = array("Volvo", "BMW", "Toyota");
echo "I like " . $cars[0] . ", " . $cars[1] . " and " . $cars[2] . ".";
?> 

<?php

/* index array */
$cars = array("Volvo", "BMW", "Toyota");
echo "I like " . $cars[0] . ", " . $cars[1] . " and " . $cars[2] . ".";
?> 

<?php

/* 배열의 길이 */
$cars = array("Volvo", "BMW", "Toyota");
echo count($cars);
/* count() 함수 */
?> 

<?php

/* 반복문으로 배열을 출력 */
$cars = array("Volvo", "BMW", "Toyota");
$arrlength = count($cars);

for ($x = 0; $x < $arrlength; $x++) {
    echo $cars[$x];
    echo "<br>";
}
?> 

<?php

/*
 * associative array
 * 네임키와 값을 연결(연관)시킴
 */
$age = array("Peter" => "35", "Ben" => "37", "Joe" => "43");
echo "Peter is " . $age['Peter'] . " years old.";
?> 

<?php
/*
 * associative array
 * foreach를 사용해서 배열을 출력
 */
$age = array("Peter" => "35", "Ben" => "37", "Joe" => "43");

foreach ($age as $x => $x_value) {
    echo "Key=" . $x . ", Value=" . $x_value;
    echo "<br>";
}
?> 