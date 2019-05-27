<?php

/*
 * XML DOM Parser
 * 1단계 : XML Document
 * 2단계 : 루트 요소 : 프롬
 * 3단계 : 글자 요소 : 자니
 */
$xmlDoc = new DOMDocument();
$xmlDoc->load("note.xml");

print $xmlDoc->saveXML();
?> 



<?php

$xmlDoc = new DOMDocument();
$xmlDoc->load("note.xml");

$x = $xmlDoc->documentElement;
foreach ($x->childNodes AS $item) {
    print $item->nodeName . " = " . $item->nodeValue . "<br>";
}
?> 