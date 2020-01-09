<?php
    $link = mysqli_connect("localhost", "jikkyo", "pass", "jikkyo_pension");

    if ($link == null)
    {
        die("接続に失敗しました:" . mysqli_connect_error());
    }

    mysqli_set_charset($link, "utf8");

    $sql = "SELECT * FROM room_type";

    // クエリの実行
    $result = mysqli_query($link, $sql);

    // 実行結果の表示
    echo "データ件数は" . mysqli_num_rows($result) . "件<br>";
    while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC))
    {
        echo $row["type_name"] . "<br>";
    }

    // メモリの開放
    mysqli_free_result($result);

    // データベース接続を閉じる
    mysqli_close($link);