<?php
    $score = 100;

    if ($score >= 80)
    {
        echo "合格です。";
    }
    else if ($score >= 50){
        echo "惜しい！もう一歩です。";
    }
    else {
        echo "残念。不合格です。";
    }