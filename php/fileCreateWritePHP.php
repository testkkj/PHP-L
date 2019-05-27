<?php

$myfile = fopen("newfile.txt", "w") or die("Unable to open file!");
$txt = "John Doe\n";
fwrite($myfile, $txt);
$txt = "Jane Doe\n";
fwrite($myfile, $txt);
fclose($myfile);
/*
 * fopen은 파일을 열때 그리고 파일을 생성할때도 사용할 수있다.
 */
?> 

<?php

$myfile = fopen("newfile.txt", "w") or die("Unable to open file!");
$txt = "Mickey Mouse\n";
fwrite($myfile, $txt);
$txt = "Minnie Mouse\n";
fwrite($myfile, $txt);
fclose($myfile);
/*
 * 같은 파일이름을 다시 쓸경우 새로 입력하는 값이 덮어써진다.
 */
?> 