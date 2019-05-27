<?php

/*
 * String
 * '' / "" 둘중 하나 사용
 */
$x = "Hello world!";
$y = 'Hello world!';

echo $x;
echo "<br>";
echo $y;
echo "<br>";
?> 

<?php

/*
 * Integer
 * 숫자 한자리는 필수
 * 소수점이 없어야 하고
 * 양수와 음수가 될수있고
 * 10진 16진 8진 가능
 */
$x = 5985;
var_dump($x);
echo "<br>";
/* var_dump() 함수는 값의 데이터 타입을 리턴 */
?> 

<?php

/*
 * float
 */
$x = 10.365;
var_dump($x);
echo "<br>";
?> 

<?php

/*
 * Array
 */
$cars = array("Volvo", "BMW", "Toyota");
var_dump($cars);
echo "<br>";
?> 

<?php

/*
 * 객체는 명시적으로 선언되어야함
 * 객체의 클래스를 먼저 생성해야 하고(class 키워드 사용)
 * 클래스엔 프로퍼티와 함수 가질수 있음
 */

class Car {

    function Car() {
        $this->model = "VW";
    }

}

// 객체 생성
$herbie = new Car();

// 객체의 클래스 안의 내용 출력
echo $herbie->model;
echo "<br>";
?> 

<?php

/*
 * NULL data type은 오직 null값을 가짐
 * 변수의 초기값은 null이며 초기화 시킬수 있음
 */
$x = "Hello world!";
$x = null;
var_dump($x);
echo "<br>";
?> 