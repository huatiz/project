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
    <title>新增使用者</title>
</head>

<body>
    <div class="container px-0">
        <?php require 'component/header_admin.php';?>
        <?php require 'component/lang.php';?>

        <div class="row justify-content-center">
            <form action="" id="submit" class="row flex-column px-5 py-4 py-md-5 col-12 col-md-9 wrapper__border bg-white">
                <h3 class="text-gray mb-5"><span class="h1">新增</span>使用者</h3>
                <div class="row justify-content-between mb-4">
                    <div class="col-12 col-md-7">
                        <div class="d-flex input-inline flex-wrap-reverse flex-lg-nowrap">
                            <input class="input-box form-control w-50-md mb-3 col-12 col-lg-6 flex-basis-auto" type="text" placeholder="姓名" id="name" name="name" required>
                            <div class="mb-3 col-12 col-lg-6 px-0 pl-lg-3">
                                <label class="mr-3"><input class="mr-2" type="radio" name="role" value="user" id="role_user">一般使用者</label>
                                <label><input class="mr-2" type="radio" name="role" value="admin" id="role_admin">管理員</label>
                            </div>
                        </div>
                        <div class="d-md-flex input-inline">
                            <input class="input-box form-control w-50-md mb-3 mr-2" type="text" placeholder="帳號" id="account" name="account" required>
                            <select class="input-box form-control w-50-md mb-3" id="class" name="class">
                                <option value="0" selected disabled hidden>班級</option>
                                <optgroup label="小班">
                                    <option value="小企鵝班">小企鵝班</option>
                                    <option value="小松鼠班">小松鼠班</option>
                                    <option value="小浣熊班">小浣熊班</option>
                                </optgroup>
                                <optgroup label="中班">
                                    <option value="中海豚班">中海豚班</option>
                                    <option value="中花鹿班">中花鹿班</option>
                                    <option value="中綿羊班">中綿羊班</option>
                                    <option value="中無尾熊班">中無尾熊班</option>
                                </optgroup>
                                <optgroup label="大班">
                                    <option value="大袋鼠班">大袋鼠班</option>
                                    <option value="大大象班">大大象班</option>
                                    <option value="大犀牛班">大犀牛班</option>
                                    <option value="大魟魚班">大魟魚班</option>
                                    <option value="大灰狼班">大灰狼班</option>
                                </optgroup>
                                <optgroup label="其他">
                                    <option value="無">無</option>
                                </optgroup>
                            </select>
                        </div>
                        <input class="input-box form-control mb-3" type="email" placeholder="電子郵件" id="mail" name="mail" required>
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

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <script src="../../dist/admin.js"></script>
    <script src="../js/createuser.js"></script>

    <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    -->
</body>

</html>