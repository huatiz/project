<!DOCTYPE html>
<html lang="zh-TW">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/main.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css">
    <title>領取耗材</title>
</head>
<body>
    <div class="container px-0">
        <?php require 'component/header_user.php';?>
        <?php require 'component/lang.php';?>

        <div class="content">
            <div class="table-style">
                <div class="table-header">
                    <h3 class="text-gray"><span class="h2">領取</span>耗材</h3>
                </div>
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>已領取</th>
                                <th>申請日期</th>
                                <th>主分類</th>
                                <th>次分類</th>
                                <th>品名</th>
                                <th>規格</th>
                                <th>顏色</th>
                                <th>單位</th>
                                <th>借用量</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td data-title="已領取"><input type="checkbox"></td>
                                <td data-title="申請日期">2020/11/19</td>
                                <td data-title="主分類">美術用品</td>
                                <td data-title="次分類">書寫</td>
                                <td data-title="品名">大三角學習鉛筆</td>
                                <td data-title="規格">15*10</td>
                                <td data-title="顏色">無</td>
                                <td data-title="單位">支</td>
                                <td data-title="總消耗">125</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="d-flex justify-content-center py-4">
                    <button class="btn submit-btn btn-primary" type="submit">完成</button>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <script src="../../dist/user_bound.js"></script>
</body>
</html>