function modifyuser() {
    //先抓資料
    const role = document.querySelector('#role');
    const role_icon = document.querySelector('div.role-icon');
    const name = document.querySelector('#name');
    const account = document.querySelector('#account');
    const mail = document.querySelector('#mail');
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

        name.value = $('#role option:selected').text();
        //抓好資料後改
        account.value = '123456789';
        mail.value = '123456789@gmail.com';

    }, false);

    submit.addEventListener('submit', function(e) {
        e.preventDefault();
        let Name = name.value;
        let Class = $('#class option:selected').text();
        //送資料 name, class   fetch
    });
}
modifyuser();