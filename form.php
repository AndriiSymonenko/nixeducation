<?php
error_reporting(-1);
$stringForm = ($_POST['string']);

function getStrrev ($str) {
	$strRev = '';
	for ($i = mb_strlen($str); $i >= 0 ; $i--) { 
		$strRev .= mb_substr($str, $i, 1);
	}

	return $strRev;
}

echo getStrrev($stringForm);

?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>

    <a href="form.html">Назад</a>
</form>
</body>
</html>

