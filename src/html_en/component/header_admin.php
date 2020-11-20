<header class="pt-4 mx-2">
    <a href="index.php" class="text-black d-block text-center text-hover-none mb-3 fs-en">
        <h3 class="h6">Kang Chiao International School Preschool (Linkou Campus)</h3>
        <h1>Supplies Management System</h1>
    </a>
</header>
<nav class="navbar navbar-expand-lg navbar-light bg-white px-5 main-nav sticky-top mb-6 admin">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerNav" aria-controls="navbarTogglerNav" aria-expanded="false" aria-label="Toggle navigation" id="btn-nav">
        <span class="navbar-toggler-icon"></span>
    </button>

    <button class="navbar-toggler user-btn bg-red text-white rounded-circle" type="button" data-toggle="collapse" data-target="#navbarTogglerUser" aria-controls="navbarTogglerUser" aria-expanded="false" aria-label="Toggle navigation" id="btn-user">
        <i class="fas fa-user"></i>
    </button>
    <div class="collapse navbar-collapse" id="navbarTogglerNav">
        <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
            <li class="nav-item dropdown mr-5">
                <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Supplies Checking</a>
                <div class="dropdown-menu">
                    <a class="dropdown-item py-2" href="remaining.php">Remaining Supplies</a>
                    <a class="dropdown-item py-2" href="condition.php">Applying Conditions</a>
                    <a class="dropdown-item py-2" href="applying.php">Applying Details</a>
                    <a class="dropdown-item py-2" href="purchase.php">Purchase Details</a>
                </div>
            </li>
            <li class="nav-item dropdown mr-5">
                <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Supplies Management</a>
                <div class="dropdown-menu">
                    <a class="dropdown-item py-2" href="createsupply.php">Create Supply</a>
                    <a class="dropdown-item py-2" href="modifysupply.php">Modify Supply</a>
                    <a class="dropdown-item py-2" href="deletesupply.php">Delete Supply</a>
                </div>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">User Management</a>
                <div class="dropdown-menu">
                    <a class="dropdown-item py-2" href="createuser.php">Create User</a>
                    <a class="dropdown-item py-2" href="modifyuser.php">Modify User</a>
                    <a class="dropdown-item py-2" href="deleteuser.php">Delete User</a>
                    <a class="dropdown-item py-2" href="limit.php">Applying Limit</a>
                </div>
            </li>
        </ul>
    </div>
    <div class="collapse navbar-collapse user-list" id="navbarTogglerUser">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <a class="nav-link" href="admin_infoediter.php">Edit Personal Information</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="admin_password.php">Change Password</a>
            </li>
            <div class="dropdown-divider"></div>
            <li class="nav-item">
                <a class="nav-link" href="#"><i class="fas fa-sign-out-alt"></i> Log out</a>
            </li>
        </ul>
    </div>

    <div class="nav-item dropdown user-list-lg">
        <button class="user-btn bg-red text-white rounded-circle user-btn-lg" data-toggle="dropdown"><i class="fas fa-user"></i></button>
        <div class="dropdown-menu">
            <a href="admin_infoediter.php" class="dropdown-item py-2">Edit Personal Information</a>
            <a href="admin_password.php" class="dropdown-item py-2">Change Password</a>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item py-2 border_top"><i class="fas fa-sign-out-alt"></i> Log out</a>
        </div>
    </div>
</nav>

<script src="../js/nav_admin.js"></script>