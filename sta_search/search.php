<?php
// JSONファイルのパス
$jsonFilePath = $_POST['area'];
if(isset($jsonFilePath)) {
// JSONファイルの内容を取得
$jsonContent = file_get_contents($jsonFilePath);
if ($jsonContent === false) {
    die('Error: Unable to read JSON file.');
}

// JSONをデコードしてPHPの配列に変換
$data = json_decode($jsonContent, true);
if ($data === null) {
    die('Error: Invalid JSON format.');
}

// フォームから送信された値を取得
$staKey = isset($_POST['sta_key']) ? $_POST['sta_key'] : '';

// 類似度の閾値を設定
$similarityThreshold = 3; // 例：Levenshtein距離が3以下なら類似とみなす

$matchingStations = [];

// 駅名と比較
foreach ($data['stations'] as $station) {
    $stationName = $station['name'];
    $levenshteinDistance = levenshtein($staKey, $stationName);

    if ($levenshteinDistance <= $similarityThreshold) {
        $matchingStations[] = $station;
    }
}

// 結果を出力
if (!empty($matchingStations)) {
    echo '<div class="card">';
    foreach ($matchingStations as $station) {
        echo 'Name: ' . htmlspecialchars($station['name']) . '<br>';
        echo 'Lines:<br>';
        foreach ($station['lines'] as $line) {
            echo '- ' . htmlspecialchars($line['name']) . ' (Num: ' . implode(', ', array_map('htmlspecialchars', $line['num'])) . ')<br>';
        }
        echo '</div><hr>';
    }
} else {
    echo '<div class="card">No matching stations found.</div>';
}
}
?>