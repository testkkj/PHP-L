
<?php
$q = $_GET["q"];

$xmlDoc = new DOMDocument();
$xmlDoc->load("cd_catalog.xml");

$x = $xmlDoc->getElementsByTagName('ARTIST');

for ($i = 0; $i <= $x->length - 1; $i++) {
    //Process only element nodes??
    if ($x->item($i)->nodeType == 1) {
        if ($x->item($i)->childNodes->item(0)->nodeValue == $q) {
            $y = ($x->item($i)->parentNode);
        }
    }
}

$cd = ($y->childNodes);

for ($i = 0; $i < $cd->length; $i++) {
    //Process only element nodes
    if ($cd->item($i)->nodeType == 1) {
        echo("<b>" . $cd->item($i)->nodeName . ":</b> ");
        echo($cd->item($i)->childNodes->item(0)->nodeValue);
        echo("<br>");
    }
}
?> 
<!--
php가 xml dom 객체 생성
자바스크립트로부터 보내진 이름을 아티스트 요소로부터 스캔
앨범 정보를 출력
-->