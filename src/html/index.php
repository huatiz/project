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
    <title>首頁</title>
</head>

<body>
    <div class="container px-0">
        <?php require 'component/header_admin.php';?>
        <?php require 'component/lang.php';?>

        <div class="row row-cols-1 row-cols-md-3 text-center mx-2">
            <div class="col mb-4">
                <div class="card br-radius h-100">
                    <div class="card-body py-5">
                        <h4 class="card-title border-bottom pb-3 mb-3 border-dark">耗材檢視</h4>
                        <ul class="pl-0">
                            <li class="mb-3"><a href="remaining.php" class="text-black">耗材剩餘</a></li>
                            <li class="mb-3"><a href="condition.php" class="text-black">申請檢視</a></li>
                            <li class="mb-3"><a href="applying.php" class="text-black">借用明細</a></li>
                            <li><a href="purchase.php" class="text-black">進貨明細</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col mb-4">
                <div class="card br-radius bg-red h-100">
                    <div class="card-body py-5">
                        <h4 class="card-title text-white border-bottom pb-3 mb-3 border-white">耗材管理</h4>
                        <ul class="pl-0">
                            <li class="mb-3"><a href="createsupply.php" class="text-whitee">新增耗材</a></li>
                            <li class="mb-3"><a href="modifysupply.php" class="text-whitee">修改耗材</a></li>
                            <li class="mb-3"><a href="deletesupply.php" class="text-whitee">刪除耗材</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col mb-4">
                <div class="card br-radius h-100">
                    <div class="card-body py-5">
                        <h4 class="card-title border-bottom pb-3 mb-3 border-dark">人員管理</h4>
                        <ul class="pl-0">
                            <li class="mb-3"><a href="createuser.php" class="text-black">新增使用者</a></li>
                            <li class="mb-3"><a href="modifyuser.php" class="text-black">修改使用者</a></li>
                            <li class="mb-3"><a href="deleteuser.php" class="text-black">刪除使用者</a></li>
                            <li class="mb-3"><a href="limit.php" class="text-black">借用上限</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

    <script src="../../dist/admin.js"></script>

</body>

</html>