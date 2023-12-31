import $ from 'jquery';
import { polyfillCountryFlagEmojis } from 'country-flag-emoji-polyfill';

$(document).ready(function () {

    // Polyfill to make flag emojis work on Windows systems
    polyfillCountryFlagEmojis();

    // Language switcher
    document.getElementById( "lang_choice_1" ).addEventListener( "change", function ( event ) { location.href = event.currentTarget.value; } );

    // Change homepage navbar on scroll 
    const navbar = document.querySelector('.main-nav');
    const logo = document.querySelector('.logo');
    const desktopMenu = document.querySelector('.desktop-menu');
    const hamburgerLines = document.querySelectorAll('.hamburger-line');
    const burger = document.querySelector('.burger');
    const mobileMenu = document.querySelector('.mobile-menu');

    burger.addEventListener('click', () => {
        mobileMenu.classList.toggle('h-0');
        mobileMenu.classList.toggle('h-full');


        burger.classList.toggle('hover:rotate-90');
        burger.classList.toggle('hover:-rotate-90');
    })
});

$(document).ready(function () {

    const navbar = document.querySelector('.new-navbar');
        
    window.onscroll = () => {
    
            if (window.scrollY > 100 ) {
                navbar.classList.add('scroll-styling');
            } else {
                navbar.classList.remove('scroll-styling');
            }
        }
});