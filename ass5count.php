<html>
<head>
<title>Word Counting</title>
</head>
<body>
<h2>Word Counting</h2>

<?php

$input_string = $_POST['input_string'];
$words_string = explode(" ", $input_string);
$output_array = array();
$output_array = (array_count_values($words_string));

print "<table border='1' cellpadding='10'>";
    print "<th>Word</th>";
    print "<th>Occurrences</th>";
    foreach($output_array as $item=>$count) {
        print "<tr>";
        print "<td> $item </td>";
        print "<td> $count </td>";
        print "</tr>";
    }
    print "</table>"; 

?>
</body>
</html>