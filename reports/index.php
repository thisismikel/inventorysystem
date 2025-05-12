<?php
$id = isset($_GET['id']) ? $_GET['id'] : die('ERROR: Property Number not Found!');
include '../connections/database.php';

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reporting Tool<?= $id; ?></title>
</head>

<body>
    <table>
        <tr>
            <td>Name:</td>
            <td><?= $id; ?></td>
        </tr>
        <tr>
            <td>Position:</td>
            <td></td>
        </tr>
        <tr>
            <td>Office:</td>
            <td></td>
        </tr>
    </table>
    <hr />
    <table>
        <tr>
            <th>Property Number</th>
            <th>PAR NUMBER</th>
            <th>Description</th>
            <th>End User</th>
            <th>Status</th>
            <th>Remarks</th>
        </tr>
    </table>
</body>

</html>