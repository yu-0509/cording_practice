<?php
    $a1 = array(
        "コーヒー" => 150,
        "ジュース" => 200,
        "水" => 0,
    );

    echo $a1["ジュース"];
    echo "<br>";

    $a1["お茶"] = 100;
    $a1[] = 65535;

    var_dump($a1);