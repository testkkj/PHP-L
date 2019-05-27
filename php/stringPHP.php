<?php

echo strlen("Hello world!"); // outputs 12
/* strlen() 문자열의 길이를 리턴 */
?> 

<?php

echo str_word_count("Hello world!"); // outputs 2
/* str_word_count() 문자열의 단어의 수를 리턴 */
?> 

<?php

echo strrev("Hello world!"); // outputs !dlrow olleH
/* strrev() 문자열을 거꾸로 출력 */
?> 

<?php

echo strpos("Hello world!", "world"); // outputs 6
/* strpos() 문자열에서 일치하는 값을 찾아 첫번째 자리를 리턴 */
?> 

<?php

echo str_replace("world", "Dolly", "Hello world!"); // outputs Hello Dolly!
/* str_replace() 문자열에서 일치하는 값을 찾아 바꿈 */
?> 

