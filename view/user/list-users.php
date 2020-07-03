<!DOCTYPE html>
<html>
<head>
    <style>
        table {
            font-family: arial, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }

        td, th {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }

        tr:nth-child(even) {
            background-color: #dddddd;
        }

        tr th {
            
        }
    </style>
</head>
<body>

<h2>HTML Table</h2>

<table>
    <tr>
        <th>Name</th>
        <th>Email</th>
    </tr>
    <?php
    if (!empty($data)) {
        foreach ($data as $item) {
    ?>
    <tr>
        <td><?php echo $item['name']; ?></td>
        <td><?php echo $item['email']; ?></td>
    </tr>
    <?php
        }
    }
    ?>
</table>

</body>
</html>
