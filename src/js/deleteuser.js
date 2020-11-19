function deleteuser() {
    const role = document.querySelector('#role');
    const role_icon = document.querySelector('div.role-icon');
    const classes = document.querySelector('#class');
    const account = document.querySelector('#account');
    const submit = document.querySelector('#submit');
    role.addEventListener('change', function(e) {
        let value = Number(e.target.value);
        // 改頭像顏色
        if (value >= 1 && value <= 2) {
            role_icon.classList.add('bg-lgray');
        } else {
            role_icon.classList.remove('bg-lgray');
            role_icon.classList.add('bg-red');
        }
        account.value = '123456789';
        classes.value = '大魟魚班';
    }, false);
}
deleteuser();