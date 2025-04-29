<?php
    // vypsani hodnoty
    echo "test";
    echo "<br>";
    var_dump("test2");
    echo "<br>";

    // odkazy
    echo "<a href='https://euforie.cz'>Web Euforie</a>";
    echo "<br>";
    echo "<a href='contact.php'>Kontaktujte nas</a>";
    echo "<br>";

    // staticke a dynamicke typovani
    $name = "Ondra";
    $name = 100;
    echo $name;
    echo "<br>";

    //true a false
    $kolej = true;
    $is_logged = true;
    $database_connection = false;

    echo "Prihlaseni uzivatele: $is_logged";
    echo "<br>";
    echo "Napojeni do databaze: $database_connection";
    echo "<br>";

    // null -> stejny jak JS proste

    // matematicke operace ... klasika
    $students_2022 = 100;
    $students_2023 = 124;

    $result = $students_2023 - $students_2022;
    echo "Vysledek: $result";
    echo "<br>";

    // spojovani promennych pomoci tecky
    $first_name = "Harry";
    $second_name = "Potter";
    echo $first_name . " " . $second_name;


?>