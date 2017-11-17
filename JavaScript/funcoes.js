$('ul#nav-menu ul li.dropdown').hover(function() {
	$(this).find('dropdown-menu').fadeIn(500);
}, function() {
	$(this).find('dropdown-menu').fadeOut(500);
});