<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/main.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css">
    <title>Applying Limit</title>
</head>

<body>
    <div class="container px-0">
        <div class="fs-noto">
            <?php require 'component/header_admin.php';?>
            <?php require 'component/lang.php';?>
        </div>
        <div class="content">
            <div class="table-style">
                <div class="table-header flex-column flex-md-row">
                    <h3 class="text-gray fs-en"><span class="h1">Applying </span>Limit</h3>
                    <div class="d-flex col-md-8 col-lg-6 fs-noto">
                        <select id="user" class="input-box form-control mr-3" required>
                            <option value="" selected disabled hidden>User</option>
                        </select>
                        <select id="main" class="input-box form-control mr-3" required>
                            <option value="" selected disabled hidden>Main Category</option>
                        </select>
                        <select id="sub" class="input-box form-control" required>
                            <option value="" selected disabled hidden>Sub Category</option>
                        </select>
                    </div>
                </div>
                <div class="table-responsive">
                    <table class="table" id="limit-table">
                        <thead>
                            <tr>
                                <th>Item</th>
                                <th>Applying Limit</th>
                                <th>Edit</th>
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
    <script src="../../dist/admin.js"></script>
    <script src="../js/limit.js"></script>
</body>

</html>