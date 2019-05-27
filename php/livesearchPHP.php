
<?php

$xmlDoc = new DOMDocument();
$xmlDoc->load("links.xml");

$x = $xmlDoc->getElementsByTagName('link');

//get the q parameter from URL
$q = $_GET["q"];

//lookup all links from the xml file if length of q>0
if (strlen($q) > 0) {
    $hint = "";
    for ($i = 0; $i < ($x->length); $i++) {
        $y = $x->item($i)->getElementsByTagName('title');
        $z = $x->item($i)->getElementsByTagName('url');
        if ($y->item(0)->nodeType == 1) {
            //find a link matching the search text
            if (stristr($y->item(0)->childNodes->item(0)->nodeValue, $q)) {
                if ($hint == "") {
                    $hint = "<a href='" .
                            $z->item(0)->childNodes->item(0)->nodeValue .
                            "' target='_blank'>" .
                            $y->item(0)->childNodes->item(0)->nodeValue . "</a>";
                } else {
                    $hint = $hint . "<br /><a href='" .
                            $z->item(0)->childNodes->item(0)->nodeValue .
                            "' target='_blank'>" .
                            $y->item(0)->childNodes->item(0)->nodeValue . "</a>";
                }
            }
        }
    }
}

// Set output to "no suggestion" if no hint was found
// or to the correct values
if ($hint == "") {
    $response = "no suggestion";
} else {
    $response = $hint;
}

//output the response
echo $response;
/*
 * xml dom 객체에 xml파일을 로드함
 * 자바스크립트로부터 보내진 텍스트에 맞는 값을 타이틀 요소를 루프하여 찾음
 * 리스판스 변수에 올바른 url과 제목을 저장하고, 하나이상일경우 모두 보임
 * 값이 없다면 제안없음 출력
 */
?> 