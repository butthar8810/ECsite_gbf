document.addEventListener('DOMContentLoaded', function() {
  const hamburger = document.querySelector('.hamburger-menu');
  const slideMenu = document.querySelector('.slide-menu');
  const slideMenuMask = document.querySelector('.slide-menu-mask');

  hamburger.addEventListener('click', function() {
    this.classList.toggle('active');
    slideMenu.classList.toggle('active');
    slideMenuMask.classList.toggle('active');
  });

  // メニュー外クリックで閉じる
  document.addEventListener('click', function(e) {
    if (!hamburger.contains(e.target) && !slideMenu.contains(e.target)) {
      hamburger.classList.remove('active');
      slideMenu.classList.remove('active');
      slideMenuMask.classList.remove('active');
    }
  });
});
