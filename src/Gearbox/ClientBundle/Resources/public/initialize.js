/**
 * Initialize application
 *
 * @module initialize
 */
require([
    'nprogress',
    'when',
    'app/Application',
], function(NProgress, when, Application) {
    'use strict';

    console.log('start');
    NProgress.start();

    var GearboxApp = window.GearboxApp = new Application();
    when(function(){
        return GearboxApp.start({
            environment: environment
        });
    }()).then(function(){
        NProgress.done();
    });

});