var app = angular.module('imagineSalonApp', [
    'ngRoute',
    'Controllers'
]);

app.config(['$routeProvider',
            function ($routeProvider) {
        $routeProvider.
        when('/', {
                //Home Page
                templateUrl: 'app/view/pages/test.php'
                // controller: 'homePageController'

            }).
        when('/test', {
            templateUrl:
            'app/view/pages/test.php'
        }).
        otherwise({
            redirectTo: '/'
        });
    }]);