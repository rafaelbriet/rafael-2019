document.addEventListener('DOMContentLoaded', () => {
  const menuHeaderToggle = document.querySelector('.menu-header-toggle');
  const blogNavToggle = document.querySelector('.blog-nav-toggle');
  
  menuHeaderToggle.addEventListener('click', () => togglePrimaryMenu());
  blogNavToggle.addEventListener('click', () => toggleCategoryMenu());
});

function togglePrimaryMenu() {
  const menuHeader = document.querySelector('.menu-header');
  const maiNav = document.querySelector('.main-nav');
  const body = document.querySelector('body');
  
  menuHeader.classList.toggle('menu-header-open');
  maiNav.classList.toggle('menu-open');
  body.classList.toggle('no-scroll');
}

function toggleCategoryMenu() {
  const blogCategoriesList = document.querySelector('.blog-categories-list');
  
  blogCategoriesList.classList.toggle('blog-nav-open');
}