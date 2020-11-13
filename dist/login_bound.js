(() => {
    var t = { 658: t => { t.exports = { toggle: function(t, e, n) { document.querySelector(t).addEventListener("change", (function(t) {!0 === this.checked ? setTimeout((function() { window.location.href = e }), 300) : setTimeout((function() { window.location.href = n }), 300) })) }, add: function(t, e) { return t + e } } } },
        e = {};
    (function n(o) { if (e[o]) return e[o].exports; var r = e[o] = { exports: {} }; return t[o](r, r.exports, n), r.exports })(658).toggle("#onoff", "../html_en/login.php", "../html/login.php")
})();