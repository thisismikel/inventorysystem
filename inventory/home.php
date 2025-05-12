<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="img/supply.png" type="image/x-icon">
    <title>Inventory System - Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">

</head>
<?php
include '../functions/items.php';
add_item();
?>

<body>
    <div class="page-wrapper">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
                <a href="#" class="navbar-brand">
                    <img src="img/supply.png" alt="" width="30" height="30" class="d-inline-block align-text-top">
                    Inventory
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarTogglerDemo01">

                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Master List</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Reports</a>
                        </li>
                    </ul>
                    <div class="d-flex">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">

                            <span class="navbar-text px-5">
                                Dela Cruz, Juan
                            </span>

                            <li class="nav-item">
                                <a href="#" class="btn btn-outline-secondary"><i class="bi bi-box-arrow-right"></i> Logout</a>
                            </li>
                        </ul>


                    </div>
                </div>
            </div>
        </nav>
        <!--sidebars-->

        <!--Main Section-->
        <div class="container">
            <!-- page header -->
            <div class="page-header my-5">
                <div class="d-flex">
                    <div class="flex-grow-1">
                        <h1>Items</h1>
                    </div>
                    <div class="p-2">
                        <!--add item button -->
                        <button class="btn btn-primary btn-small" type="button" data-bs-toggle="modal" data-bs-target="#addItemform">
                            <i class="bi bi-plus-square m-2"></i>Add an Item
                        </button>
                        <!--add inventory form-->

                        <div class="modal fade" id="addItemform" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Add Item</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>

                                    <form action="" method="post">
                                        <div class="modal-body">

                                            <div class="mb-2">
                                                <label for="property_number" class="form-label">Property Number</label>
                                                <input type="text" class="form-control" name="property_number" id="property_number" required>
                                            </div>
                                            <div class="mb-2">
                                                <label for="serial_number" class="form-label">Serial Number</label>
                                                <input type="text" class="form-control" name="serial_number" id="serial_number" require>

                                            </div>
                                            <div class="mb-2">
                                                <label for="category" class="form-label">Category</label>
                                                <select class="form-select" name="category" id="category">
                                                    <option value="1">Computer Set</option>
                                                    <option value="2">Printer</option>
                                                    <option value="3">Option 1</option>
                                                    <option value="4">Option 2</option>
                                                    <option value="5">Option 3</option>
                                                    <option value="6">Option 4</option>
                                                </select>

                                            </div>
                                            <div class="mb-2">
                                                <label for="model" class="form-label">Model</label>
                                                <input type="text" class="form-control" name="model" id="model" require>

                                            </div>
                                            <div class="mb-2">
                                                <label for="specification" class="sform-label">Specification</label>
                                                <textarea type="text" class="form-control" name="specification" id="specification" rows="3" require></textarea>

                                            </div>
                                            <div class="mb-2">
                                                <label for="date" class="form-label">Date of Acquisition</label>
                                                <input type="date" class="form-control" name="date_of_acquisition" id="date_of_acquisition" require>

                                            </div>
                                            <div class="mb-2">
                                                <label for="quantity" class="form-label">Quantity</label>
                                                <input type="text" class="form-control" name="quantity" id="quantity" require>

                                            </div>
                                            <div class="mb-2">
                                                <label for="uom" class="form-label">Unit</label>
                                                <select class="form-select" name="uom" id="uom">
                                                    <option value="1">SET</option>
                                                    <option value="2">Unit</option>
                                                </select>
                                            </div>
                                            <div class="mb-2">
                                                <label for="amount" class="form-label">Amount</label>
                                                <div class="input-group mb-2">

                                                    <span class="input-group-text">₱</span>
                                                    <input type="text" class="form-control" name="amount">

                                                </div>

                                            </div>

                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                            <button type="submit" class="btn btn-primary" name="submit"><i class="bi bi-floppy mx-2"></i>Save</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <!--List of item--->

            <div class="row">
                <div class="col col-lg-4 col-sm-12">inventory</div>
                <div class="col col-lg-4 offset-lg-4 col-sm-12 align-self-end">Search</div>
            </div>

            <div class="row">
                <table class="table table-hover table-bordered text-center">
                    <thead>
                        <tr>
                            <th>Property Number</th>
                            <th>Serial Number</th>
                            <th>Category</th>
                            <th>Model</th>
                            <th>Date of Acquisition</th>
                            <th>Quantity</th>
                            <th>UoM</th>
                            <th>Amount</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php

                        ?>
                        <!-- <tr>
                            <td>123-456-6789-1010</td>
                            <td>1234567890</td>
                            <td>Computer Set</td>
                            <td>Lenovo MQ101</td>
                            <td>July 4, 2024</td>
                            <td>3</td>
                            <td>Sets</td>
                            <td>49,000</td>
                            <td>
                                <a href="#" class="btn btn-outline-secondary btn-sm" data-bs-toggle="tooltip" data-bs-placement="top" title="View Item"><i class="bi bi-eye"></i></a>
                                <a href="#" class="btn btn-outline-primary btn-sm" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit Item"><i class="bi bi-pencil"></i></a>
                                <a href="#" class="btn btn-outline-warning btn-sm" data-bs-toggle="tooltip" data-bs-placement="top" title="Issue the Item to an accountable personnel"><i class="bi bi-award"></i></a>
                            </td>
                        </tr> -->
                        <?php load_items(); ?>
                    </tbody>
                </table>
            </div>
        </div><!--end of container-->
        <div class="toast" role="alert" aria-live="assertive" aria-atomic="true">
            <div class="toast-header">
                <img src="..." class="rounded me-2" alt="...">
                <strong class="me-auto">Bootstrap</strong>
                <small>11 mins ago</small>
                <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
            </div>
            <div class="toast-body">
                Hello World!
            </div>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

</body>

</html>