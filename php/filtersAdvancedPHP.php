<?php

/*
 * 범위 안의 정수 유효성 검증
 */
$int = 122;
$min = 1;
$max = 200;

if (filter_var($int, FILTER_VALIDATE_INT, array("options" => array("min_range" => $min, "max_range" => $max))) === false) {
    echo("Variable value is not within the legal range");
} else {
    echo("Variable value is within the legal range");
}
?> 


<?php

/*
 * 아이피 6 검사
 */
$ip = "2001:0db8:85a3:08d3:1319:8a2e:0370:7334";

if (!filter_var($ip, FILTER_VALIDATE_IP, FILTER_FLAG_IPV6) === false) {
    echo("$ip is a valid IPv6 address");
} else {
    echo("$ip is not a valid IPv6 address");
}
?> 


<?php

/*
 * 쿼리스트링이 있는지 검사
 */
$url = "https://www.w3schools.com";

if (!filter_var($url, FILTER_VALIDATE_URL, FILTER_FLAG_QUERY_REQUIRED) === false) {
    echo("$url is a valid URL with a query string");
} else {
    echo("$url is not a valid URL with a query string");
}
?> 


<?php
/*
 * html 태그를 지우고 127보다 큰 아스키코드를 지움
 */
$str = "<h1>Hello WorldÆØÅ!</h1>";

$newstr = filter_var($str, FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);
echo $newstr;
?> 