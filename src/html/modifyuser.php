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
    <title>修改使用者</title>
</head>

<body>
    <div class="container px-0">
        <?php require 'component/header_admin.php';?>
        <?php require 'component/lang.php';?>

        <div class="row justify-content-center">
            <form id="submit" class="form-submit row flex-column px-5 py-4 py-md-5 col-12 col-md-9 wrapper__border bg-white">
                <h3 class="text-gray mb-5"><span class="h1">修改</span>使用者</h3>
                <div class="row justify-content-between mb-4">
                    <div class="col-12 col-md-7">
                        <div class="d-md-flex input-inline flex-wrap">
                            <select class="input-box form-control w-50-md mb-3 col-12 col-lg-6 flex-basis-auto" id="role" required>
                                <option value="" selected disabled hidden>使用者</option>
                                <optgroup class="bg-lgray text-white" label="一般使用者">
                                </optgroup> 
                                <optgroup class="bg-red text-white" label="管理者">
                                </optgroup>
                            </select>
                            <input class="input-box form-control w-50-md mb-3 col-12 col-lg-6 flex-basis-auto" type="text" placeholder="姓名" id="name" required>
                        </div>
                        <div class="d-md-flex input-inline">
                            <input class="input-box form-control w-50-md mb-3 mr-2" id="account" placeholder="帳號" readonly>
                            <select class="input-box form-control w-50-md mb-3" id="class" required>
                                <option value="" selected disabled hidden>班級</option>
                                <optgroup label="小班">
                                    <option value="1">小企鵝班</option>
                                    <option value="2">小松鼠班</option>
                                    <option value="3">小浣熊班</option>
                                </optgroup>
                                <optgroup label="中班">
                                    <option value="4">中海豚班</option>
                                    <option value="5">中花鹿班</option>
                                    <option value="6">中綿羊班</option>
                                    <option value="7">中無尾熊班</option>
                                </optgroup>
                                <optgroup label="大班">
                                    <option value="8">大袋鼠班</option>
                                    <option value="9">大大象班</option>
                                    <option value="10">大犀牛班</option>
                                    <option value="11">大魟魚班</option>
                                    <option value="12">大灰狼班</option>
                                </optgroup>
                                <optgroup label="其他">
                                    <option value="13">無</option>
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
                <button class="btn submit-btn btn-primary align-self-center mb-4" type="submit">完成</button>
            </form>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <script src="../../dist/admin.js"></script>
    <script src="../js/user.js"></script>
</body>

</html>