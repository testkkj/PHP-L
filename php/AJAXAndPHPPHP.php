
<!DOCTYPE html>
<html>
    <head>
        <script>
            function showHint(str) {
                if (str.length == 0) {
                    document.getElementById("txtHint").innerHTML = "";
                    return;
                } else {
                    var xmlhttp = new XMLHttpRequest();
                    xmlhttp.onreadystatechange = function () {
                        if (this.readyState == 4 && this.status == 200) {
                            document.getElementById("txtHint").innerHTML = this.responseText;
                        }
                    }
                    xmlhttp.open("GET", "gethint.php?q=" + str, true);
                    xmlhttp.send();
                }
            }
        </script>
    </head>
    <body>

        <p><b>Start typing a name in the input field below:</b></p>
        <form>
            First name: <input type="text" onkeyup="showHint(this.value)">
        </form>
        <p>Suggestions: <span id="txtHint"></span></p>
    </body>
</html>
<!--
xmlhttprequest 객체 생성
서버응답이 준비되면 실행될 함수를 생성
서버의 php파일에 요청종료를 보냄
url에 q 파라미터를 첨부 했다고 알림
str 변수가 input의 값을 지님
-->