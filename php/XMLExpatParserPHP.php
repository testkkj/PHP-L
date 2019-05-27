<!DOCTYPE html>
<html>
    <body>

        <?php
        /*
         * 이벤트 베이스 파서 작동방식
         * <from>Jani</from>
         * 요소선택 : 프롬
         * CDATA 섹션 시작, 값 : 자니
         * 요소선택 : 프롬
         */
//파서 초기화
        $parser = xml_parser_create();
        /*
         * XML파서 초기화
         */

//요소의 시작에 쓰일 함수
        function start($parser, $element_name, $element_attrs) {
            switch ($element_name) {
                case "NOTE":
                    echo "-- Note --<br>";
                    break;
                case "TO":
                    echo "To: ";
                    break;
                case "FROM":
                    echo "From: ";
                    break;
                case "HEADING":
                    echo "Heading: ";
                    break;
                case "BODY":
                    echo "Message: ";
            }
        }

//요소의 끝에 쓰일 함수
        function stop($parser, $element_name) {
            echo "<br>";
        }

//문자형을 찾을 때 쓰일 함수
        function char($parser, $data) {
            echo $data;
        }

        /*
         * 사용할 함수들 정의
         */

//요소 핸들러 특정
        xml_set_element_handler($parser, "start", "stop");
        /*
         * 시작과 끝태그를 만날때
         * 어느 함수를 실행 시킬것인지 특정함
         */

//데이터 핸들러 특정
        xml_set_character_data_handler($parser, "char");
        /*
         * 문자형 데이터를 만날때
         * 어느 함수를 실행 시킬지 특정함
         */

//XML 파일 열기
        $fp = fopen("note.xml", "r");

//데이터 읽기
        while ($data = fread($fp, 4096)) {
            xml_parse($parser, $data, feof($fp)) or
                    /*
                     * 파일을 파서함
                     * 사전적으로 파서는
                     * 문장을 문법적인 부분으로 나누는 걸의미
                     * 문장이 있다면 주어 목적어 동사 등등
                     */
                    die(sprintf("XML Error: %s at line %d",
                                    xml_error_string(xml_get_error_code($parser)),
                                    /*
                                     * 오류를 문자로 출력하는 코드
                                     */
                                    xml_get_current_line_number($parser)));
        }

//XML 파서 해제?
        xml_parser_free($parser);
        /*
         * xml_parser_create()에 할당된
         * 메모리를 해제함
         */
        ?>

    </body>
</html>
