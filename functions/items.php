<?php

//loading the items

function load_items()
{
    include_once '../connections/database.php';
    $connection = connection();
    $sql = "SELECT * FROM item";
    $items = $connection->query($sql) or die($connection->error);
    $row = $items->fetch_assoc();

    if ($items->num_rows > 0) {
        do {
            echo "<tr>
                    <td>" . $row['property_number'] . "</td>" .
                "<td>" . $row['serial_number'] . "</td>" .
                "<td>" . $row['category'] . "</td>" .
                "<td>" . $row['model'] . "</td>" .
                "<td>" . $row['date_of_acquisition'] . "</td>" .
                "<td>" . $row['quantity'] . "</td>" .
                "<td>" . $row['unit'] . "</td>" .
                "<td>" . $row['amount'] . "</td>
                    <td><a href='#' class='btn btn-outline-secondary btn-sm' data-bs-toggle='tooltip' data-bs-placement='top' title='View Item'><i class='bi bi-eye'></i></a>
                    <a href='#' class='btn btn-outline-primary btn-sm' data-bs-toggle='tooltip' data-bs-placement='top' title='Edit Item'><i class='bi bi-pencil'></i></a>
                    <a href='#' class='btn btn-outline-warning btn-sm' data-bs-toggle='tooltip' data-bs-placement='top' title='Issue the Item to an accountable personnel'><i class='bi bi-award'></i></a>
                    </td>
                </tr>";
        } while ($row = $items->fetch_assoc());
    } else {
        echo "<tr><td colspan='9'>No Records Available</td></tr>";
    }
}

//create a new item
function add_item()
{
    include_once '../connections/database.php';
    $connection = connection();

    if (isset($_POST['submit'])) {

        $property_number = $_POST['property_number'];
        $serial_number = $_POST['serial_number'];
        $category = $_POST['category'];
        $model = $_POST['model'];
        $specification = $_POST['specification'];
        $date_of_acquisition = $_POST['date_of_acquisition'];
        $quantity = $_POST['quantity'];
        $unit = $_POST['uom'];
        $amount = $_POST['amount'];

        $sql = "INSERT INTO `item`(`property_number`,`serial_number`,`category`,`model`,`specification`,`date_of_acquisition`,`quantity`,`unit`,`amount`) VALUES ('$property_number','$serial_number','$category','$model','$specification','$date_of_acquisition','$quantity','$unit','$amount')";

        $insert_sql = $connection->query($sql) or die($connection->error);

        if ($insert_sql === TRUE) {
            echo '<div class="alert alert-success alert-dismissible fade show" role="alert">Item successfully added
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>';
        } else {
            echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">Adding of item failed!
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>';
        }
    }

    // $insert_sql = $connection->query($sql) or die($connection->error);

}

//update the status of the item
//update the accountable person
