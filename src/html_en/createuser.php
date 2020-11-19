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
    <title>Create User</title>
</head>

<body>
    <div class="container px-0 fs-noto">
        <?php require 'component/header_admin.php';?>
        <?php require 'component/lang.php';?>

        <div class="row justify-content-center">
            <form id="submit" class="row flex-column px-5 py-4 py-md-5 col-12 col-md-9 col-lg-9 wrapper__border bg-white">
                <h3 class="text-gray mb-5 fs-en"><span class="h1">Create </span>User</h3>
                <div class="row justify-content-between mb-4">
                    <div class="col-12 col-md-7">
                        <div class="d-flex input-inline flex-wrap-reverse flex-lg-nowrap">
                            <input class="input-box form-control w-50-md mb-3 col-12 col-lg-6 flex-basis-auto" type="text" placeholder="Name" id="name" required>
                            <div class="mb-3 col-12 col-lg-6 px-0 pl-lg-3">
                                <label class="mr-3"><input class="mr-2" type="radio" name="role" id="role_user">Normal User</label>
                                <label><input class="mr-2" type="radio" name="role" id="role_admin">Administrator</label>
                            </div>
                        </div>
                        <div class="d-md-flex input-inline">
                            <input class="input-box form-control w-50-md mb-3 mr-2" type="text" placeholder="Account" id="account" required>
                            <select class="input-box form-control w-50-md mb-3" id="class" required>
                                <option value="" selected disabled hidden>Class</option>
                                <optgroup label="Preschool">
                                    <option value="1">Penguin</option>
                                    <option value="2">Squirrel</option>
                                    <option value="3">Raccoon</option>
                                </optgroup>
                                <optgroup label="Pre-kindergarten">
                                    <option value="4">Dolphin</option>
                                    <option value="5">Deer</option>
                                    <option value="6">Sheep</option>
                                    <option value="7">Koala</option>
                                </optgroup>
                                <optgroup label="Kindergarten">
                                    <option value="8">Kangaroo</option>
                                    <option value="9">Elephant</option>
                                    <option value="10">Rhino</option>
                                    <option value="11">Manta Ray</option>
                                    <option value="12">Wolf</option>
                                </optgroup>
                                <optgroup label="Other">
                                    <option value="13">None</option>
                                </optgroup>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-5 row justify-content-center align-items-center p-0">
                        <div class="role-icon text-white rounded-circle text-center align-self-center">
                            <i class="fas fa-user"></i>
                        </div>
                    </div>
                </div>
                <button class="btn submit-btn btn-primary align-self-center mb-4" type="submit">Submit</button>
            </form>
        </div>
    </div>
    
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <script src="../../dist/admin.js"></script>
    <script src="../js/createuser.js"></script>
</body>

</html>