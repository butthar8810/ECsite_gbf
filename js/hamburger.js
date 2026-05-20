document.addEventListener('DOMContentLoaded', function() {

    const headerHamburger = document.querySelector('.header-hamburger-menu');
    const footerHamburger = document.querySelector('.footer-hamburger-menu');
    const slideMenu = document.querySelector('.slide-menu');
    const slideMenuMask = document.querySelector('.slide-menu-mask');

    const menuTub_t = document.querySelector('.menu-tub-title');
    const subMenu_t = document.querySelector('.sub-menu-title');
    const menuTub_c = document.querySelector('.menu-tub-categor');
    const subMenu_c = document.querySelector('.sub-menu-categor');
    const dropMenuMask = document.querySelector('.drop-menu-mask');

    headerHamburger.addEventListener('click', function() {
        this.classList.toggle('active');
        footerHamburger.classList.toggle('active');
        slideMenu.classList.toggle('active');
        slideMenuMask.classList.toggle('active');
    });
    footerHamburger.addEventListener('click', function() {
        this.classList.toggle('active');
        headerHamburger.classList.toggle('active');
        slideMenu.classList.toggle('active');
        slideMenuMask.classList.toggle('active');
    });
    menuTub_t.addEventListener("mouseover", function() {
        menuTub_c.classList.remove('active');
        subMenu_c.classList.remove('active');
        
        this.classList.add('active');
        subMenu_t.classList.add('active');
        dropMenuMask.classList.add('active');
    });
    menuTub_c.addEventListener("mouseover", function() {
        menuTub_t.classList.remove('active');
        subMenu_t.classList.remove('active');
        
        this.classList.add('active');
        subMenu_c.classList.add('active');
        dropMenuMask.classList.add('active');
    });

    // メニュー外クリックで閉じる
    document.addEventListener('click', function(e) {
        // hamburger, slideMenu以外の要素をクリックしたら
        if (!headerHamburger.contains(e.target) && !footerHamburger.contains(e.target) && !slideMenu.contains(e.target)) {
            headerHamburger.classList.remove('active');
            footerHamburger.classList.remove('active');
            slideMenu.classList.remove('active');
            slideMenuMask.classList.remove('active');
        }
    });

    document.addEventListener('mouseover', function(e) {
        // menuTub, subMenu以外の要素にマウスオーバーしたら
        if (
            !menuTub_t.contains(e.target) && !subMenu_t.contains(e.target) &&
            !menuTub_c.contains(e.target) && !subMenu_c.contains(e.target)
        ) {
            menuTub_t.classList.remove('active');
            subMenu_t.classList.remove('active');
            menuTub_c.classList.remove('active');
            subMenu_c.classList.remove('active');
            dropMenuMask.classList.remove('active');
        }
    });
});
