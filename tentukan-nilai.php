<?php
function tentukan_nilai($number)
{
    if ($number >= 60 && $number < 70) {
        echo 'Nilai : ' . $number . '; CUKUP';
    } else if ($number >= 70 && $number < 85) {
        echo 'Nilai : ' . $number . '; BAIK';
    } else if ($number >= 85 && $number <= 100) {
        echo 'Nilai : ' . $number . '; SANGAT BAIK';
    } else {
        echo 'Nilai : ' . $number . '; KURANG';
    }
}

//TEST CASES
echo tentukan_nilai(98); //Sangat Baik
echo "<br>";
echo tentukan_nilai(76); //Baik
echo "<br>";
echo tentukan_nilai(67); //Cukup
echo "<br>";
echo tentukan_nilai(43); //Kurang
echo "<br>";
?>