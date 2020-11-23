<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/main.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css">
    <title>Return Supplies</title>
</head>
<body>
    <div class="container px-0">
        <div class="fs-noto">
            <?php require 'component/header_user.php';?>
            <?php require 'component/lang.php';?>
        </div>

        <div class="content">
            <div class="table-style">
                <div class="table-header">
                    <h3 class="text-gray fs-en"><span class="h1">Return </span>Supplies</h3>
                </div>
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Returned</th>
                                <th>Applying Date</th>
                                <th>Main Category</th>
                                <th>Sub Category</th>
                                <th>Item</th>
                                <th>Specification</th>
                                <th>Color</th>
                                <th>Unit</th>
                                <th>Applying Quantity</th>
                            </tr>
                        </thead>
                        <tbody>
                        </tbody>
                    </table>
                </div>
                <div class="d-flex justify-content-center py-4">
                    <button class="btn submit-btn btn-primary" type="submit">Submit</button>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <script src="../../dist/user_bound.js"></script>
</body>
</html>