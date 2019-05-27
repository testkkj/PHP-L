
<html>
    <head>
        <script>
            function showResult(str) {
                if (str.length == 0) {
                    document.getElementById("livesearch").innerHTML = "";
                    document.getElementById("livesearch").style.border = "0px";
                    return;
                }
                if (window.XMLHttpRequest) {
                    // code for IE7+, Firefox, Chrome, Opera, Safari
                    xmlhttp = new XMLHttpRequest();
                } else {  // code for IE6, IE5
                    xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
                }
                xmlhttp.onreadystatechange = function () {
                    if (this.readyState == 4 && this.status == 200) {
                        document.getElementById("livesearch").innerHTML = this.responseText;
                        document.getElementById("livesearch").style.border = "1px solid #A5ACB2";
                    }
                }
                xmlhttp.open("GET", "livesearchPHP.php?q=" + str, true);
                xmlhttp.send();
            }
        </script>
    </head>
    <body>

        <form>
            <input type="text" size="30" onkeyup="showResult(this.value)">
            <div id="livesearch"></div>
        </form>

    </body>
</html> 
<!--
xmlhttprequest 객체 생성
서버가 응답 준비되면 실행될 함수 생성
서버의 파일에 요청 종료를 보냄
q 파라미터가 URL에 첨부되었다고 알림
-->