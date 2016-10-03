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
        $locationProvider.html5Mode({
            enabled: true,
            requireBase: false,
            rewriteLinks: false
        });

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
    }])
    .controller('ContactController', ['$scope', '$http', function($scope, $http) {


        $scope.loading = false;
        $scope.done = false;
        $scope.errors = {};

        $scope.submit = function() {
            $scope.loading = true;
            $http({
                method: 'post',
                url: '/contact-us-send',
                data: {
                    'email': $scope.email,
                    'name':$scope.name,
                    'subject':$scope.subject,
                    'message':$scope.message
                },
                headers: {'Accept': 'application/json', 'Cache-Control': 'application/json'}
            }).then(function(response) {
                $scope.loading = false;
                $scope.done = true;
                $scope.errors = {};
                // reset
                $scope.name = '';
                $scope.email = '';
                $scope.subject = '';
                $scope.message = '';
            }, function(response) {
                $scope.done = false;
                $scope.loading = false;
                $scope.errors = response.data;
            });
        };
    }]);