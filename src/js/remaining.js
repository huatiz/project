function check() {
    // 全選
    const all = document.querySelector('#all');
    all.addEventListener('click', function(e) {
        const checkboxs = document.querySelectorAll('.sidebar input[type="checkbox"]');
        for (let i = 0; i < checkboxs.length; i++)
            checkboxs[i].checked = all.checked;
    });

    // 主分類全選
    const mainCheck = document.querySelectorAll('.main-check');
    for (let i = 0; i < mainCheck.length; i++) {
        mainCheck[i].addEventListener('click', function(e) {
            let checkboxs = document.querySelectorAll('ul[id="mainMenu' + (i + 1) + '"] input[type="checkbox"]');
            for (let j = 0; j < checkboxs.length; j++)
                checkboxs[j].checked = mainCheck[i].checked;
        });

        // 次分類全選
        let subCheck = document.querySelectorAll('ul[id="mainMenu' + (i + 1) + '"] .sub-check');
        for (let j = 0; j < subCheck.length; j++)
            subCheck[j].addEventListener('click', function(e) {
                let checkboxs = document.querySelectorAll('ul[id="subMenu' + (i + 1) + '-' + (j + 1) + '"] input[type="checkbox"]');
                console.log(checkboxs);
                for (let k = 0; k < checkboxs.length; k++)
                    checkboxs[k].checked = subCheck[j].checked;
            });
    }
}
check();

// 會根據品名被勾選來印出