<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/main.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css">
    <title>Remaining Supplies</title>
</head>
<body>
    <div class="container px-0 fs-noto">
        <?php require 'component/header_admin.php';?>
        <?php require 'component/lang.php';?>
    </div>
    
    <input type="checkbox" class="hide" id="side-menu-switch" checked>
    <div class="supply">
        <?php require 'component/select.php';?>
        <div class="content-wrapper">
            <label for="side-menu-switch" class="pl-1 mb-0"><i class="fas fa-align-justify check-btn"></i></label>
            <div class="content">
                <div class="table-style">
                    <div class="table-header">
                    <h3 class="text-gray fs-en"><span class="h1">Remaining </span>Supplies</h3>
                        <a href="#" class="text-blue text-center fs-noto">Export Supplies Table</a>
                    </div>
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Main Category</th>
                                    <th>Sub Category</th>
                                    <th>Item</th>
                                    <th>Specification</th>
                                    <th>Color</th>
                                    <th>Unit</th>
                                    <th>Brand</th>
                                    <th>Consumption</th>
                                    <th>Remaining</th>
                                    <th>Returnable</th>
                                </tr>
                            </thead>
                            <tbody>
                            </tbody>
                        </table>
                    </div>
                </div>
                <ul class="pagination pt-3">
                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                </ul>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <script src="../../dist/admin.js"></script>
    <script src="../js/remaining.js"></script>
</body>
</html>