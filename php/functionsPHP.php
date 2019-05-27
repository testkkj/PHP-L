<?php

/*
 * 기본내장 1000개 이상
 * 페이지가 로드될땐 실행되지 않고
 * 함수를 사용하면 실행 됨
 */

function writeMsg() {
    echo "Hello world!";
}

writemsg(); // call the function
/*
 * function 키워드로 선언
 * 영자나 언더바로 이름 지정 가능
 * 함수와 연관된 이름을 짓는게 좋음
 * 함수명은 대소문자 구분이 없음
 */
?> 

<?php

function familyName($fname) {
    echo "$fname Refsnes.<br>";
}

familyName("Jani");
familyName("Hege");
familyName("Stale");
familyName("Kai Jim");
familyName("Borge");
?> 

<?php

function familyName1($fname, $year) {
    echo "$fname Refsnes. Born in $year <br>";
}

familyName1("Hege", "1975");
familyName1("Stale", "1978");
familyName1("Kai Jim", "1983");
?> 

<?php

/*
 * php는 변수의 값으로 자동으로 데이터 타입을 지정함
 * 에러 없이 문자열과 정수를 더할수 있음
 * php7부터 타입선언이 추가됨
 * 함수를 선언할때 strict로 데이터 타입을 지정하여 에러를 만들수 있음
 */

function addNumbers(int $a, int $b) {
    return $a + $b;
}

echo addNumbers(5, "5 days");
// strict를 사용하지않아 문자열의 숫자와 정수가 더해진다.
?> 

<?php

//declare(strict_types=1); // strict requirement

function addNumbers1(int $a, int $b) {
    return $a + $b;
}

echo addNumbers1(5, "5 days");
// strict를 문서 제일 위에 선언하면 에러가 걸림
/*
 * strict를 사용할땐 php파일 가장 첫줄에 사용해야 함
 * strict를 사용하면 예정된대로 프로그램 작성에 용이함
 */
?> 

<?php

//declare(strict_types=1); // strict requirement

function setHeight(int $minheight = 50) {
    echo "The height is : $minheight <br>";
}

setHeight(350);
setHeight(); // 함수에 값을 주지 않으면 함수자체의 기본값으로 설정됨
setHeight(135);
setHeight(80);
?> 

<?php

//declare(strict_types=1); // strict requirement

function sum(int $x, int $y) {
    $z = $x + $y;
    return $z;
}

echo "5 + 10 = " . sum(5, 10) . "<br>";
echo "7 + 13 = " . sum(7, 13) . "<br>";
echo "2 + 4 = " . sum(2, 4);
?> 

<?php

/*
 * 리턴타입선언
 * 함수의 리턴값을 지정할때
 * {기호 전에 :타입 을 지정하면 된다.
 */

//declare(strict_types=1); // strict requirement

function addNumbers2(float $a, float $b): float {
    return $a + $b;
}

echo addNumbers2(1.2, 5.2);
?> 

<?php

//declare(strict_types=1); // strict requirement

function addNumbers3(float $a, float $b): int {
    return (int) ($a + $b);
}

echo addNumbers3(1.2, 5.2);
/* 다른 형으로도 지정 가능*/
?> 
