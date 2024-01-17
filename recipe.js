function scrolll()  {
    var left=document.querySelector(".scroll")
    left.scrollBy(350,0)
}
function scrollr()  {
    var right=document.querySelector(".scroll")
    right.scrollBy(-350,0)
}
document.addEventListener('DOMContentLoaded', function () {
    let menuIcon = document.getElementById('menu-icon');
    let nav = document.querySelector('.navv');

    if (menuIcon && nav) {
        menuIcon.addEventListener('click', function () {
            nav.classList.toggle('active');
        });
    }
});