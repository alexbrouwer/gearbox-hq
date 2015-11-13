define([
    'underscore',
    'marionette',
    'when',
    './config/application',
    './config/environment'
], function(_, Marionette, when, applicationConfig, environmentConfig){
    return Marionette.Application.extend({
        start: function(options){
            var self = this;
            var deferred = when.defer();

            deferred.promise.done(function(options){
                _.merge(applicationConfig, options);
                self.options = applicationConfig;
            });

            _.merge(options, environmentConfig[options.environment]);

            this.initConfig(options).done(function(options){
                Marionette.Application.prototype.start.call(self, options);
                deferred.resolve(options);
            });

            return deferred.promise;
        },

        initConfig: function(options){
            var deferred = when.defer();

            deferred.resolve(options);

            return deferred.promise;
        }
    });
});
