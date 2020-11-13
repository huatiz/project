const role = document.querySelector('#role');
const role_icon = document.querySelector('div.role-icon');
role.addEventListener('change', function(e) {
    let value = Number(e.target.value);
    // 改頭像顏色
    if (value >= 1 && value <= 2) {
        role_icon.classList.add('bg-lgray');
    } else {
        role_icon.classList.remove('bg-lgray');
        role_icon.classList.add('bg-red');
    }
}, false);