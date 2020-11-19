const pen = document.getElementsByClassName('fa-pen');
const save = document.getElementsByClassName('fa-save');
const limit = document.getElementsByName('limit');
document.getElementsByTagName('tbody')[0].addEventListener('click', function(e) {
    if (e.target.tagName === 'I') {
        let value = e.target.getAttribute('data-value');
        pen[value].classList.toggle('hide');
        save[value].classList.toggle('hide');
        if ($(e.target).hasClass('fa-pen')) {
            let num = limit[value].textContent;
            limit[value].innerHTML = `<input type="number" value="${num}">`
        } else if ($(e.target).hasClass('fa-save')) {
            limit[value].innerHTML = limit[value].querySelector('input').value;
        }
    }
});