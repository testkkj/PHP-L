<!DOCTYPE html>
<html>
    <head>
        <style>
            table, th, td {
                border: 1px solid black;
                border-collapse: collapse;
            }
            th, td {
                padding: 5px;
            }
        </style>
    </head>
    <body>

        <table>
            <tr>
                <td>Filter Name</td>
                <td>Filter ID</td>
            </tr>
            <?php
            /*
             * Validating data = 데이터가 제대로 된 형태인지 검사
             * Sanitizing data = 데이터에서 비정상적인 글자 제거
             */
            foreach (filter_list() as $id => $filter) {
                echo '<tr><td>' . $filter . '</td><td>' . filter_id($filter) . '</td></tr>';
            }
            /*
             * 필터는 인풋값에서 데이터 형식 검사 및 비정상 문자를 제거
             * 필터리스트 함수는 필터가 제공하는 기능을 보여줌
             * 잘못된 서브밋은 보안에 문제를 야기하거나
             * 페이지를 망가트릴수 있음
             * 필터를 사용하여 제대로된 인풋을 받을수 있음
             */
            ?>
        </table>

    </body>
</html>


<?php
$str = "<h1>Hello World!</h1>";
$newstr = filter_var($str, FILTER_SANITIZE_STRING);
echo $newstr;
/*
 * 필터발 함수는 데이터 형식 검사 및 비정상 문자를 제거
 * 문자열에서 html 태그 제거 가능
 */
?> 


<?php
$int = 100;
/*
 * 인트가 맞는지 확인
 */
if (!filter_var($int, FILTER_VALIDATE_INT) === false) {
    echo("Integer is valid");
} else {
    echo("Integer is not valid");
}
?> 

<?php
$int = 0;
/*
 * 위 방식은 0일대는 정수로 인식을 못함
 * 아래는 그것을 개선한 방식
 */
if (filter_var($int, FILTER_VALIDATE_INT) === 0 || !filter_var($int, FILTER_VALIDATE_INT) === false) {
    echo("Integer is valid");
} else {
    echo("Integer is not valid");
}
?> 


<?php
$ip = "127.0.0.1";
/*
 * 아이피 주소값을 검증
 */
if (!filter_var($ip, FILTER_VALIDATE_IP) === false) {
    echo("$ip is a valid IP address");
} else {
    echo("$ip is not a valid IP address");
}
?> 


<?php
$email = "john.doe@example.com";

// 부적절한 문자 제거
$email = filter_var($email, FILTER_SANITIZE_EMAIL);

// 이메일 유효성 검증
if (!filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
    echo("$email is a valid email address");
} else {
    echo("$email is not a valid email address");
}
?> 


<?php
$url = "https://www.w3schools.com";

// 부적절한 문자 제거
$url = filter_var($url, FILTER_SANITIZE_URL);

// 유알엘 검증
if (!filter_var($url, FILTER_VALIDATE_URL) === false) {
    echo("$url is a valid URL");
} else {
    echo("$url is not a valid URL");
}
?> 