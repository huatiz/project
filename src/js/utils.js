function toggle(id, url1, url2) {
    document.querySelector(id)
        .addEventListener('change', function(e) {
            if (this.checked === true) {
                setTimeout(function() {
                    window.location.href = url1;
                }, 300);

            } else {
                setTimeout(function() {
                    window.location.href = url2;
                }, 300);
            }
        });
    return;
}

function add(a, b) {
    return a + b;
}

module.exports = {
    toggle: toggle,
};