
<!DOCTYPE html>
<html>
    <body>

        <?php
        $myfile = fopen("webdictionary.txt", "r") or die("Unable to open file!");
        echo fread($myfile, filesize("webdictionary.txt"));
        echo '<br>';
        echo '<br>';
        fclose($myfile);
        /*
         * fopen과 함께 사용하는 모드들
         * r 	Open a file for read only. File pointer starts at the beginning of the file
         * w 	Open a file for write only. Erases the contents of the file or creates a new file if it doesn't exist. File pointer starts at the beginning of the file
         * a 	Open a file for write only. The existing data in file is preserved. File pointer starts at the end of the file. Creates a new file if the file doesn't exist
         * x 	Creates a new file for write only. Returns FALSE and an error if file already exists
         * r+ 	Open a file for read/write. File pointer starts at the beginning of the file
         * w+ 	Open a file for read/write. Erases the contents of the file or creates a new file if it doesn't exist. File pointer starts at the beginning of the file
         * a+ 	Open a file for read/write. The existing data in file is preserved. File pointer starts at the end of the file. Creates a new file if the file doesn't exist
         * x+ 	Creates a new file for read/write. Returns FALSE and an error if file already exists
         */
        /*
         * 위에 사용된 fread는 fopen으로 파일을 열고
         * 파일의 사이즈 만큼 읽어온다.
         * 
         * fclose로 연 파일을 닫는다.
         */
        ?>

    </body>
</html>



<!DOCTYPE html>
<html>
    <body>

        <?php
        $myfile = fopen("webdictionary.txt", "r") or die("Unable to open file!");
        echo fgets($myfile);
        echo '<br>';
        echo '<br>';
        fclose($myfile);
        /*
         * 파일에서 한줄을 읽어 옴
         */
        ?>

    </body>
</html>



<!DOCTYPE html>
<html>
    <body>

        <?php
        $myfile = fopen("webdictionary.txt", "r") or die("Unable to open file!");
// Output one line until end-of-file
        while (!feof($myfile)) {
            echo fgets($myfile) . "<br>";
        }
        echo '<br>';
        echo '<br>';
        fclose($myfile);
        /*
         * 길이를 알수 없는 파일의 경우
         * feof(end of file)을 사용해서 끝까지 읽어 올수 있다.
         */
        ?>

    </body>
</html>



<!DOCTYPE html>
<html>
    <body>

        <?php
        $myfile = fopen("webdictionary.txt", "r") or die("Unable to open file!");
// Output one character until end-of-file
        while (!feof($myfile)) {
            echo fgetc($myfile);
        }
        fclose($myfile);
        /*
         * fgetc는 한 글자씩 읽어 온다.
         */
        ?>

    </body>
</html>
