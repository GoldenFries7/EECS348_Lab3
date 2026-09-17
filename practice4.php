<!DOCTYPE html>
<html>
<head><title>Multiplication Table</title></head>
<body>
    <h2>Result</h2>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $num = intval($_POST["num"]);
        if ($num > 0) {
            echo "<table border='1' cellpadding='5'>";
            
            // Generate top header row
            echo "<tr><th>*</th>";
            for ($c = 1; $c <= $num; $c++) {
                echo "<th>$c</th>";
            }
            echo "</tr>";

            // Generate data rows
            for ($r = 1; $r <= $num; $r++) {
                echo "<tr><th>$r</th>"; // Row index
                for ($c = 1; $c <= $num; $c++) {
                    $val = $r * $c;
                    echo "<td>$val</td>";
                }
                echo "</tr>";
            }
            echo "</table>";
        } else {
            echo "<p>Please enter a valid positive number.</p>";
        }
    }
    ?>
    <br>
    <a href="practice4.html">Go Back</a>
</body>
</html>