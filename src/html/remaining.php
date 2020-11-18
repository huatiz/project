<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/main.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css">
    <title>耗材剩餘</title>
</head>
<body>
    <div class="container px-0">
        <?php require 'component/header_admin.php';?>
        <?php require 'component/lang.php';?>
    </div>
    
    <input type="checkbox" class="hide" id="side-menu-switch">
    <div class="supply">
        <?php require 'component/select.php';?>
        <div class="content-wrapper">
            <label for="side-menu-switch" class="pl-1 mb-0"><i class="fas fa-align-justify check-btn"></i></label>
            <div class="content">
                <div class="table-style">
                    <div class="table-header">
                    <h3 class="text-gray"><span class="h2">耗材</span>剩餘</h3>
                        <a href="#" class="text-blue">輸出耗材總表</a>
                    </div>
                    <table class="table">
                        <thead>
                            <tr>
                                <th>主分類</th>
                                <th>次分類</th>
                                <th>品名</th>
                                <th>規格</th>
                                <th>顏色</th>
                                <th>單位</th>
                                <th>廠商</th>
                                <th>總消耗</th>
                                <th>剩餘量</th>
                                <th>可歸還</th>
                            </tr>
                        </thead>
                        <tbody>
                        </tbody>
                    </table>
                </div>
                <ul class="pagination pt-3">
                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                </ul>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <script src="../../dist/admin.js"></script>
    <script src="../js/remaining.js"></script>
</body>
</html>