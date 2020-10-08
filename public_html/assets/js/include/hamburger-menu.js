import {animate, animateReset} from "./animations";

$(function() {
    'use strict';

    const HAMBURGER_MENU_CLASS = 'hamburger-menu';
    const HAMBURGER_MENU_LEVEL_1_CLASS = 'js-hamburger-menu-level-1';
    const HAMBURGER_MENU_BUTTON_ACTIVE_CLASS = 'is-active';
    const HAMBURGER_MENU_ACTIVE_CLASS = 'hamburger-menu--active';
    const HAMBURGER_MENU_BACK_CLASS = 'js-hamburger-menu-back';

    function hamburgerMenu() {
        let $body = $('html, body');
        let $menuTrigger = $('.js-hamburger-menu-trigger');

        $menuTrigger.on('click', function () {
            let $hamburgerMenu = $(`.${HAMBURGER_MENU_CLASS}`);

            $body.toggleClass(HAMBURGER_MENU_ACTIVE_CLASS);
            $menuTrigger.toggleClass(HAMBURGER_MENU_BUTTON_ACTIVE_CLASS);
            $hamburgerMenu.toggleClass(HAMBURGER_MENU_ACTIVE_CLASS);

            animateReset($hamburgerMenu);
            animate($hamburgerMenu, 'hamburgerMenu');
        });

        // DEBUG
        // $menuTrigger.click();
    }

    function hamburgerSubMenu() {
        let $hamburgerMenu = $(`.${HAMBURGER_MENU_CLASS}`);

        $(`.${HAMBURGER_MENU_LEVEL_1_CLASS} a[data-toggle="pill"]`).on('click', function () {
            $hamburgerMenu.addClass('hamburger-menu--show-level-2');
        });

        $(`.${HAMBURGER_MENU_BACK_CLASS}`).on('click', function () {
            $hamburgerMenu.removeClass('hamburger-menu--show-level-2');
        });
    }

    hamburgerMenu();
    hamburgerSubMenu();
});
