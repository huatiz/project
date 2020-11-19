const name = document.querySelector('#name');
const account = document.querySelector('#account');
const classes = document.querySelector('#class');
name.value = "老王";
account.value = "123456789";
let Class = "大魟魚班";
for (let i = 1; i < classes.options.length; i++) {
    if (classes.options[i].innerText === Class) {
        classes.options[i].selected = true;
    }
}