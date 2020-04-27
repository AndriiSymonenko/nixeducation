

<?php
echo "<title>Урок 2</title>";
echo "<link rel='stylesheet' href='../css/style.css'>";

echo "<table class='multiplication-table' border = \"1\">\n";

for ($firstNumber = 1; $firstNumber <= 10; $firstNumber++) {
    for ($tr = 1; $tr <= 2; $tr++ ) {
        echo "<tr>";
        for ($td = 1; $td <= 5; $td++ ) {
            echo "<td>";
            for ($secondNumber = 1; $secondNumber <= 10; $secondNumber++) {


//                temporary crutches
                $test = " " . "X" . " ";
                if ($firstNumber == 1) {
                   echo "<span class = 'red'>$firstNumber</span>" . $test;
                }
                elseif ($firstNumber == 2) {
                    echo "<span class = 'green'>$firstNumber</span>" . $test;
                }
                elseif ($firstNumber == 3) {
                    echo "<span class = 'yellow'>$firstNumber</span>" . $test;
                }
                elseif ($firstNumber == 4) {
                    echo "<span class = 'blue'>$firstNumber</span>" . $test;
                } elseif ($firstNumber ==  10) {
                    $firstNumber = strval($firstNumber);
                    echo "<span class='red'>$firstNumber[0]</span>" . "$firstNumber[1]" . $test;

                } else {
                    echo "<span>$firstNumber</span>" . " " . "X" . " ";
                }



                if ($secondNumber == 1) {
                    echo "<span class = 'red'>$secondNumber</span>" . " " . "=" . " ";
                }
                elseif ($secondNumber == 2) {
                    echo "<span class = 'green'>$secondNumber</span>" . " " . "=" . " ";
                }
                elseif ($secondNumber == 3) {
                    echo "<span class = 'yellow'>$secondNumber</span>" . " " . "=" . " ";
                }
                elseif ($secondNumber == 4) {
                    echo "<span class = 'blue'>$secondNumber</span>" . " " . "=" . " ";
                } elseif ($secondNumber ==  10) {
                    $secondNumber = strval($secondNumber);
                    echo "<span class='red'>$secondNumber[0]</span>" . "$secondNumber[1]" . " " . "=" . " ";
                }
                else {
                    echo "<span>$secondNumber</span>" . " " . "=" . " ";
                }


                $mulNumber = $firstNumber * $secondNumber;

                $mulNumber = str_split($mulNumber);
                for ($i = 0; $i < count($mulNumber); $i++) {
                    if ($mulNumber[$i] == 1) {
                        echo "<span class='red'>$mulNumber[$i]</span>";
                    }
                    elseif ($mulNumber[$i] == 2) {
                        echo  "<span class='green'>$mulNumber[$i]</span>";
                    }
                    elseif ($mulNumber[$i] == 3) {
                        echo  "<span class='yellow'>$mulNumber[$i]</span>";
                    }
                    elseif ($mulNumber[$i] == 4) {
                        echo  "<span class='blue'>$mulNumber[$i]</span>";
                    }
                    else {
                        echo $mulNumber[$i];
                    }
                }
                echo "<br>";

                //                temporary crutches

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