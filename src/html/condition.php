<!DOCTYPE html>
<html lang="zh-TW">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/main.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css">
    <title>申請檢視</title>
</head>
<body>
    <div class="container px-0">
        <?php require 'component/header_admin.php';?>
        <?php require 'component/lang.php';?>
        <div class="content">
            <div class="table-style">
                <div class="table-header flex-column flex-md-row">
                    <h3 class="text-gray"><span class="h2">申請</span>檢視</h3>
                    <div class="d-flex col-md-7 col-lg-5">
                        <select id="condition" class="input-box form-control mr-3" required>
                            <option value="" selected disabled hidden>檢視類別</option>
                            <option value="1">老師申請</option>
                            <option value="2">各班申請</option>
                            <option value="3">活動申請</option>
                        </select>
                        <select id="condition-content" class="input-box form-control" required>
                            <option value="" selected disabled hidden>類別細項</option>
                        </select>
                    </div>
                </div>
                    <table class="table">
                        <thead>
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
    <script src="../js/condition.js"></script>
</body>
</html>