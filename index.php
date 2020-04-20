<?php



$i = 1;
echo "<table border = \"1\">\n";

while ($i <= 2) {
    echo "<tr>";
    $n = 1;
    while ($n <= 5) {
        echo "<td>";
        
    $firstNumber = 1;
    $secondNumber = 1;

while ($secondNumber <= 10) {
    echo "$firstNumber X $secondNumber" . "=" . $firstNumber * $secondNumber . "<br>";
    $secondNumber++;
    }
        echo "</td>";
        $n++;
    }
    echo "</tr>";
    $i++;
}

echo "</table>";


?>
