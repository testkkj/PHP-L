<!DOCTYPE html>
<html>
    <body>

        <?php
        $xml = simplexml_load_file("note.xml") or die("Error: Cannot create object");
        echo $xml->to . "<br>";
        echo $xml->from . "<br>";
        echo $xml->heading . "<br>";
        echo $xml->body;
        ?>

    </body>
</html>



<!DOCTYPE html>
<html>
    <body>

        <?php
        $xml = simplexml_load_file("books.xml") or die("Error: Cannot create object");
        echo $xml->book[0]->title . "<br>";
        echo $xml->book[1]->title;
        ?>

    </body>
</html>



<!DOCTYPE html>
<html>
    <body>

        <?php
        $xml = simplexml_load_file("books.xml") or die("Error: Cannot create object");
        foreach ($xml->children() as $books) {
            echo $books->title . ", ";
            echo $books->author . ", ";
            echo $books->year . ", ";
            echo $books->price . "<br>";
        }
        ?>

    </body>
</html>



<!DOCTYPE html>
<html>
    <body>

        <?php
        $xml = simplexml_load_file("books.xml") or die("Error: Cannot create object");
        echo $xml->book[0]['category'] . "<br>";
        echo $xml->book[1]->title['lang'];
        ?>

    </body>
</html>



<!DOCTYPE html>
<html>
    <body>

        <?php
        $xml = simplexml_load_file("books.xml") or die("Error: Cannot create object");
        foreach ($xml->children() as $books) {
            echo $books->title['lang'];
            echo "<br>";
        }
        ?>

    </body>
</html>
