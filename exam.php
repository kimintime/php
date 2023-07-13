<?php
$studentsFile = 'exam.txt';
$students = [];
$file = fopen($studentsFile, 'r');

if ($file) {
    while (($line = fgets($file)) !== false) {
        $studentInfo = explode('|', $line);
        $studentNumber = $studentInfo[0];
        $points = array_slice($studentInfo, 1);
        $students[$studentNumber] = $points;
    }
    fclose($file);

    $totalStudents = count($students);
    $totalPoints = 0;

    echo "There were $totalStudents students:" . PHP_EOL;
    foreach ($students as $studentNumber => $points) {
        $sumPoints = array_sum($points);
        $totalPoints += $sumPoints;
        echo "$studentNumber: $sumPoints points" . PHP_EOL;
    }

    $pointAverage = $totalPoints / $totalStudents;
    echo "The point average was $pointAverage points.";
} else {
    echo "File not found!";
}
?>
