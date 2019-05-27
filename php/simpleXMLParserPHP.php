<!DOCTYPE html>
<html>
    <body>

        <?php
        $myXMLData = "<?xml version='1.0' encoding='UTF-8'?>
<note>
<to>Tove</to>
<from>Jani</from>
<heading>Reminder</heading>
<body>Don't forget me this weekend!</body>
</note>";

        $xml = simplexml_load_string($myXMLData) or die("Error: Cannot create object");
        print_r($xml);
        /*
         * 이 함수는 문자열로부터 XML데이터를 읽어 온다.
         */
        ?>

    </body>
</html>



<!DOCTYPE html>
<html>
    <body>

        <?php
        libxml_use_internal_errors(true);
        $myXMLData = "<?xml version='1.0' encoding='UTF-8'?>
<document>
  <user>John Doe</wronguser>
  <email>john@example.com</wrongemail>
</document>";

        $xml = simplexml_load_string($myXMLData);
        if ($xml === false) {
            echo "Failed loading XML: ";
            foreach (libxml_get_errors() as $error) {
                echo "<br>", $error->message;
            }
        } else {
            print_r($xml);
        }
        ?>

    </body>
</html>



<!DOCTYPE html>
<html>
    <body>

        <?php
        $xml = simplexml_load_file("note.xml") or die("Error: Cannot create object");
        print_r($xml);
        ?>

    </body>
</html>
