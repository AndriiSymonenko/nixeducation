<?php

echo "<title>Урок 3</title>";

echo "<link rel='stylesheet' href='../css/style.css'>";

error_reporting(-1);
if (!empty($_POST)) {

    $stringForm = ($_POST['string']);

    function getStrrev($str)
    {
        $strRev = '';

        for ($i = mb_strlen($str); $i >= 0; $i--) {
            $strRev .= mb_substr($str, $i, 1);
        }

        return $strRev;
    }

    $reverseResult = getStrrev($stringForm);

    echo "<div class='reverse-container'>";
    echo "<p class='reverse-string'>$reverseResult</p>";
    echo "</div>";
    echo "<a class='button prev-button' href= '../lesson_three.html'>Назад</a>";
}

?>


