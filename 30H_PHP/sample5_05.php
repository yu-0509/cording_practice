<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="./sample5_03.php" method="post">
    <p>入力値をsample5_03.phpへpost送信します</p>

    <p>名前を入力してください（テキストボックス）</p>
    <input type="text" name="param" value="jikkyo">
    
    <p>性別を入力してください（ラジオボタン）
        <input type="radio" name="gender" value="man">男
        <input type="radio" name="gender" value="woman">女
    </p>

    <p>年齢層を指定してください（セレクトボックス）
    <select name="age">
        <option value="10">-19</option>
        <option value="20">20-29</option>
        <option value="30">30-39</option>
    </select>

    <p>誕生日を入力してください（日付入力：対応ブラウザのみ）
        <input type="date" name="birth">
    </p>
    <input type="submit">
    <input type="reset">
    </form>
</body>
</html>