<?php
$start = isset($_POST['start']) ? (int)$_POST['start'] : '';
$end = isset($_POST['end']) ? (int)$_POST['end'] : '';

if (!is_numeric($start) || !is_numeric($end)) {
    echo "Будь ласка, введіть числа!";
} elseif ($start == 0 || $end == 0) {
    echo "Ділення на 0 неможливе!";
} else {
    $min = min($start, $end);
    $max = max($start, $end);

    echo "<table border='1'>";
    for ($i = $min; $i <= $max; $i++) {
        echo "<tr>";
        if ($i == 0) {
            echo "<td>Ділення на 0 неможливе!</td>";
        } else {
            echo "<td>10 : $i = " . number_format(10 / $i, 2) . "</td>";
        }
        echo "</tr>";
    }
    echo "</table>";
}
?>