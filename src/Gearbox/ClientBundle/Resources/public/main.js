var deps = ['initialize'],
    baseUrl = 'bundles/gearboxclient';

require.config({
    deps: (typeof deps !== 'undefined') ? deps : ['initialize'],
    baseUrl: baseUrl,
    paths: {
        jquery: '/vendors/jquery/dist/jquery',
        nprogress: '/vendors/nprogress/nprogress',
        underscore: '/vendors/lodash/dist/lodash.compat',
        backbone: '/vendors/backbone/backbone',
        marionette: '/vendors/marionette/lib/backbone.marionette'
    },
    "packages": [
        {
            name: "when",
            main: "when",
            location: '/vendors/when'
        },
        {
            name: "rest",
            main: "rest",
            location: '/vendors/rest'
        }
    ],
    shim: {
        nprogress: {
            deps: ['jquery']
        },
        underscore: {
            exports: '_'
        },
        backbone: {
            deps: ['underscore', 'jquery'],
            exports: 'Backbone'
        }
    }
});
