<?php
$token = array('Player 1-', 'Player 2-', 'Player 3-', 'Player 4-',);

$num = array(1, 2, 3, 4, 5, 6, 7, 79, 9, 10, 11, 12, 13, 14, 15, 16);

$counttoken = count($token);
echo "<table>";
foreach($token as $key=>$value)
{
    echo "<tr><td>$value</td>";
    for($i=0; $i<$counttoken;$i++)
    {
        echo "<td>" .$num[$i + ($key * $counttoken)]. "</td>";
    }
    echo "</tr>";
}
echo "</table>";
?>