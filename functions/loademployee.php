<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>


    <?php
    include '../connections/database.php';

    $query = ("SELECT * FROM t_split_regional_office GROUP BY ISSUED_TO");
    // $stmt = $conn->prepare($query);
    $stmt = $conn->prepare($query);
    $stmt->execute();
    $num = $stmt->rowCount();
    if ($num > 0) {
    ?>
        <table>
            <tr>
                <th>Employee Name</th>
                <th>Position</th>
                <th>Action</th>
            </tr>
            <?php

            while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                extract($row);
                echo "<tr>
                <td>{$ISSUED_TO}</td>
                <td>{$POSITION}</td>
                <td><a href = '../reports/index.php?id={$ID_NUMBER}'>View</a></td>
                </tr>";
            }
            ?>
        </table>
    <?php
    } else {
        echo "No Record Found!";
    }
    ?>
</body>

</html>