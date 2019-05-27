<?php

/*
 * echo와 print의 차이점
 * echo는 리턴값이 없고
 * print는 1의 리턴값을 가짐
 * 그래서 expressions에 사용할 수 있음.
 * echo는 여러 파라미터를 가질 수 있음.
 * print는 하나의 아규먼트를 가짐.
 * echo가 print보다 조금 빠름. 
 */
echo "<h2>PHP is Fun!</h2>";
echo "Hello world!<br>";
echo "I'm about to learn PHP!<br>";
echo "This ", "string ", "was ", "made ", "with multiple parameters.";
/* html 태그를 포함할수 있음 */
?> 

<?php

$txt1 = "Learn PHP";
$txt2 = "W3Schools.com";
$x = 5;
$y = 4;

echo "<h2>" . $txt1 . "</h2>";
echo "Study PHP at " . $txt2 . "<br>";
echo $x + $y;
/*
 * echo로 글자와 변수를 출력하기
 */
?> 

<?php

/*
 * print도 html 태그를 포함할 수있음
 */
print "<h2>PHP is Fun!</h2>";
print "Hello world!<br>";
print "I'm about to learn PHP!";
?> 

<?php

/*
 * 글자와 변수 출력 가능
 */
$txt1 = "Learn PHP";
$txt2 = "W3Schools.com";
$x = 5;
$y = 4;

print "<h2>" . $txt1 . "</h2>";
print "Study PHP at " . $txt2 . "<br>";
print $x + $y;
?> 