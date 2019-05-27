
<html>
    <head>
        <script>
            function getVote(int) {
                if (window.XMLHttpRequest) {
                    // 최신 브라우저 코드?
                    xmlhttp = new XMLHttpRequest();
                } else {  // 구버전 브라우저 코드
                    xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
                }
                xmlhttp.onreadystatechange = function () {
                    if (this.readyState == 4 && this.status == 200) {
                        document.getElementById("poll").innerHTML = this.responseText;
                    }
                }
                xmlhttp.open("GET", "poll_votePHP.php?vote=" + int, true);
                xmlhttp.send();
            }
        </script>
    </head>
    <body>

        <div id="poll">
            <h3>Do you like PHP and AJAX so far?</h3>
            <form>
                Yes:
                <input type="radio" name="vote" value="0" onclick="getVote(this.value)">
                <br>No:
                <input type="radio" name="vote" value="1" onclick="getVote(this.value)">
            </form>
        </div>

    </body>
</html> 
<!--
xmlhttprequest 객체 생성
서버가 응답 준비되면 실행될 함수 생성
서버 파일에 요청 종료 전송
url에 파라미터가 포함되었음을 알림
-->