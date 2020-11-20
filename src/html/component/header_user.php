<header class="pt-4 mx-2">
    <a href="apply.php" class="d-block mb-3"><img src="../logo.png" alt="康橋國際學校幼兒園（林口校區）耗材管理系統" class="header-logo d-block m-auto"></a>
</header>
<nav class="navbar navbar-expand-lg navbar-light bg-white px-5 main-nav sticky-top mb-6">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerNav" aria-controls="navbarTogglerNav" aria-expanded="false" aria-label="Toggle navigation" id="btn-nav">
        <span class="navbar-toggler-icon"></span>
    </button>

    <button class="navbar-toggler user-btn bg-lgray text-white rounded-circle" type="button" data-toggle="collapse" data-target="#navbarTogglerUser" aria-controls="navbarTogglerUser" aria-expanded="false" aria-label="Toggle navigation" id="btn-user">
        <i class="fas fa-user"></i>
    </button>
    <div class="collapse navbar-collapse" id="navbarTogglerNav">
        <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
            <li class="nav-item mr-5">
                <a class="nav-link" href="apply.php" role="button">申請耗材</a>
            </li>
            <li class="nav-item mr-5">
                <a class="nav-link" href="get.php" role="button">領取耗材</a>
            </li>
            <li class="nav-item mr-5">
                <a class="nav-link" href="return.php" role="button">歸還耗材</a>
            </li>
            <li class="nav-item mr-5">
                <a class="nav-link" href="record.php" role="button">歷史紀錄</a>
            </li>
        </ul>
    </div>
    <div class="collapse navbar-collapse user-list" id="navbarTogglerUser">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <a class="nav-link" href="user_infoediter.php">編輯個人資料</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="user_password.php">修改密碼</a>
            </li>
            <div class="dropdown-divider"></div>
            <li class="nav-item">
                <a class="nav-link" href="#"><i class="fas fa-sign-out-alt"></i> 登出</a>
            </li>
        </ul>
    </div>

    <div class="nav-item dropdown user-list-lg">
        <button class="user-btn bg-lgray text-white rounded-circle user-btn-lg" data-toggle="dropdown"><i class="fas fa-user"></i></button>
        <div class="dropdown-menu">
            <a href="user_infoediter.php" class="dropdown-item py-2">修改個人資料</a>
            <a href="user_password.php" class="dropdown-item py-2">修改密碼</a>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item py-2 border_top"><i class="fas fa-sign-out-alt"></i> 登出</a>
        </div>
    </div>
</nav>

<script src="../js/nav_admin.js"></script>