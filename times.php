<?php

    echo "<table border='1'>";
for ($i = 1; $i <= 10; $i++) {
    echo "<tr>";
    for ($j = 2; $j <= 9; $j++) {
        echo "<td>$j * $i = " . ($j * $i) . "</td>";
    }
    echo "</tr>";
}
    echo "</table>";

?>
