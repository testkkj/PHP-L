<html>
    <head>
        <script>
            function showUser(str) {
                if (str == "") {
                    document.getElementById("txtHint").innerHTML = "";
                    return;
                } else {
                    if (window.XMLHttpRequest) {
                        // code for IE7+, Firefox, Chrome, Opera, Safari
                        xmlhttp = new XMLHttpRequest();
                    } else {
                        // code for IE6, IE5
                        xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
                    }
                    xmlhttp.onreadystatechange = function () {
                        if (this.readyState == 4 && this.status == 200) {
                            document.getElementById("txtHint").innerHTML = this.responseText;
                        }
                    };
                    xmlhttp.open("GET", "getuser.php?q=" + str, true);
                    xmlhttp.send();
                }
            }
        </script>
    </head>
    <body>

        <form>
            <select name="users" onchange="showUser(this.value)">
                <option value="">Select a person:</option>
                <option value="1">Peter Griffin</option>
                <option value="2">Lois Griffin</option>
                <option value="3">Joseph Swanson</option>
                <option value="4">Glenn Quagmire</option>
            </select>
        </form>
        <br>
        <div id="txtHint"><b>Person info will be listed here...</b></div>

    </body>
</html> 
<!--
사람이 선택되었는지 확인
선택되지 않았다면 내용을 비우고 함수를 빠져나옴
사람이 선택되면 다음의 동작을 실행
xmlhttprequest 객체를 생성
서버응답이 준비되면 실행될 함수를 생성
서버의 파일에 요청을 보냄
q 파라미터가 url에 첨부되었다고 알림(드롭다운리스트의 내용도 함께)
-->