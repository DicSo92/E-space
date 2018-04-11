// ------ Animation Apparition Button ScrollTop -------
window.onscroll = function() { scrollFunction() };
function scrollFunction() {
    if (document.body.scrollTop > 100 || document.documentElement.scrollTop > 100) {
        document.getElementById("btnTop").style.display = "block";
    } else {
        document.getElementById("btnTop").style.display = "none";
    }
}

// ------ Animation Nav Category Fixed -------
// ------ Fixation -------
var fixmeTop = $('.background-nav-category').offset().top;
$(window).scroll(function() {
    var currentScroll = $(window).scrollTop();
    if (currentScroll >= fixmeTop) {
        $('.background-nav-category').css({
            position: 'sticky',
            top: '0',
            animation: 'reduceNavCategory 5s normal',
            "animation-fill-mode" : 'both'
        });
    } else {
        $('.background-nav-category').css({
            animation: 'none'
        });
    }
});
// ------ Static à partir des avis -------
var fixmeBot = $('.background-comments').offset().top;
$(window).scroll(function() {
    var currentScrollt = $(window).scrollTop();
    if (currentScrollt >= fixmeBot) {
        $('.background-nav-category').css({
            position: 'static'
        });
    }
});
