<!DOCTYPE html>
<html lang="zh-TW">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/main.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css">
    <title>借用上限</title>
</head>

<body>
    <div class="container px-0">
        <?php require 'component/header_admin.php';?>
        <?php require 'component/lang.php';?>
        <div class="content">
            <div class="table-style">
                <div class="table-header flex-column flex-md-row">
                    <h3 class="text-gray"><span class="h2">借用</span>上限</h3>
                    <div class="d-flex col-md-8 col-lg-6">
                        <select id="user" class="input-box form-control mr-3" required>
                            <option value="" selected disabled hidden>使用者</option>
                        </select>
                        <select id="main" class="input-box form-control mr-3" required>
                            <option value="" selected disabled hidden>主分類</option>
                        </select>
                        <select id="sub" class="input-box form-control" required>
                            <option value="" selected disabled hidden>次分類</option>
                        </select>
                    </div>
                </div>
                <div class="table-responsive">
                    <table class="table" id="limit-table">
                        <thead>
                            <tr>
                                <th>品名</th>
                                <th>借用上限</th>
                                <th>操作</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th>大三角鉛筆</th>
                                <th name="limit" data-value="0">15</th>
                                <th>
                                    <i class="fas fa-pen" data-value="0"></i>
                                    <i class="fas fa-save hide" data-value="0"></i>
                                </th>
                            </tr>
                            <tr>
                                <th>大三角鉛筆大三角鉛筆</th>
                                <th name="limit" data-value="1">15</th>
                                <th>
                                    <i class="fas fa-pen" data-value="1"></i>
                                    <i class="fas fa-save hide" data-value="1"></i>
                                </th>
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
    <script src="../../dist/admin.js"></script>
    <script src="../js/limit.js"></script>
</body>

</html>