//MENU DROPDOWN ANIMATION
$('.dropdown').on('show.bs.dropdown', function() {
    $(this).find('.dropdown-menu').first().stop(true, true).slideDown({duration: 100});
});

// Add slideUp animation to Bootstrap dropdown when collapsing.
$('.dropdown').on('hide.bs.dropdown', function() {
$   (this).find('.dropdown-menu').first().stop(true, true).slideUp({duration: 100});
});