<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=320">
    <title>駅サーチ!for 3DS</title>
    <?php include 'meta.php'; ?>
</head>
<body>
    <h1>駅サーチ!for 3DS</h1>
    <h3>Ver. 0.1.2</h3>
    <form action="search.php" method="post">
        <label for="area-value">エリアを選択</label>
        <select name="area" id="area-value">
            <optgroup>関東エリア</optgroup>
            <option value="jre">JR東日本</option>
            <option value="tobu">東武鉄道</option>
        </select>
        <br>
        <label for="sta-name">駅名を入力</label>
        <input type="text" name="sta_name" id="sta-name">
        <br>
        <input type="submit" value="検索">
    </form>
</body>
</html>