<!DOCTYPE html>
<?php
$cookie_name = "user";
$cookie_value = "John Doe";
setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day
/*
 * setcookie(name, value, expire, path, domain, secure, httponly);
 * name만 필수고 나머지는 옵션이다.
 * 위의 경우
 * 쿠키이름 유저
 * 쿠키값 존 도
 * 쿠키 유효기간 30일
 * /는 사이트 전체에 걸쳐서 유효하다. 아니면 사용가능한 영역을 설정 가능
 */
?>
<html>
    <body>

        <?php
        if (!isset($_COOKIE[$cookie_name])) {
            /*
             * 전역변수 쿠키를 이스셋 함수(정의되었는지 확인)
             * 를 사용하여 검증
             */
            echo "Cookie named '" . $cookie_name . "' is not set!";
        } else {
            echo "Cookie '" . $cookie_name . "' is set!<br>";
            echo "Value is: " . $_COOKIE[$cookie_name];
        }
        /*
         * setcookie는 html태그 전에 넣어야 함
         * 위 함수는 자동으로 URL로 인코딩 디코딩 되는데
         * URL인코딩이 싫다면 setrawcookie를 사용
         */
        ?>

        <p><strong>Note:</strong> You might have to reload the page to see the value of the cookie.</p>

    </body>
</html>


<?php
$cookie_name = "user";
$cookie_value = "Alex Porter";
setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/");
?>
<html>
    <body>

        <?php
        if (!isset($_COOKIE[$cookie_name])) {
            echo "Cookie named '" . $cookie_name . "' is not set!";
        } else {
            echo "Cookie '" . $cookie_name . "' is set!<br>";
            echo "Value is: " . $_COOKIE[$cookie_name];
        }
        /*
         * 쿠키값을 변경시키고 싶다면
         * 다시 셋쿠키 함수를 쓰면 된다.
         */
        ?>

    </body>
</html> 

<?php
// set the expiration date to one hour ago
setcookie("user", "", time() - 3600);
/*
 * 쿠키를 없애고 싶다면 시간을 과거로 주면 된다.
 */
?>
<html>
    <body>

        <?php
        echo "Cookie 'user' is deleted.";
        ?>

    </body>
</html> 


<?php
setcookie("test_cookie", "test", time() + 3600, '/');
?>
<html>
    <body>

        <?php
        if (count($_COOKIE) > 0) {
            echo "Cookies are enabled.";
        } else {
            echo "Cookies are disabled.";
        }
        /*
         * 쿠키 배열을 카운트 하여 시간값과 비교하여
         * 사용가능한 쿠키인지 확인
         */
        ?>

    </body>
</html> 