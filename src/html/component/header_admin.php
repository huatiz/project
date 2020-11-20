<header class="pt-4 mx-2">
    <a href="index.php" class="d-block mb-3"><img src="../logo.png" alt="康橋國際學校幼兒園（林口校區）耗材管理系統" class="header-logo d-block m-auto"></a>
</header>
<nav class="navbar navbar-expand-lg navbar-light bg-white px-5 main-nav sticky-top mb-6 admin">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerNav" aria-controls="navbarTogglerNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <button class="navbar-toggler user-btn bg-red text-white rounded-circle" type="button" data-toggle="collapse" data-target="#navbarTogglerUser" aria-controls="navbarTogglerUser" aria-expanded="false" aria-label="Toggle navigation">
        <i class="fas fa-user"></i>
    </button>
    <div class="collapse navbar-collapse" id="navbarTogglerNav">
        <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
            <li class="nav-item dropdown mr-5">
                <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">耗材檢視</a>
                <div class="dropdown-menu">
                    <a class="dropdown-item py-2" href="remaining.php">耗材剩餘</a>
                    <a class="dropdown-item py-2" href="condition.php">申請檢視</a>
                    <a class="dropdown-item py-2" href="applying.php">借用明細</a>
                    <a class="dropdown-item py-2" href="purchase.php">進貨明細</a>
                </div>
            </li>
            <li class="nav-item dropdown mr-5">
                <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">耗材管理</a>
                <div class="dropdown-menu">
                    <a class="dropdown-item py-2" href="createsupply.php">新增耗材</a>
                    <a class="dropdown-item py-2" href="modifysupply.php">修改耗材</a>
                    <a class="dropdown-item py-2" href="deletesupply.php">刪除耗材</a>
                </div>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">人員管理</a>
                <div class="dropdown-menu">
                    <a class="dropdown-item py-2" href="createuser.php">新增使用者</a>
                    <a class="dropdown-item py-2" href="modifyuser.php">修改使用者</a>
                    <a class="dropdown-item py-2" href="deleteuser.php">刪除使用者</a>
                    <a class="dropdown-item py-2" href="limit.php">借用上限</a>
                </div>
            </li>
        </ul>
    </div>
    <div class="collapse navbar-collapse user-list" id="navbarTogglerUser">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <a class="nav-link" href="admin_infoediter.php">編輯個人資料</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="admin_password.php">修改密碼</a>
            </li>
            <div class="dropdown-divider"></div>
            <li class="nav-item">
                <a class="nav-link" href="#"><i class="fas fa-sign-out-alt"></i> 登出</a>
            </li>
        </ul>
    </div>
    <div class="nav-item dropdown user-list-lg">
        <button class="user-btn bg-red text-white rounded-circle user-btn-lg" data-toggle="dropdown"><i class="fas fa-user"></i></button>
        <div class="dropdown-menu">
            <a href="admin_infoediter.php" class="dropdown-item py-2">修改個人資料</a>
            <a href="admin_password.php" class="dropdown-item py-2">修改密碼</a>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item py-2 border_top"><i class="fas fa-sign-out-alt"></i> 登出</a>
        </div>
    </div>
</nav>