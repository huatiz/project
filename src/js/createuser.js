const name = document.querySelector('#name');
const admin = document.querySelector('#role_admin');
const user = document.querySelector('#role_user');
const account = document.querySelector('#account');
const classes = document.querySelector('#class');
const mail = document.querySelector('#mail');
const submit = document.querySelector('#submit');
// 改頭像顏色
const role_icon = document.querySelector('div.role-icon');
admin.addEventListener('change', function(e) {
    role_icon.classList.remove('bg-lgray');
    role_icon.classList.add('bg-red');
}, false);

user.addEventListener('change', function(e) {
    role_icon.classList.add('bg-lgray');
}, false);

//讀取使用者資料
submit.addEventListener('click', function(e) {
    e.preventDefault();
    let role = "";
    if (role_admin.checked)
        role = "管理者"
    else if (role_user.checked)
        role = "使用者"

    // fetch('', {
    //     method: 'POST',
    //     body: encodeURI(JSON.stringify({
    //         name: name.value,
    //         role: role,
    //         account: account,
    //         // class: classes.value,
    //         mail: mail.value
    //     })),
    // });
}, false);