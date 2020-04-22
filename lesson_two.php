<?php

echo "<link rel='stylesheet' href='style.css'>";

echo "<table class='multiplication-table' border = \"1\">\n";
for ($firstNumber = 1; $firstNumber <= 10; $firstNumber++) {
    for ($tr = 1; $tr <= 2; $tr++ ) {
        echo "<tr>";
        for ($td = 1; $td <= 5; $td++ ) {
            echo "<td>";
            for ($secondNumber = 1; $secondNumber <= 10; $secondNumber++) {


//                temporary crutches

                if ($firstNumber == 1) {
                    $color = "<span class = 'red'>";
                }
                elseif ($firstNumber == 2) {
                    $color = "<span class = 'green'>";
                }
                elseif ($firstNumber == 3) {
                    $color = "<span class = 'yellow'>";
                }
                elseif ($firstNumber == 4) {
                    $color = "<span class = 'blue'>";
                }
                else {
                    $color = $color = "<span>";
                }

                if ($secondNumber == 1) {
                    $colorSecond = "<span class = 'red'>";
                }
                elseif ($secondNumber == 2) {
                    $colorSecond = "<span class = 'green'>";
                }
                elseif ($secondNumber == 3) {
                    $colorSecond = "<span class = 'yellow'>";
                }
                elseif ($secondNumber == 4) {
                    $colorSecond = "<span class = 'blue'>";
                }
                else {
                    $colorSecond = "<span>";
                }

                $mulNumber = $firstNumber * $secondNumber;
                $mulNumber = "$mulNumber";
                if ($mulNumber[0] == 1) {
                    $mulColor = "<span class = 'blue'>";
                }
                else {
                    $mulColor = "<span>";
                }

//                temporary crutches


                echo "$color $firstNumber</span>". "X" . "$colorSecond $secondNumber</span>" . " " . "=" .  " " . "$mulColor $mulNumber</span>" . "<br>";
            }
            echo "</td>";
            $firstNumber++;
        }
        echo "</tr>";
    }
}
echo "</table>";



?>