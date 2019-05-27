<!DOCTYPE html>
<html>
    <body>

        <h1>My first PHP page</h1>

        <?php
        echo "Hello World!";
        ?>

    </body>
</html>

<!DOCTYPE html>
<html>
    <body>

        <?php
// This is a single-line comment
# This is also a single-line comment

        /*
          This is a multiple-lines comment block
          that spans over multiple
          lines
         */

// You can also use comments to leave out parts of a code line
        $x = 5 /* + 15 */ + 5;
        echo $x;
        ?>

    </body>
</html>

<!DOCTYPE html>
<html>
    <body>

        <?php
        ECHO "Hello World!<br>";
        echo "Hello World!<br>";
        EcHo "Hello World!<br>";
        /* echo의 경우 대소문자와 상관없이 동작 */

        $color = "red";
        echo "My car is " . $color . "<br>";
        echo "My house is " . $COLOR . "<br>";
        echo "My boat is " . $coLOR . "<br>";
        /* color의 경우 선언된 변수와 동일해야 동작 */
        ?>

    </body>
</html> 