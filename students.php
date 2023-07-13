<?php
$studentNumber = $_GET['student'];

$found = false;
$file = fopen('students.txt', 'r');
if ($file) {
    while (($line = fgets($file)) !== false) {
        $studentInfo = explode('|', $line);
        if ($studentInfo[0] == $studentNumber) {
            $found = true;
            $name = $studentInfo[1];
            $attendance = intval($studentInfo[2]);
            break;
        }
    }
    fclose($file);

    if ($found) {
        $attendanceStatus = ($attendance == 1) ? 'attending' : 'not attending';
        echo "$name($studentNumber): $attendanceStatus";
    } else {
        echo "The provided number did not match a student!";
    }
} else {
    echo "File not found!";
}
?>
