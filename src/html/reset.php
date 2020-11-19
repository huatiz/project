<!doctype html>
<html lang="zh-TW">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/main.css">
    <title>重設密碼</title>
</head>

<body>
    <?php require 'component/lang.php'; ?>
    <div class="login wrapper">
        <div class="container h-100">
            <div class="row h-100 justify-content-center align-items-center">
                <div class="col-12 col-md-8 col-lg-5 wrapper__border bg-white my-5 pb-5">
                    <div class="items w-100">
                        <h1 class="py-3 mb-4 text-center">重設密碼</h1>
                        <form action="">
                            <div class="form-group">
                            <select class="input-box form-control" id="role" required>
                                <option value="" selected disabled hidden>使用者</option>
                                <optgroup class="bg-lgray text-white" label="一般使用者">
                                </optgroup> 
                                <optgroup class="bg-red text-white" label="管理者">
                                </optgroup>
                            </select>
                            </div>
                            <button type="submit" class="btn wrapper_btn w-100 bg-red text-white mt-5">重設密碼</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <script src="../../dist/reset_bound.js"></script>
</body>

</html>