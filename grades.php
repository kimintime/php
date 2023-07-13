<?php
$gradesFile = fopen('grades.txt', 'r');
if ($gradesFile) {
    $raisedGrades = [];
    while (($grade = fgets($gradesFile)) !== false) {
        $grade = intval($grade);
        if ($grade < 5) {
            $grade++;
        }
        $raisedGrades[] = $grade;
    }
    fclose($gradesFile);

    $resultsFile = fopen('results.txt', 'w');
    if ($resultsFile) {
        foreach ($raisedGrades as $grade) {
            fwrite($resultsFile, $grade . PHP_EOL);
        }
        fclose($resultsFile);

        echo "New grades:" . PHP_EOL;
        foreach ($raisedGrades as $grade) {
            echo $grade . PHP_EOL;
        }
    } else {
        echo "Failed to open results.txt for writing.";
    }
} else {
    echo "Failed to open grades.txt for reading.";
}
?>
