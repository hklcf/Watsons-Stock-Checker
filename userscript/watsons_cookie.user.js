// ==UserScript==
// @name         Watsons Cookie
// @namespace    https://github.com/hklcf/Watsons-Stock-Checker
// @version      0.1
// @description  Export Cookie
// @author       HKLCF
// @match        https://www.watsons.com.hk/
// @grant        GM_xmlhttpRequest
// @connect      <YOUR_SERVER_COOKIE_API_DOMAIN>
// ==/UserScript==

(function() {
    'use strict';

    GM_xmlhttpRequest({
        method: 'POST',
        url: 'https://<YOUR_SERVER>/watsons_cookie.php',
        data: 'cookie=' + document.cookie,
        headers: {
            'Content-Type': 'application/x-www-form-urlencoded'
        },
        onload: function(result) {
            console.log(result.response);
        },
    });
})();
