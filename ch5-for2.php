<!DOCTYPE html>
<html>
<head>
    <title>Multiplication Table</title>
    <style>
        table {
            border-collapse: collapse;
            width: 50%;
            margin: 20px auto;
        }
        th, td {
            border: 1px solid black;
            padding: 8px;
            text-align: center;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <table>
        <tr>
            <th>สูตรคูณแม่ 2</th>
            <th>ผลลัพธ์</th>
        </tr>
        <?php
        for ($i = 1; $i <= 12; $i++) {
            echo "<tr>";
            echo "<td>2 × $i</td>";
            echo "<td>" . (2 * $i) . "</td>";
            echo "</tr>";
        }
        ?>
    </table>
</body>
</html>