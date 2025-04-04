<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Indian Cricket Players</title>
    <style>
        /* Basic Styling for the table */
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            text-align: center;
        }
        table {
            width: 50%;
            margin: 20px auto;
            border-collapse: collapse;
            background: white;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        }
        th, td {
            padding: 12px;
            border: 1px solid #ddd;
            text-align: center;
        }
        th {
            background: #007BFF;
            color: white;
        }
        tr:nth-child(even) {
            background: #f9f9f9;
        }
    </style>
</head>
<body>

    <h2>Indian Cricket Players</h2>

    <?php
        // Step 1: Create an array of Indian cricket players
        $players = array(
            "Virat Kohli",
            "Rohit Sharma",
            "MS Dhoni",
            "Sachin Tendulkar",
            "Yuvraj Singh",
            "Rahul Dravid",
            "Sourav Ganguly",
            "Jasprit Bumrah",
            "Ravindra Jadeja",
            "Hardik Pandya"
        );

        // Step 2: Display the players inside an HTML table
        echo "<table>";
        echo "<tr><th>Sr. No.</th><th>Player Name</th></tr>";

        $count = 1;
        foreach ($players as $player) {
            echo "<tr><td>$count</td><td>$player</td></tr>";
            $count++;
        }

        echo "</table>";
    ?>

</body>
</html>
