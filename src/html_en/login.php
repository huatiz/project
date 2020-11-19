<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/main.css">
    <title>Login</title>
</head>

<body>
    <?php require 'component/lang.php'; ?>
    <div class="login wrapper fs-noto">
        <div class="container h-100">
            <div class="row h-100 justify-content-center align-items-center">
                <div class="col-12 col-md-8 col-lg-6 wrapper__border bg-white my-5">
                    <div class="items w-100">
                        <div class="title fs-en text-center mb-4">
                            <p class="fz-1 mb-2">Kang Chiao International School Preschool (Linkou Campus)</p>
                            <h1 class="fz-2">Supplies Management System</h1>
                        </div>
                        <form>
                            <div class="form-group">
                                <label for="account">Account</label>
                                <input type="text" class="form-control bg-gray" id="account" name="account" required>
                            </div>
                            <div class="form-group">
                                <label for="password">Password</label>
                                <input type="password" class="form-control bg-gray" id="password" name="passwd" required>
                            </div>
                            <div class="form-group form-check mb-5">
                                <input type="checkbox" class="form-check-input" id="remember">
                                <label class="form-check-label" for="remember" name="remember">Remember me</label>
                            </div>
                            <button type="submit" class="btn wrapper_btn w-100 bg-red text-white">Log in</button>
                            <div class="form-group text-center mt-4">
                                <a href="passwd.php" class="text-blue">Forget passward?</a>
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