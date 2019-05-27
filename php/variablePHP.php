<?php

$txt = "Hello world!";
$x = 5;
$y = 10.5;
/*
 * $ 기호는 변수를 선언할때 사용
 * 변수에 문자를 대입할때는 " "를 사용
 * 변수명은 $ 기호로 정의하고 문자와 _ 로 시작하며
 * 숫자로 시작할수 없고 영문자와 숫자 _ 만 사용한다.
 * 변수명에서는 대소문자를 구분한다 $a / $A는 다르다.
 */
?> 

<?php

$txt = "W3Schools.com";
echo "I love $txt!";
/*
 * echo는 값을 출력할때 사용 
 */
?> 

<?php

$txt = "W3Schools.com";
echo "I love " . $txt . "!";
/*
 * 이 예제와 위 예제는 동일한 값을 출력한다.
 */
?> 

<?php

$x = 5;
$y = 4;
echo $x + $y;
?> 

<?php

$x = 5; // 전역 범위 변수

function myTest() {
    // x를 함수 안에서 사용시 에러 발생
    echo "<p>Variable x inside function is: $x</p>";
}

myTest();

echo "<p>Variable x outside function is: $x</p>";
/*
 *  함수 밖에서 선언된 변수는 함수 밖에서만 사용
 */
?> 

<?php

function myTest1() {
    $x = 5; // 지역 범위 변수
    echo "<p>Variable x inside function is: $x</p>";
}

myTest();

// x를 함수 밖에서 사용시 에러 발생
echo "<p>Variable x outside function is: $x</p>";
/*
 * 함수 안에서 선언된 변수는 함수 안에서만 사용
 * 각각의 함수에서 같은 이름의 변수를 써도 문제가 없음
 * 함수안에만 영향을 미치기 때문
 */
?> 

<?php

$x = 5;
$y = 10;

function myTest2() {
    global $x, $y;
    $y = $x + $y;
}

myTest2();
echo $y; // 결과 15
/*
 *  전역 변수를 함수안에서 사용하고 싶다면 global을 사용
 */
?> 

<?php

$x = 5;
$y = 10;

function myTest3() {
    $GLOBALS['y'] = $GLOBALS['x'] + $GLOBALS['y'];
}

myTest3();
echo $y; // 결과 15
/*
 * 이 예제와 위 예제는 동일한 값을 출력한다
 * php는 전역 변수를 $GLOBALS[index]라는 배열에 저장하고
 * index는 변수의 이름을 값으로 가진다.
 */
?> 

<?php

function myTest4() {
    static $x = 0;
    echo $x;
    $x++;
}

myTest4();
myTest4();
myTest4();
/*
 * 함수가 완료 혹은 종료되면 함수안의 값은 사라진다
 * 지역 변수에 static을 주게되면 사라지지 않고
 * 값을 보존하게 된다.
 */
?> 