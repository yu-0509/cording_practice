<?php
    $a1 = array("赤", "青", "黄");

    echo $a1[0];
    echo $a1[1];
    echo $a1[2];
    echo "<br>";

    $a1[3] = "緑";
    $a1[] = "紫";

    var_dump($a1);