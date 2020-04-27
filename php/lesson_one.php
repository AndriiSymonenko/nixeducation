


<?php
echo "<title>Урок 1</title>";
// with while
//$i = 1;
//echo "<table border = \"1\">\n";
//$firstNumber = 1;
//while ($i <= 2) {
//    echo "<tr>";
//    $n = 1;
//
//    while ($n <= 5) {
//        echo "<td>";
//
//        $secondNumber = 1;
//
//        while ($secondNumber <= 10) {
//            echo "$firstNumber X $secondNumber" . "=" . $firstNumber * $secondNumber . "<br>";
//            $secondNumber++;
//        }
//        echo "</td>";
//        $n++;
//        $firstNumber++;
//    }
//    echo "</tr>";
//    $i++;
//
//}
//
//echo "</table>";
//whith for

echo "<link rel='stylesheet' href='../css/style.css'>";

echo "<table class='multiplication-table' border = \"1\">\n";
for ($firstNumber = 1; $firstNumber <= 10; $firstNumber++) {
    for ($tr = 1; $tr <= 2; $tr++ ) {
        echo "<tr>";
        for ($td = 1; $td <= 5; $td++ ) {
            echo "<td>";

            for ($secondNumber = 1; $secondNumber <= 10; $secondNumber++) {
                echo "$firstNumber X $secondNumber" . " " . "=" .  " " . $firstNumber * $secondNumber . "<br>";
            }
            echo "</td>";
            $firstNumber++;
        }
        echo "</tr>";
    }
}
echo "</table>";


echo "<a class='go-index-global' href='../index.html'>На главную</a>";


?>
