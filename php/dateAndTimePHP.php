<!DOCTYPE html>
<html>
    <body>

        <?php
        /*
         * d- 달의 일
         * m- 달
         * Y- 4자리 연도
         * l- 요일(소문자 L)
         */
        echo "Today is " . date("Y/m/d") . "<br>";
        echo "Today is " . date("Y.m.d") . "<br>";
        echo "Today is " . date("Y-m-d") . "<br>";
        echo "Today is " . date("l");
        ?>

        © 2010-<?php
        echo date("Y");
        /*
         * 자동으로 카피라이트를 작성가능
         * 해가 바뀌어도 지속변경
         */
        ?>

    </body>
</html>

<!DOCTYPE html>
<html>
    <body>

        <?php
        /*
         * H- 24시간 형식
         * h- 12시간 형식
         * i- 분
         * s- 초
         * a- 정오전후표시 AM PM
         * ante/post meridiem
         * ante는 라틴어 비포
         * meridiem은 정오
         */
        echo "The time is " . date("h:i:sa");
        ?>

    </body>
</html>

<!DOCTYPE html>
<html>
    <body>

        <?php
        date_default_timezone_set("Asia/Seoul");
        echo "The time is " . date("h:i:sa");
        ?>

    </body>
</html>


<!DOCTYPE html>
<html>
    <body>

        <?php
        $d = mktime(11, 14, 54, 8, 12, 2014);
        echo "Created date is " . date("Y-m-d h:i:sa", $d);
        /*
         * mktime은 날짜에 대한 유닉스 타임스탬프를 리턴한다.
         * mktime(hour,minute,second,month,day,year)
         */
        ?>

    </body>
</html>


<!DOCTYPE html>
<html>
    <body>

        <?php
        $d = strtotime("10:30pm April 15 2014");
        echo "Created date is " . date("Y-m-d h:i:sa", $d);
        /*
         * strtotime()을 사용해 문자열을 시간으로 변환 가능
         * strtotime(time,now)
         */
        ?>

    </body>
</html>

<!DOCTYPE html>
<html>
    <body>

        <?php
        $d = strtotime("tomorrow");
        echo date("Y-m-d h:i:sa", $d) . "<br>";

        $d = strtotime("next Saturday");
        echo date("Y-m-d h:i:sa", $d) . "<br>";

        $d = strtotime("+3 Months");
        echo date("Y-m-d h:i:sa", $d) . "<br>";
        ?>

    </body>
</html>

<!DOCTYPE html>
<html>
    <body>

        <?php
        $startdate = strtotime("Saturday");
        $enddate = strtotime("+6 weeks", $startdate);

        while ($startdate < $enddate) {
            echo date("M d", $startdate) . "<br>";
            $startdate = strtotime("+1 week", $startdate);
        }
        ?>

    </body>
</html>


<!DOCTYPE html>
<html>
    <body>

        <?php
        $d1 = strtotime("July 04");
        $d2 = ceil(($d1 - time()) / 60 / 60 / 24);
        echo "There are " . $d2 . " days until 4th of July.";
        ?>

    </body>
</html>
