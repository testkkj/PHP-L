
<!DOCTYPE html>
<html>
    <body>

        <h1>Welcome to my home page!</h1>
        <p>Some text.</p>
        <p>Some more text.</p>
        <?php include 'footerPHP.php'; ?>

    </body>
</html>



<!DOCTYPE html>
<html>
    <body>

        <div class="menu">
            <?php include 'menuPHP.php'; ?>
        </div>

        <h1>Welcome to my home page!</h1>
        <p>Some text.</p>
        <p>Some more text.</p>

    </body>
</html>



<!DOCTYPE html>
<html>
    <body>

        <h1>Welcome to my home page!</h1>
        <?php
        include 'varsPHP.php';
        echo "I have a $color $car.";
        ?>

    </body>
</html>



<!DOCTYPE html>
<html>
    <body>

        <h1>Welcome to my home page!</h1>
        <?php
        include 'noFileExists.php';
        echo "I have a $color $car.";
        ?>

    </body>
</html>



<!DOCTYPE html>
<html>
    <body>

        <h1>Welcome to my home page!</h1>
        <?php
        require 'noFileExists.php';
        echo "I have a $color $car.";
        ?>

    </body>
</html>

<?php
/*
 * require 는 참조파일이 없다면 실행되지 않고
 * include 는 참조파일이 없어도 실행 가능한 부분은 실행 된다.
 */
?>