<html>
    <head>
        <title>PHP multiplication table!</title>

        <style>
            table {
                border-collapse: collapse;
                margin: 20px 0;
            }
            td, th {
                border: 1px solid black;
                padding: 8px;

            }

            th {
                background-color: #f2f2f2
            }
        </style>
    </head>
    <body>
        <form method="post">
            enter a number: <input type="number" name="num" required>
            <input type="submit" value="generate table!">
        </form>

        <?php

        if ($_SERVER["REQUEST_METHOD"] === "POST") {
            $num = intval($_POST['num']);

            if ($num > 0) {
                echo "<h3>Multiplication Table from 1 to $num</h3>";
                echo "<table>";

                echo "<tr><th>*</th>";
                for ($col = 1; $col <= $num; $col++) {
                    echo "<th>$col</th>";
                }
                echo "</tr>";

                for ($row = 1; $row <= $num; $row++) {
                    echo "<tr>";
                    echo "<th>$row</th>";
                    for ($col = 1; $col <= $num; $col++) {
                        echo "<td>" . ($row * $col) . "</td>";
                    }
                    echo "</tr>";
                }
                echo "</table>";
            }
        }

    ?>
        
    </body>
</html>