function check() {
    // 全選
    const all = document.querySelector('#all');
    all.addEventListener('click', function(e) {
        const checkboxs = document.querySelectorAll('.sidebar input[type="checkbox"]');
        for (let i = 0; i < checkboxs.length; i++)
            checkboxs[i].checked = all.checked;
    });

    const allCheck = document.getElementsByClassName('components')[0]
        .addEventListener('click', function(e) {
            let subCheck = document.getElementsByName('subMenu');
            for (let i = 0; i < subCheck.length; i++) {
                let itemCheck = document.getElementsByName('item' + (i + 1));
                subCheck[i].addEventListener('click', function(e) {
                    // 次分類全選
                    for (let j = 0; j < itemCheck.length; j++)
                        itemCheck[j].checked = subCheck[i].checked;
                });
                let itemChecked_len = 0;
                for (let j = 0; j < itemCheck.length; j++)
                    if (itemCheck[j].checked)
                        itemChecked_len++;

                    // 品名控制次分類
                if (itemChecked_len === itemCheck.length)
                    subCheck[i].checked = true;
                else
                    subCheck[i].checked = false;
            }
        });
}
check();

// 會根據品名被勾選來印出