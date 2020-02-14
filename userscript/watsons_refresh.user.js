// ==UserScript==
// @name         Watsons Auto Refresh
// @namespace    https://github.com/hklcf/Watsons-Stock-Checker
// @version      0.1
// @description  Auto refresh!
// @author       HKLCF
// @match        https://www.watsons.com.hk/*
// @grant        none
// ==/UserScript==

(function() {
    'use strict';

    setTimeout(function() {
        window.location.reload();
    }, 300000);
})();
