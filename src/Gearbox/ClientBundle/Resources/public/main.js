var deps = ['initialize'],
    baseUrl = 'bundles/gearboxclient/app';

require.config({
    deps: (typeof deps !== 'undefined') ? deps : ['initialize'],
    baseUrl: baseUrl,
    paths: {
        marionette: '../components/marionette/lib/backbone.marionette',
        backbone: '../components/backbone/backbone',
        underscore: '../components/lodash/dist/lodash.compat',
        jquery: '../components/jquery/dist/jquery',
        nprogress: '../components/nprogress/nprogress'
    },
    shim: {
        underscore: {
            exports: '_'
        },
        backbone: {
            deps: ['underscore', 'jquery'],
            exports: 'Backbone'
        },
        nprogress: {
            deps: ['jquery']
        }
    }
});
