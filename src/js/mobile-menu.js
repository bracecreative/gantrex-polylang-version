import $ from 'jquery';

$(document).ready(function () {

    // Change homepage navbar on scroll 
    // const hasChildren = document.querySelector('.menu-item-has-children');
    // const subMenu = document.querySelector('.sub-menu');

    // hasChildren.addEventListener('click', () => {

        // hasChildren.forEach(hc => {
        //     hc.classList.toggle('hidden');
        // })
        // subMenu.classList.toggle('hidden');
        // hasChildren.classList.toggle('h-full');

    // })

    $(".mobile-nav").find(".menu-item-has-children.top__level").children('a').addClass('menu-closed');

    $(".mobile-nav").find(".sub-menu").addClass('hidden');

    $(".mobile-nav").find(".menu-item-has-children").find('a').click(function (){
        $(this).siblings('.sub-menu').toggleClass('hidden');
        $(this).toggleClass('menu-closed');
        $(this).toggleClass('menu-open');
    });

});

const scrollBtn = document.querySelector(".scrollTopButton");

scrollBtn.addEventListener("click", () => {
    window.scrollTo({
        top: 0,
        behavior: "smooth"
    });
});