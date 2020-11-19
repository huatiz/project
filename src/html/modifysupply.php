<!doctype html>
<html lang="zh-TW">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/main.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css">
    <title>修改耗材</title>
</head>

<body>
    <div class="container px-0">
        <?php require 'component/header_admin.php';?>
        <?php require 'component/lang.php';?>

        <div class="row justify-content-center pb-5">
            <div class="col px-5 py-4 py-md-5 col-12 col-md-8 col-lg-6 wrapper__border bg-white">
                <h3 class="text-gray mb-5 text-md-center"><span class="h1">修改</span>耗材</h3>
                <form action="">
                    <div class="d-flex justify-content-between flex-wrap">
                        <select name="main" id="main" class="col-12 col-md-5 input-box form-control mb-4" required>
                                <option value="" selected disabled hidden>主分類</option>
                        </select>
                        <select name="sub" id="sub" class="col-12 col-md-5 input-box form-control mb-4" required>
                                <option value="" selected disabled hidden>次分類</option>
                        </select>
                        <select name="item" id="item" class="col-12 col-md-5 input-box form-control mb-4" required>
                            <option value="" selected disabled hidden>品名</option>
                        </select>
                        <input id="brand" class="col-12 col-md-5 input-box form-control mb-4" placeholder="廠商" readonly>
                        <select name="spec" id="specification" class="col-12 col-md-5 input-box form-control mb-4" required>
                            <option value="" selected disabled hidden>規格</option>
                        </select>
                        <select name="color" id="color" class="col-12 col-md-5 input-box form-control mb-4" required>
                            <option value="" selected disabled hidden>顏色</option>
                            <option value="0">無</option>
                        </select>
                    </div>
                    <div class="d-flex justify-content-md-center mb-4">
                        <label class="col-form-label">數量：</label>
                        <input type="number" min="0" name="quantity" id="quantity" class="input-box form-control col-8 col-md-5 mx-2" required>
                        <label class="col-form-label fs-noto unit">單位</label>
                    </div>
                    <div class="d-flex justify-content-md-center mb-4">
                        <label class="col-form-label">預設申請上限：</label>
                        <input type="number" min="0" name="def_limit" id="def_limit" class="input-box form-control col-5 mx-2" required>
                        <label class="col-form-label fs-noto unit">單位</label>
                    </div>
                    <div class="pt-5">
                        <button type="submit" class="btn wrapper_btn w-100 bg-red text-white">提交</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <script src="../../dist/admin.js"></script>
</body>

</html>