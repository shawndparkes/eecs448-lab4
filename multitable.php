<?php

echo "<table>";
echo "<tr><td></td>";

for($z = 1; $z <= 100; $z++)
{
    echo "<td>" . $z . "</td>";
}

echo "</tr><tr>";

for($y = 1; $y <= 100; $y++)
{
    echo "<td>" . $y . "</td>";
    
    for($x = 1; $x <= 100; $x++)
    {
        $a = $x * $y;
        echo "<td>" . $a . "</td>";
    }
    
    echo "</tr><tr>";
}

echo "</tr></table>";

?>
