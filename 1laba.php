<?php
$rows=5;
$columns=3;

echo '<html><body>';

echo '<table border="2">';
for ($i = 1; $i <= $rows; $i++)
{ echo '<tr>';
    for ($j = 1; $j <= $columns; $j++) {
        if (($i + $j)%2==0) {
            $c = "green";
            }
        else {
            $c = "blue";
            }
    echo '<td bgcolor=' . $c . '><font color="yellow">' . $i . $j . '</font></td>';
    }
    echo '</tr>';
}
echo '</table>';

echo '<table border="2">';
$colors = array("red", "blue", "green", "yellow", "orange", "purple");

foreach ($colors as $color){
    echo '<tr>';
    echo '<td bgcolor="' . $color . '"></td>';
    echo '<td>' . $color . '</td>';
    echo '</tr>';
}
echo '</table>';


echo '<table border="2">';
echo '<tr><td></td>';
for ($i = 1; $i <=10; $i++){
    echo '<td>' . $i . '</td>' ;
}
echo '</tr>';

for ($i = 1; $i <=10; $i++) {
    echo '<tr>';
    echo '<td>' . $i . '</td>';
    for ($j = 1; $j <=10; $j++){
        echo '<td>' . ($i * $j) . '</td>';
    }
    echo '</tr>';
}
echo '</table>';


$file = 'Devel.txt';
if (file_exists($file)){
    $devel = file_get_contents($file);

    echo $devel;
}
echo '<h1>Виконуємо завдання лабораторної роботи №1</h1>';
echo '</body></html>';

?>

