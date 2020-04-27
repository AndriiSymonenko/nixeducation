<?php
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
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Урок 3</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>



</form>
</body>
</html>

