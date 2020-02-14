// ==UserScript==
// @name         Watsons Stock Data
// @namespace    https://github.com/hklcf/Watsons-Stock-Checker
// @version      0.1
// @description  Get stock data
// @author       HKLCF
// @match        https://www.watsons.com.hk/*/c/*
// @match        https://www.watsons.com.hk/search?text=*
// @grant        none
// ==/UserScript==

(function() {
    'use strict';

    var results_url = [];
    var results_text = [];
    var checklist = '';
    document.querySelectorAll('div.productNameInfo a.ClickSearchResultEvent_Class.gtmAlink').forEach(function(result) {
        var url = result.href.replace(/\/product.*\/p\//g, '/p/'); //replace product name
        results_url.push(url);
    });
    document.querySelectorAll('div.productNameInfo a.ClickSearchResultEvent_Class.gtmAlink').forEach(function(result) {
        var title = result.text.replace(/\t/g, ''); //replace tab
        title = title.replace(/\n/g, ''); // replace new line
        results_text.push(title);
    });
    //output checklist
    for(var i = 0; i < results_url.length; i++) {
        checklist += '[\'' + results_url[i] + '\', \'' + results_text[i] + '\'\],\n';
    }
    console.log(checklist);
})();
