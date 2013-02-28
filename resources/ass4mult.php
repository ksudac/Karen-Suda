<html>
<head>
<title>Multiplication Table</title>
</head>
<body>
<h2>Multiplication Table</h2>
<h4>
<?php

$size = $_REQUEST['size'];
print "<p>Multiplication Table Size Input: $size</p>";

if ($size > 0 AND $size < 11 ) {
    echo "<table border='1' cellpadding='10'>";
    echo "<th></th>";
    for ($j=1; $j<=$size; $j++) {
        echo "<th>$j</th>";
    }
    for ($h=1; $h<=$size; $h++) {
        echo "<tr>";
        echo "<th>$h</th>"; 
        for ($i=1; $i<=$size; $i++) {
            $output = $i * $h;
            echo "<td> $i * $h = $output </td>";
        }
    echo "</tr>";
    }
    echo "</table>"; 
}

else {
    echo "Not valid input, please try again.";
}

?>
</h4>
</body>
</html>

