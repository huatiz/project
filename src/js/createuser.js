function createuser() {
    // 改頭像顏色
    const admin = document.querySelector('#role_admin');
    const user = document.querySelector('#role_user');
    const role_icon = document.querySelector('.role-icon');
    admin.addEventListener('change', function(e) {
        role_icon.classList.remove('bg-lgray');
        role_icon.classList.add('bg-red');
    }, false);

    user.addEventListener('change', function(e) {
        role_icon.classList.add('bg-lgray');
    }, false);
}
createuser();