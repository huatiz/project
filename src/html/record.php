<!DOCTYPE html>
<html lang="zh-TW">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/main.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css">
    <title>歷史紀錄</title>
</head>
<body>
    <div class="container px-0">
        <?php require 'component/header_user.php';?>
        <?php require 'component/lang.php';?>

            <div class="content">
                <div class="table-style">
                    <div class="table-header">
                        <h3 class="text-gray"><span class="h2">歷史</span>紀錄</h3>
                    </div>
                    <table class="table">
                        <thead>
                            <tr>
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
                                <td data-title="主分類">美術用品</td>
                                <td data-title="次分類">書寫</td>
                                <td data-title="品名">大三角學習鉛筆</td>
                                <td data-title="規格">15*10</td>
                                <td data-title="顏色">無</td>
                                <td data-title="單位">支</td>
                                <td data-title="廠商">百樂</td>
                                <td data-title="總消耗">125</td>
                            </tr>
                            <tr>
                                <td data-title="主分類">美術用品</td>
                                <td data-title="次分類">書寫</td>
                                <td data-title="品名">大三角</td>
                                <td data-title="規格">無</td>
                                <td data-title="顏色">藍色</td>
                                <td data-title="單位">支</td>
                                <td data-title="廠商">百樂</td>
                                <td data-title="總消耗">125</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <ul class="pagination pt-3">
                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                    <li class="page-item">
                        <a class="page-link" href="#">2</a>
                    </li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                </ul>
            </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <script src="../../dist/user_bound.js"></script>
</body>
</html>