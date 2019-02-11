jQuery(document).ready(function() {
  
  // Toggle open the primary navigation
  jQuery('.menu-header-toggle').click(function() {
    jQuery('.menu-header').toggleClass('menu-header-open');
    jQuery('.main-nav').toggleClass('menu-open');
    jQuery('body').toggleClass('no-scroll');
  });

  // Toggle open the categories menu
  jQuery('.blog-nav-toggle').click(function() {
    jQuery('.blog-categories-list').toggleClass('blog-nav-open');
  });
});