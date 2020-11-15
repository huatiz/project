const name = document.querySelector('#name');
const account = document.querySelector('#account');
const classes = document.querySelector('#class');
const mail = document.querySelector('#mail');
name.value = "老王";
account.value = "123456789";
mail.value = "abc@gmail.com";
let Class = "大魟魚班";
for (let i = 1; i < classes.options.length; i++) {
    if (classes.options[i].innerText === Class) {
        classes.options[i].selected = true;
    }
}