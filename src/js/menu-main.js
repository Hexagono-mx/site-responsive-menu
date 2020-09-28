function openMenu() {
    document.getElementById('menu').classList.add('open');
}
function closeMenu() {
    document.getElementById('menu').classList.remove('open');
}
function submenuFormater() {
    var uls = document.getElementById('nav').getElementsByTagName('ul');
    for (var index in uls) {
        let parent = uls[index].parentNode;
        if (parent != undefined) {
            if (parent.tagName == 'LI') {
                parent.classList.add('parent-node');
                parent.onclick = function () {
                    if (parent.classList.contains('open')) {
                        parent.classList.remove('open');
                    } else {
                        parent.classList.add('open');
                    }
                }
            }
        }
    }
}

document.addEventListener("DOMContentLoaded", function(event) {
    submenuFormater();
    window.addEventListener('scroll', function(e) {
        var headerHeight = document.getElementById('hexagono-header').offsetHeight;
        if (window.scrollY >= headerHeight) {
            document.getElementById('hexagono-header').classList.add('gofix');
            document.body.style.paddingTop = headerHeight + 'px';
        } else {
            document.getElementById('hexagono-header').classList.remove('gofix');
            document.body.style.paddingTop = 0;
        }
    });
});
