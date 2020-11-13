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
    <title>Edit Personal Information</title>
</head>

<body>
    <div class="container px-0 fs-noto">
        <?php require 'component/header_admin.php';?>
        <?php require 'component/lang.php';?>

        <div class="row justify-content-center">
            <form action="" class="row flex-column px-5 py-4 py-md-5 col-12 col-md-9 col-lg-9 wrapper__border bg-white">
                <h3 class="text-gray mb-5 fs-en"><span class="h1">Edit </span>Personal Information</h3>
                <div class="row justify-content-between mb-4">
                    <div class="col-12 col-md-7">
                        <input class="input-box form-control w-50-md mb-3" type="text" placeholder="Name" id="name" name="name" required>
                        <div class="d-md-flex input-inline">
                            <input class="input-box form-control w-50-md mb-3 mr-2" type="text" placeholder="Account" id="account" name="account" required>
                            <select class="input-box form-control w-50-md mb-3" id="class" name="class">
                                    <option value="0" selected disabled hidden>Class</option>
                                    <option value="1">Penguin</option>
                                    <option value="2">Squirrel</option>
                                    <option value="3">Raccoon</option>
                                    <option value="4">Dolphin</option>
                                    <option value="5">Deer</option>
                                    <option value="6">Sheep</option>
                                    <option value="7">Koala</option>
                                    <option value="8">Kangaroo</option>
                                    <option value="9">Elephant</option>
                                    <option value="10">Rhino</option>
                                    <option value="11">Manta Ray</option>
                                    <option value="12">Wolf</option>
                                    <option value="13">None</option>
                                </select>
                        </div>
                        <input class="input-box form-control mb-3" type="email" placeholder="Email" id="mail" name="mail" required>
                    </div>
                    <div class="col-md-5 row justify-content-center align-items-center p-0">
                        <div class="role-icon bg-red text-white rounded-circle text-center align-self-center">
                            <i class="fas fa-user"></i>
                        </div>
                    </div>
                </div>
                <button class="btn submit-btn btn-primary align-self-center mb-4" type="submit" id="submit">Submit</button>
            </form>
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