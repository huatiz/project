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
    <title>Apply Supplies</title>
</head>

<body>
    <div class="container px-0 fs-noto">
        <?php require 'component/header_user.php';?>
        <?php require 'component/lang.php';?>
        <div class="row justify-content-center pb-5">
            <div class="col px-5 py-4 py-md-5 col-12 col-md-10 col-lg-8 wrapper__border bg-white">
                <h3 class="text-gray mb-5 text-md-center fs-en"><span class="h1">Apply </span>Supplies</h3>
                <form id="submit">
                    <div class="form-row mb-4">
                        <div class="col-md-6 mb-4">
                            <select id="main-category" class="input-box form-control" required>
                                <option value="" selected disabled hidden>Main Category</option>
                            </select>
                        </div>
                        <div class="col-md-6 mb-4">
                            <select id="sub-category" class="input-box form-control" required>
                                <option value="" selected disabled hidden>Sub Category</option>
                            </select>
                        </div>
                        <div class="col-md-4 mb-4">
                            <select id="item" class="input-box form-control" required>
                                <option value="" selected disabled hidden>Item</option>
                            </select>
                        </div>
                        <div class="col-md-4 mb-4">
                            <select id="specification" class="input-box form-control" required>
                                <option value="" selected disabled hidden>Specification</option>
                            </select>
                        </div>
                        <div class="col-md-4 mb-4">
                            <select id="color" class="input-box form-control" required>
                                <option value="" selected disabled hidden>Color</option>
                                <option>None</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-row mb-md-4">
                        <div class="col-md-6 mb-4">
                            <h5 class="mb-3">Remaining</h5>
                            <input id="remaining" class="input-box form-control" readonly>
                        </div>
                        <div class="col-md-6 mb-4">
                            <h5 class="mb-3">Applying Accumulation / Limit</h5>
                            <input id="accmulation" class="input-box form-control" readonly>
                        </div>
                    </div>
                    <div class="form-row mb-md-4">
                        <div class="col-md-6 mb-4">
                            <h5 class="mb-3">Applying Quantity</h5>
                            <input type="number" min="1" id="quantity" class="input-box form-control" required>
                        </div>
                        <div class="col-md-6 mb-4">
                            <h5 class="mb-3">Supplies-needed Date</h5>
                            <input type="date" id="date" class="input-box form-control" required>
                        </div>
                    </div>
                    <div class="form-row mb-md-4">
                        <div class="col-md-6 mb-4">
                            <h5 class="mb-3">Applying Reason</h5>
                            <select id="reason" class="input-box form-control" required>
                                <option value="" selected disabled hidden> </option>
                                <option value="1">Other</option>
                                <option value="2">Morning activity</option>
                                <option value="3">Activity layouts</option>
                                <option value="4">Public area layouts</option>
                                <option value="5">Restival layouts</option>
                                <option value="6">Study area</option>
                            </select>
                        </div>
                        <div class="col-md-6 mb-4">
                            <h5 class="mb-3">Other Applying Reason</h5>
                            <input type="text" id="other_reason" class="input-box form-control">
                        </div>
                    </div>
                    <div class="pt-5">
                        <button type="submit" class="btn wrapper_btn w-100 bg-red text-white">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <script src="../../dist/user_bound.js"></script>

    <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    -->
</body>

</html>