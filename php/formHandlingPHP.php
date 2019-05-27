<html>
    <body>

        <form action="formHandlingPHP.php" method="get">
            Name: <input type="text" name="name"><br>
            E-mail: <input type="text" name="email"><br>
            <input type="submit">
        </form>

        Welcome <?php echo $_POST["name"]; ?><br>
        Your email address is: <?php
        echo $_POST["email"];
        /*
         * get / post의 차이
         * 겟은 데이터를 url에 담아서 보내고
         * 포스트는 http post 메소드로 보냄
         * 겟은 모든 변수명과 값이 url에 표시됨
         * 포스트는 http리퀘스트 바디에 숨어감
         */
        ?>

    </body>
</html> 