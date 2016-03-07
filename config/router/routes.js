var app = angular.module('imagineSalonApp', [
    'ngRoute',
    'Controllers'
]);

app.config(['$routeProvider',
            function ($routeProvider) {
        $routeProvider.
        when('/', {
            //Home Page
            templateUrl: 'app/view/pages/templates/home.php'
        }).
        when('/dashboard', {
            templateUrl: 'app/view/pages/templates/test.php'
        }).
        when('/calendar', {
            templateUrl: 'app/view/pages/templates/test.php'
        }).
        when('/customers', {
            templateUrl: 'app/view/pages/templates/test.php'
        }).
        when('/inventory', {
            templateUrl: 'app/view/pages/templates/test.php'
        }).
        when('/settings', {
            templateUrl: 'app/view/pages/templates/test.php'
        }).
        when('/reports', {
            templateUrl: 'app/view/pages/templates/test.php'
        }).
        otherwise({
            redirectTo: '/'
        });
    }]);