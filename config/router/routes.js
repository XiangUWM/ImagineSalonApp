var app = angular.module('imagineSalonApp', [
    'ngRoute',
    'Controllers'
]);

app.config(['$routeProvider',
            function ($routeProvider) {
        $routeProvider.
        when('/', {
            //Home Page
            templateUrl: 'app/view/pages/templates/login.php',
            controller: 'loginController'
        }).
        when('/calendar', {
            templateUrl: 'app/view/pages/templates/calendar.php'
        }).
        when('/customers', {
            templateUrl: 'app/view/pages/templates/customers.php'
        }).
        when('/inventory', {
            templateUrl: 'app/view/pages/templates/inventory.php'
        }).
        when('/settings', {
            templateUrl: 'app/view/pages/templates/settings.php'
        }).
        when('/reports', {
            templateUrl: 'app/view/pages/templates/reports.php'
        }).
        when('/home', {
            templateUrl: 'app/view/pages/templates/home.php'
        }).
        otherwise({
            redirectTo: '/'
        });
    }]);