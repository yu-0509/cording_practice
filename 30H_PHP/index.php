<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>TEST PENSION</title>
    <link rel="stylesheet" href="./css/style.css" type="text/css">
</head>
<body>
    <header id="header">
        <div id="pr">
            <p>部活・サークル等のグループ利用に最適！アットホームなペンション！</p>
        </div>
        <h1><a href="./index.php"><img src="./images/logo.png" alt=""></a></h1>
        <div id="contact">
            <h2>ご予約／お問い合わせ</h2>
            <span class="tel">☎0120-000-000</span>
        </div>
    </header>

    <nav id="menu">
        <ul>
            <li><a href="./index.php">ホーム</a></li>
            <li><a href="./roomList.php">お部屋紹介</a></li>
            <li><a href="#">ご予約</a></li>
        </ul>
    </nav>

    <div id="icatch">
        <img src="./images/icatch.jpg" alt="">
    </div>

    <div id="contents">
        <main id="main">
            <article>
                <section>
                    <h2><img class="small" src="./images/new.png"><br>更新情報</h2>
                    <dl class="information">
                        <dt>2019-12-26</dt>
                        <dd>サイトオープンしました。</dd>
                    </dl>
                </section>
                    
                <section>
                    <h2><img class="small" src="./images/about.png"><br>TestPensionについて</h2>
                    <h3>にこやか笑顔でお出迎え</h3>
                    <p>少人数で営業している当ペンションですが、スタッフ一同心掛けているのは、
                        <br> にこやかな笑顔で接客対応することです！
                    </p>
                    <h3>大人数でワイワイと</h3>
                    <p>部活やサークル、仲の良いお友達同士などと、
                        <br> 大人数でワイワイしながら過ごすのに最適な環境づくりを目指しています！
                    </p>
                    <h3>観光スポットに恵まれた好立地</h3>
                    <p>ゲレンデ、テニスコート、各種レクリエーション施設へのアクセスは抜群です！
                        <br> また、温泉地の中心街からも近いため、観光にも最適です！
                    </p>
                </section>
            </article>
        </main>

        <aside id="side">
            <h2>ご予約</h2>
            <ul>
                <li><a href="#">宿泊日入力</a></li>
            </ul>
            <h2>お部屋紹介</h2>
            //<?php include("./sideList.php"); ?>
            <?php
                // 前処理
                $link = mysqli_connect("localhost", "jikkyo", "pass", "jikkyo_pension");
                if ($link == null)
                {
                    die("接続に失敗しました");
                }
                mysqli_set_charset($link, "utf8");
                
                // データ取得処理
                $result = mysqli_query($link, "SELECT * FROM room_type");
                echo "<ul>";
                while($row = mysqli_fetch_array($result, MYSQLI_ASSOC))
                {
                    echo "<li><a href='./roomList.php?tid=" . $row['type_id'] . "'>" . $row['type_name'] . "</a><li>";
                }
                echo "</ul>";
            ?>
            <?php
                // 後処理
                mysqli_free_result($result);
                mysqli_close($link);
            ?>
        </aside>
            
        <div id="pageTop">

        </div>

    </div>

    <footer id="footer">
        &copy; PENSION All Rights Reserved.
    </footer>

</body>
</html>