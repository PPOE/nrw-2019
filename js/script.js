function mobileMenu(menuClass, triggerClass, menuBox){
    $(triggerClass).on('click', function(e){
        e.preventDefault();
        $(triggerClass).stop();
        $(menuClass).stop();
        if($(menuClass).hasClass('menu-open')){
            $(triggerClass).removeClass('is-active');
            document.getElementById(menuBox).style.right = "-70%";
            $(menuClass).removeClass('menu-open');
        } else {
            document.getElementById(menuBox).style.right = "0%";
            $(menuClass).addClass('menu-open');
            $(triggerClass).addClass('is-active');
        }
    });
}

$(document).ready(function () {
    mobileMenu('.mobile-menu-wrapper', '.hamburger', 'mobile-menu-container');
});
