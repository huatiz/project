<!doctype html>
<html lang="zh-TW">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/main.css">
    <title>登入</title>
</head>

<body>
    <?php require 'component/lang.php'; ?>
    <div class="login wrapper">
        <div class="container h-100">
            <div class="row h-100 justify-content-center align-items-center">
                <div class="col-12 col-md-8 col-lg-6 wrapper__border bg-white my-5">
                    <div class="items w-100">
                        <h1 class="logo mb-4"><img class="w-100" src="../logo.png" alt="康橋國際學校幼兒園（林口校區）耗材管理系統"></h1>
                        <form>
                            <div class="form-group">
                                <label for="account">帳號</label>
                                <input type="text" class="form-control bg-gray" id="account" name="account" required>
                            </div>
                            <div class="form-group">
                                <label for="password">密碼</label>
                                <input type="password" class="form-control bg-gray" id="password" name="passwd" required>
                            </div>
                            <div class="form-group form-check mb-5">
                                <input type="checkbox" class="form-check-input" id="remember">
                                <label class="form-check-label" for="remember" name="remember">記住我</label>
                            </div>
                            <button type="submit" class="btn wrapper_btn w-100 bg-red text-white">登入</button>
                            <div class="form-group text-center mt-4">
                                <a href="passwd.php" class="text-blue">忘記密碼？</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="../../dist/login_bound.js"></script>
</body>

</html>