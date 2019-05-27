
<!DOCTYPE HTML>  
<html>
    <head>
    </head>
    <body>  

        <?php
// 변수 정의 및 초기화
        $name = $email = $gender = $comment = $website = "";

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $name = test_input($_POST["name"]);
            $email = test_input($_POST["email"]);
            $website = test_input($_POST["website"]);
            $comment = test_input($_POST["comment"]);
            $gender = test_input($_POST["gender"]);
        }

        function test_input($data) {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
            /*
             * 이 함수가 폼으로 받은 값을
             * 공백,탭,엔터를 제거하고
             * 역슬래쉬 제거하고
             * 지정된 변수에 대입된다.
             */
        }
        ?>

        <h2>PHP Form Validation Example</h2>
        <form method="post" action="<?php
        echo htmlspecialchars($_SERVER["PHP_SELF"]);
        /*
         * html form 태그의 액션 항목에
         * 페이지를 그냥 입력할 경우 페이지가 그대로 노출되지만
         * htmlspecialchars() 함수를 사용하면 문자의 일부를 html의 아스키코드
         * 같은 값으로 바꿔주어 외부에서의 1차적인 접근을 저지한다.
         */
        ?>">  
            Name: <input type="text" name="name">
            <br><br>
            E-mail: <input type="text" name="email">
            <br><br>
            Website: <input type="text" name="website">
            <br><br>
            Comment: <textarea name="comment" rows="5" cols="40"></textarea>
            <br><br>
            Gender:
            <input type="radio" name="gender" value="female">Female
            <input type="radio" name="gender" value="male">Male
            <input type="radio" name="gender" value="other">Other
            <br><br>
            <input type="submit" name="submit" value="Submit">  
        </form>

        <?php
        echo "<h2>Your Input:</h2>";
        echo $name;
        echo "<br>";
        echo $email;
        echo "<br>";
        echo $website;
        echo "<br>";
        echo $comment;
        echo "<br>";
        echo $gender;
        ?>

    </body>
</html>
