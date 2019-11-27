<?php

$i = 1;
for (; ;) {
    if ($i > 20) {
        break;
    }
    echo "$i";
    $i++;
}
for ($i = 1, $j = 0; $i <= 10; $j += $i, print $i, $i++);
?>



