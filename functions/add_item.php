<?php
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
    $amount = $_POST = ['amount'];

    echo $property_number;
    //test the variables if it is been posted by the submit button

    // $sql = "INSERT INTO `item`(`property_number`,`serial_number`,`category`,`model`,`specification`,`date_of_acquisition`,`amount`) VALUES ('$property_number','$serial_number','$category','$model','$specification','$date_of_acquisition','$amount')";

    // $insert_sql = $connection->query($sql) or die($connection->error);
} else {
    echo "No Input Detected";
}
