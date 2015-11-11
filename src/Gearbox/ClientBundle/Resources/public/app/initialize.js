/**
 * Initialize application
 *
 * @module initialize
 */
require([
    'application',
    //'config/routes',
    //'config/application'
], function(Application, routes, applicationConfig) {
    'use strict';

    window.GearboxApp = new Application({
        //routes: routes,
        //controllerSuffix: applicationConfig.controllerSuffix
    });
});