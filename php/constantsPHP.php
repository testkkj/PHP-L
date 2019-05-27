<?php

/*
 * Constants
 * 한번 선언되면 계속 존재하고 변하지 않음
 * 상수는 영자나 언더바로 시작하며 $가 붙지 않음
 * 자동으로 전체 스크립트에 전역으로 적용됨
 */
define("GREETING", "Welcome to W3Schools.com!");
echo GREETING;
/* 상수는 define으로 선언 */
?> 

<?php

define("GREETING", "Welcome to W3Schools.com!", true);
echo greeting;
/*
 * define은 3개의 파라미터를 가지며
 * 상수명 / 상수값 / 대소문자 구분
 * 구분은 생략시 거짓이며
 * 상수명을 정확히 입력해야 한다.
 */
?> 

<?php

define("cars", [
    "Alfa Romeo",
    "BMW",
    "Toyota"
]);
echo cars[0];
/*
 * PHP7부터 배열상수를 만들수 있다.
 */
?> 

<?php

define("GREETING", "Welcome to W3Schools.com!");

function myTest() {
    echo GREETING;
}

myTest();
/*
 * 상수는 자동으로 전역으로 설정되어 전체 스크립트에서 사용되고
 * 함수 밖에서 선언된 상수를 함수 안에서 사용할수 있다.
 */
?> 