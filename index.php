<?php
    // 28_4_2025
    // vypsani hodnoty

    echo "vypsani hodnoty";
    echo "<br>";
    echo "test";
    echo "<br>";
    var_dump("test2");
    echo "<br>";
    echo "<br>";

    // odkazy
    echo "odkazy";
    echo "<br>";
    echo "<a href='https://euforie.cz'>Web Euforie</a>";
    echo "<br>";
    echo "<a href='contact.php'>Kontaktujte nas</a>";
    echo "<br>";
    echo "<br>";

    // staticke a dynamicke typovani
    echo "staticke a dynamicke typovani";
    echo "<br>";

    $name = "Ondra";
    $name = 100;

    echo $name;
    echo "<br>";
    echo "<br>";

    //true a false
    echo "true/false";
    echo "<br>";

    $kolej = true;
    $is_logged = true;
    $database_connection = false;

    echo "Prihlaseni uzivatele: $is_logged";
    echo "<br>";
    echo "Napojeni do databaze: $database_connection";
    echo "<br>";
    echo "<br>";

    // null -> stejny jak JS proste

    // matematicke operace ... klasika
    echo "matematicke operace";
    echo "<br>";

    $students_2022 = 100;
    $students_2023 = 124;

    $result = $students_2023 - $students_2022;

    echo "Vysledek: $result";
    echo "<br>";
    echo "<br>";

    // spojovani promennych pomoci tecky
    echo "spojovani pomoci tecky";
    echo "<br>";

    $first_name = "Harry";
    $second_name = "Potter";

    echo $first_name . " " . $second_name;
    echo "<br>";
    echo "<br>";

    // 29_4_2025
    // konverze typu
    echo "konverze typu";
    echo "<br>";

    $year_price = "1500";
    $year_count = "7";

    $result_price = $year_price * $year_count;

    echo $result_price;
    echo "<br>";
    var_dump($year_price);
    echo "<br>";
    echo "<br>";

    // negace / stejne jak JS
    echo "negace";
    echo "<br>";

    $database_connection = true;

    var_dump(!$database_connection);
    echo "<br>";
    echo "<br>";

    // 3 vypisy stringu
    echo "vypisy stringu";
    echo "<br>";

    $first_name = "Tony";
    
    echo "Ahoj ". $first_name;
    echo "<br>";
    echo "Ahoj $first_name";
    echo "<br>";
    echo "Ahoj {$first_name}";
    echo "<br>";
    echo "<br>";

    // pole
    echo "pole";
    echo "<br>";

    $student_1 = "Harry";
    $student_2 = "Hermiona";
    $student_3 = "Ron";

    $students = ["Harry", "Hermiona", 6 => "Ron"];

    var_dump ($students[6]);
    echo "<br>";
    echo "<br>";

    // asociativni pole
    echo "asociativni pole";
    echo "<br>";

    $superstudents = [
        "jedna" => "Harry",
        "ctyri" => "Ron",
        "pet" => "Hermiona"
    ];

    echo $superstudents["jedna"];
    echo "<br>";

    $student1 = [
        "first_name" => "Harry",
        "last_name" => "Potter",
        "college" => "Nebelvir",
        "age" => 14
    ];

    echo $student1["college"];
    echo "<br>";
    var_dump($student1);
    echo "<br>";
    echo "<br>";

    // dvoudimenzionalni pole
    echo "dvoudimenzionalni pole";
    echo "<br>";

    $students_new = [
        [
           "first_name" => "Harry",
           "second_name" => "Potter",
           "age" => 15 
        ],
        [
            "first_name" => "Hermiona",
            "second_name" => "Grangerov8",
            "age" => 14 
        ],
        [
            "first_name" => "Ron",
            "second_name" => "Weasley",
            "age" => 16 
        ]
    ];
        echo $students_new [0]["first_name"];
        echo "<br>";
        echo $students_new[1]["age"];
        echo "<br>";
        echo $students_new[2]["second_name"];
        echo "<br>";
        echo "<br>";

    // foreach cyklus
    echo "foreach cyklus";
    echo "<br>";

    $new_students = ["Harry", "Ron", "Hermiona"];

    foreach ($new_students as $one_student) {
        echo $one_student;
        echo "<br>";
    };
    echo "<br>";
    echo "<br>";

    // foreach indexy
    echo "foreach indexy";
    echo "<br>";

    $another_students = ["Harry", "Ron", "Hermiona", "David", "Malfoy"];

    foreach ($another_students as $index => $one_student) {
        $index++;
        echo $index." ".$one_student;
        echo "<br>";
    };

    echo "<br>";
    echo "<br>";

    // foreach a asociativni pole
    echo "foreach a asociativni pole";
    echo "<br>";

    $student1 = [
        "first_name" => "Milos",
        "second_name" => "Kopecky",
        "age" => 11
    ];

    foreach ($student1 as $index => $one_information) {
        echo $index.": ".$one_information;
        echo "<br>";
    };
    echo "<br>";
    echo "<br>";

    // cykuls for
    echo "cyklus for";
    echo "<br>";

    for ($i = 1; $i <= 10; $i++) {
        echo $i.". anything";
        echo "<br>";
    };
    echo "<br>";
    echo "<br>";

    // cyklus for a vicestrankovy web
    echo "cyklus for a vicestrankovy web";
    echo "<br>";

    for ($i = 1; $i <= 5; $i++) {
        echo "<a href='stranka$i.php'>Dalsi stranka</a>";
        echo "<br>";

    };

    echo "<br>";
    echo "<br>";

    // cyklus while
    echo "cylkus while";
    echo "<br>";

    $test_questions = ["1. otazka", "2. otazka", "3. otazka", "4. otazka", "5. otazka"];

    $maximum = 2;
    $counter = 0;

    while($counter < $maximum) {
        echo $test_questions[$counter];
        echo "<br>";
        $counter++;
    };

    echo "<br>";
    echo "<br>";

    // podminky
    echo "podminky";
    echo "<br>";
    
    if(5 === "5"){
        echo "Ano, je to pravda";
    } else {
        echo "Ne, neni to pravda.";
    }
    
    echo "<br>";
    echo "<br>";

    // podminky a promenne
    echo "podminky a promenne";
    echo "<br>";

    $college2 = "Zmijozel";

    if ($college2 === "Nebelvir") {
        echo "Vstupte";
    } else {
        echo "Sem nemas pristup";
    }
    echo "<br>";

    $articles = [];

    if (empty($articles)) {
        echo "Nebyly nalezeny zadne clanky";
    } else {
        echo "Neco tady je";
    };

    echo "<br>";
    echo "<br>";

    // exit() zajisti ukonceni pri nesplneni podminky a pokracuje dalsim kodem

    // logicke operatory
    echo "logicke operatory";
    echo "<br>";

    $new_age = 15;

    if ($new_age >= 18 and $new_age < 65){
        echo "Jeste nejdes do duchodu";
    } elseif ($new_age < 18) {
        echo "Jsi jeste mlady kure";
    } else {
        echo "Jsi regulerni duchodce";
    };

    echo "<br>";

    $password = "12345";

    if ($password === "12345" or $password === "56789"){
        echo "Vstup, clovece";
    } else {
        echo "Neplatny kod, zkus to znovu";
    }

    echo "<br>";
    echo "<br>";

    // switch statement
    echo "switch statement";
    echo "<br>";

    $day = "po";

    switch ($day){
        case "po":
            echo "Pondeli";
            break;
        case "ut":
            echo "Utery";
            break;
        case "st":
            echo "Streda";
            break;
        default:
            echo "Prepsal ses, clovece";
            break;
    };

    echo "<br>";
    echo "<br>";

?>