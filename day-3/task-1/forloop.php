<?php
echo "<h2>For Loop in PHP.</h2>";
echo "<table border='2'>";
for ($i=1; $i<=15 ; $i++) {
		echo "<tr>"; 
    if ($i%2==0) {
        echo "<td bgcolor='orange'>$i</td>";
    }
    else {
        echo "<td bgcolor='lightblue'>$i</td>";
    }
    echo "</tr>";
}
	echo "</table>";
