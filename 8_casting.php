<!DOCTYPE html>
<html lang="en">
<<pre>
    <?php
    $a = 5;       // Integer
    $b = 3.14;    // Float
    $c = "Nasi Padang"; // String
    $d = "Lauk Rendang"; // String
    $e = "Es Degan"; // String
    $f = true;    // Boolean
    $g = NULL;    // NULL

    $a = (String) $a;
    $b = (String) $b;
    $c = (String) $c;
    $d = (String) $d;
    $e = (String) $e;
    $f = (String) $f;
    $g = (String) $g;

    //To verify the type of any object in PHP, use the var_dump() function:
    var_dump($a);
    var_dump($b);
    var_dump($c);
    var_dump($d);
    var_dump($e);
    var_dump($f);
    var_dump($g);
    ?>
    </pre>

    <p>Note that when casting a string that starts with a number, the (int) function uses that number. 
        If it does not start with a number, the (int) function convert strings into the number 0.</p>

    </body>

</html>