<?php
    $color = "青";

    switch ($color) {
        case "赤":
            echo "止まってください！";
            break;
        case "青":
        case "緑":
            echo "進んでください！";
            break;
        default:
            echo "左右の確認を！";
            break;
    }