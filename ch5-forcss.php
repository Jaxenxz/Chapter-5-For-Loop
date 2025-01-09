<!DOCTYPE html>
<html>
<head>
    <title>Styled Multiplication Table</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
            background-color: #f5f5f5;
        }
        .container {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            background-color: white;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
            margin: 20px 0;
        }
        th, td {
            padding: 15px;
            text-align: center;
            border-bottom: 1px solid #ddd;
        }
        th {
            background-color: #4CAF50;
            color: white;
            font-weight: bold;
            text-transform: uppercase;
        }
        tr:nth-child(even) {
            background-color: #f8f8f8;
        }
        tr:hover {
            background-color: #f5f5f5;
        }
        .result {
            color: #2196F3;
            font-weight: bold;
        }
        .header {
            text-align: center;
            color: #333;
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1 class="header">ตารางสูตรคูณ</h1>
        <table>
            <tr>
                <th>แม่สูตรคูณ</th>
                <th>สมการ</th>
                <th>ผลลัพธ์</th>
            </tr>
            <?php
            $multiplier = 2;
            for ($i = 1; $i <= 12; $i++) {
                echo "<tr>";
                echo "<td>แม่ $multiplier</td>";
                echo "<td>$multiplier × $i</td>";
                echo "<td class='result'>" . ($multiplier * $i) . "</td>";
                echo "</tr>";
            }
            ?>
        </table>
    </div>
</body>
</html>