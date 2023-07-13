<?php
$nominee = $_GET['nominee'];

$resultsFile = fopen('results.txt', 'r');
if ($resultsFile) {
    $results = [];
    while (($line = fgets($resultsFile)) !== false) {
        $lineParts = explode('|', $line);
        $nomineeNumber = $lineParts[0];
        $votes = intval($lineParts[1]);
        $results[$nomineeNumber] = $votes;
    }
    fclose($resultsFile);

    $results[$nominee]++;
    
    $resultsFile = fopen('results.txt', 'w');
    if ($resultsFile) {
        foreach ($results as $nomineeNumber => $votes) {
            fwrite($resultsFile, $nomineeNumber . '|' . $votes . PHP_EOL);
        }
        fclose($resultsFile);

        
        $totalVotes = array_sum($results);
        echo "Total votes: $totalVotes.";
    } else {
        echo "Failed to open results.txt for writing.";
    }
} else {
    echo "Failed to open results.txt for reading.";
}
?>
