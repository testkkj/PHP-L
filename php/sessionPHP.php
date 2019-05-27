<?php
// Start the session
session_start();
/*
 * 위 함수로 세션을 실행
 */
/*
 * 세션은 쿠키와는 달이 사용자의 컴퓨터에 정보를 남기지 않음
 * 기본적으로 브라우저를 닫을때까지 정보를 유지함
 * 그리고 세션도 쿠키와 마찬가지로 html태그 전에 위치해야 함
 */
?>
<!DOCTYPE html>
<html>
    <body>

        <?php
// Set session variables
        $_SESSION["favcolor"] = "green";
        $_SESSION["favanimal"] = "cat";
        echo "Session variables are set.";
        /*
         * 세션의 변수값이 세션 전역변수에 저장되어 있으므로 접근 가능
         */
        /*
         * 대부분의 세션은 유저키를 설정하고
         * 새로운 세션이 열릴때 유저키를 비교하여
         * 같다면 열려있는 세션에
         * 다르다면 새로운 세션을 연다.
         */
        ?>

    </body>
</html>
