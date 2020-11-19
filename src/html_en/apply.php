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
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="/resources/demos/style.css">
    <link rel="stylesheet" href="../css/datepicker.css">
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
                            <input type="text" id="datepicker" class="input-box form-control" required>
                        </div>
                    </div>
                    <div class="form-row mb-md-4">
                        <div class="col-md-6 mb-4">
                            <h5 class="mb-3">Applying Reason</h5>
                            <select id="reason" class="input-box form-control" required>
                            <option value="" selected disabled hidden> </option>
                                <optgroup label="Others">
                                    <option value="1">Others</option>
                                </optgroup>
                                <optgroup label="Show">
                                    <option value="2">Final Show</option>
                                </optgroup>
                                <optgroup label="Layout">
                                    <option value="3">Corner Layout</option>
                                </optgroup>
                                <optgroup label="Festival Activities">
                                    <option value="4">New Year's Day Activity</option>
                                    <option value="5">Lantern Festival Activity</option>
                                    <option value="6">Children's Day Activity</option>
                                    <option value="7">Earth Day Activity</option>
                                    <option value="8">Dragon Boat Festival Activity</option>
                                    <option value="9">Moon Festival Activity</option>
                                    <option value="10">Double Tenth National Day Activity</option>
                                    <option value="11">Halloween Activity</option>
                                    <option value="12">Thanksgiving Activity</option>
                                </optgroup>
                                <optgroup label="Other Activities">
                                    <option value="13"></option>
                                    <option value="14">Theme Activity</option>
                                    <option value="15">Winter Camp</option>
                                    <option value="16">Summer Camp</option>
                                    <option value="17">First Day of the Semester</option>
                                    <option value="18">Open Day</option>
                                    <option value="19">Commencement Ceremony</option>
                                </optgroup>
                            </select>
                        </div>
                        <div class="col-md-6 mb-4 hide" id="other-reason" >
                            <h5 class="mb-3">Other Applying Reason</h5>
                            <input type="text" class="input-box form-control">
                        </div>
                    </div>
                    <div class="pt-5">
                        <button type="submit" class="btn wrapper_btn w-100 bg-red text-white">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script>
    $( function() {
        $( "#datepicker" ).datepicker();
    } );
    </script>
    <script src="../../dist/user_bound.js"></script>
    <script src="../js/apply.js"></script>
</body>

</html>