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
    <title>新增品項</title>
</head>

<body>
    <div class="container px-0">
        <?php require 'component/header_admin.php';?>
        <?php require 'component/lang.php';?>

        <div class="row justify-content-center pb-5">
            <div class="col px-5 py-4 py-md-5 col-12 col-md-9 col-lg-7 wrapper__border bg-white">
                <h3 class="text-gray mb-5 text-md-center"><span class="h1">新增</span>品項</h3>
                <form id="submit">
                    <div class="form-row mb-4">
                        <div class="col-md-6 mb-4">
                            <select id="main-category-select" class="input-box form-control" required>
                                <option value="" selected disabled hidden>主分類</option>
                                <option value="1">其他</option>
                            </select>
                        </div>
                        <div class="col-md-6 mb-4">
                            <select id="sub-category-select" class="input-box form-control" disabled required>
                                <option value="" selected disabled hidden>次分類</option>
                                <option value="1">其他</option>
                            </select>
                        </div>
                        <div class="col-md-6 mb-4">
                            <select id="item-select" class="input-box form-control" disabled required>
                                <option value="" selected disabled hidden>品名</option>
                                <option value="1">其他</option>
                            </select>
                        </div>
                        <div class="col-md-6 mb-4">
                            <select id="color-select" class="input-box form-control" required>
                                <option value="" selected disabled hidden>顏色</option>
                                <option value="0">無</option>
                                <option value="1">其他</option>
                            </select>
                        </div>
                    </div>
                    <div class="mb-4 hide hide-main-category">
                        <h5 class="mb-3 require">主分類：</h5>
                        <div class="form-row">
                            <div class="col-md-6 mb-4">
                                <input type="text" id="main-category-ch" placeholder="中文" class="input-box form-control" required>
                            </div>
                            <div class="col-md-6 mb-4">
                                <input type="text" id="main-category-en" placeholder="英文" class="input-box form-control" required>
                            </div>
                        </div>
                    </div>
                    <div class="mb-4 hide hide-sub-category">
                        <h5 class="mb-3 require">次分類：</h5>
                        <div class="form-row">
                            <div class="col-md-6 mb-4">
                                <input type="text" id="sub-category-ch" placeholder="中文" class="input-box form-control" required>
                            </div>
                            <div class="col-md-6 mb-4">
                                <input type="text" id="sub-category-en" placeholder="英文" class="input-box form-control" required>
                            </div>
                        </div>
                    </div>
                    <div class="mb-4 hide hide-item">
                        <h5 class="mb-3 require">品名：</h5>
                        <div class="form-row">
                            <div class="col-md-6 mb-4">
                                <input type="text" id="item-ch" placeholder="中文" class="input-box form-control" required>
                            </div>
                            <div class="col-md-6 mb-4">
                                <input type="text" id="item-en" placeholder="英文" class="input-box form-control" required>
                            </div>
                        </div>
                    </div>
                    <div class="mb-4 hide hide-color">
                        <h5 class="mb-3 require">顏色：</h5>
                        <div class="form-row">
                            <div class="col-md-6 mb-4">
                                <input type="text" id="color-ch" placeholder="中文" class="input-box form-control" required>
                            </div>
                            <div class="col-md-6 mb-4">
                                <input type="text" id="color-en" placeholder="英文" class="input-box form-control" required>
                            </div>
                        </div>
                    </div>
                    <div class="mb-4 hide-brand">
                        <h5 class="mb-3 require">廠商：</h5>
                        <div class="form-row">
                            <div class="col-md-6 mb-4">
                                <input type="text" id="brand-ch" placeholder="中文" class="input-box form-control" required>
                            </div>
                            <div class="col-md-6 mb-4">
                                <input type="text" id="brand-en" placeholder="英文" class="input-box form-control" required>
                            </div>
                        </div>
                    </div>
                    <div>
                        <h5 class="mb-3 require">其他：</h5>
                        <div class="form-row">
                            <div class="col-md-6 mb-4">
                                <select id="specification-select" class="input-box form-control" required>
                                    <option value="" selected disabled hidden>規格</option>
                                    <option value="0">無</option>
                                    <option value="1">其他</option>
                                    <option value="2">15*30</option>
                                </select>
                            </div>
                            <div class="col-md-6 mb-4">
                                <select id="unit-select" class="input-box form-control" required>
                                    <option value="" selected disabled hidden>單位</option>
                                    <option value="1">其他</option>
                                    <option value="2">張</option>
                                </select>
                            </div>
                            <div class="col-md-6 mb-4 hide hide-specification">
                                <input type="text" id="specification" placeholder="規格" class="input-box form-control">
                            </div>
                            <div class="col-md-6 mb-4 hide hide-unit">
                                <input type="text" id="unit" placeholder="單位" class="input-box form-control" required>
                            </div>
                            <div class="col-md-6 mb-4">
                                <input type="number" min="1" id="quantity" placeholder="數量" class="input-box form-control" required>
                            </div>
                            <div class="col-md-6 mb-4 hide-limit">
                                <input type="number" min="1" id="applying_limit" placeholder="預設申請上限" class="input-box form-control" required>
                            </div>
                        </div>
                    </div>
                    <div class="form-group form-check mt-2">
                        <input type="checkbox" class="form-check-input" id="return">
                        <label class="form-check-label h5" for="return">須歸還的品項</label>
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
    <script src="../js/createitem.js"></script>
</body>

</html>