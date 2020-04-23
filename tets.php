
<table border = 1>
<?php
$r = '';
    $r .= "<tr>";
    for ( $i = 1; $i <= 12; $i++ ){
        $r .= "<tr>";
        for ( $j = 1; $j <= 12; $j++ ){
            $c = ($i == 1 || $j == 1) ? 'blue' : 'red';
            $v = ($c == 'blue' || $i % 2 == 0) ? '<b>'.($i*$j).'</b>' : ($i*$j);
            $r .= "<td bgcolor=$c>$v</td>";
        }
    }
    $r .= "</tr>";

echo $r;
?>
</table>