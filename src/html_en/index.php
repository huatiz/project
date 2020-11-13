<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/main.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css">
    <title>Home</title>
</head>

<body>
    <div class="container px-0 fs-noto">
        <?php require 'component/header_admin.php';?>
        <?php require 'component/lang.php';?>

        <div class="row row-cols-1 row-cols-md-3 text-center mx-2">
            <div class="col mb-4">
                <div class="card br-radius h-100">
                    <div class="card-body py-5">
                        <h4 class="card-title border-bottom pb-3 mb-3 border-dark fs-en">Supplies Checking</h4>
                        <ul class="pl-0">
                            <li class="mb-3"><a href="remaining.php" class="text-black">Remaining Supplies</a></li>
                            <li class="mb-3"><a href="condition.php" class="text-black">Applying Conditions</a></li>
                            <li class="mb-3"><a href="applying.php" class="text-black">Applying Details</a></li>
                            <li><a href="purchase.php" class="text-black">Purchase Details</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col mb-4">
                <div class="card br-radius bg-red h-100">
                    <div class="card-body py-5">
                        <h4 class="card-title text-white border-bottom pb-3 mb-3 border-white fs-en">Supplies Management</h4>
                        <ul class="pl-0">
                            <li class="mb-3"><a href="createsupply.php" class="text-whitee">Create Supply</a></li>
                            <li class="mb-3"><a href="modifysupply.php" class="text-whitee">Modify Supply</a></li>
                            <li class="mb-3"><a href="deletesupply.php" class="text-whitee">Delete Supply</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col mb-4">
                <div class="card br-radius h-100">
                    <div class="card-body py-5">
                        <h4 class="card-title border-bottom pb-3 mb-3 border-dark fs-en">User Management</h4>
                        <ul class="pl-0">
                            <li class="mb-3"><a href="createuser.php" class="text-black">Create User</a></li>
                            <li class="mb-3"><a href="modifyuser.php" class="text-black">Modify User</a></li>
                            <li class="mb-3"><a href="deleteuser.php" class="text-black">Delete User</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <script src="../../dist/admin.js"></script>

    <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    -->
</body>

</html>