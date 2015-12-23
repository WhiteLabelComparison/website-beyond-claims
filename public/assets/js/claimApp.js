var AngularApplication = angular.module('ClaimApplication', ['ui.router'])
    .animation('.reveal-animation', function() {
        return {
            enter: function(element, done) {
                element.css('display', 'none');
                element.fadeIn(500, done);
                return function() {
                    element.stop();
                }
            },
            leave: function(element, done) {
                element.fadeOut(500, done)
                return function() {
                    element.stop();
                }
            }
        }
    })
    .config(['$stateProvider', '$locationProvider', function ($stateProvider, $locationProvider) {
        $locationProvider.html5Mode(true);

        $stateProvider.state('home', {
            url: '/',
            templateUrl: '/partials/index'
        })
        .state('services', {
            url: '/our-services',
            templateUrl: '/partials/services/index'
        })
        .state('package-bank-accounts', {
            url: '/our-services/package-bank-accounts',
            templateUrl: '/partials/services/pba'
        })
        .state('payment-protection-insurance', {
            url: '/our-services/payment-protection-insurance',
            templateUrl: '/partials/services/ppi'
        })
        .state('won-what-now', {
            url: '/won-what-now',
            templateUrl: '/partials/won/pay'
        })
        .state('contact-us', {
            url: '/contact-us',
            templateUrl: '/partials/contact'
        })
    }]);