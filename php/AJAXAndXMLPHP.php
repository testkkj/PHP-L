
<html>
    <head>
        <script>
            function showCD(str) {
                if (str == "") {
                    document.getElementById("txtHint").innerHTML = "";
                    return;
                }
                if (window.XMLHttpRequest) {
                    // 지원버전에 대한 코드(최신)
                    xmlhttp = new XMLHttpRequest();
                } else {  // 구버전용 코드
                    xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
                }
                xmlhttp.onreadystatechange = function () {
                    if (this.readyState == 4 && this.status == 200) {
                        document.getElementById("txtHint").innerHTML = this.responseText;
                    }
                }
                xmlhttp.open("GET", "getcdPHP.php?q=" + str, true);
                xmlhttp.send();
            }
        </script>
    </head>
    <body>

        <form>
            Select a CD:
            <select name="cds" onchange="showCD(this.value)">
                <option value="">Select a CD:</option>
                <option value="Bob Dylan">Bob Dylan</option>
                <option value="Bee Gees">Bee Gees</option>
                <option value="Cat Stevens">Cat Stevens</option>
            </select>
        </form>
        <div id="txtHint"><b>CD info will be listed here...</b></div>

    </body>
</html> 
<!--
CD가 선택되었는지 확인
xmlhttprequest 객체 생성
서버가 응답 준비되면 실행될 함수 생성
서버의 파일에 요청 종료를 보냄
q 파라미터가 URL에 첨부되었다고 알림
-->