/* AngularJs URL Request Routing */

/** 
 * Declaring the modules...
 * AngularJs Application Name: 'imagineSalonApp'
 * Modules: ngRoute - Routing Module
 *          Controllers - User-created Module of JavaScript functions located in 'app/view/js/controllers'
 */
var app = angular.module('imagineSalonApp', [
    'ngRoute',
    'Controllers'
]);

/** 
 * The application will run a configuration function for routeProvider and then calls the routing conditions provided within the array below.
 */
app.config(['$routeProvider',
            function ($routeProvider) {
        $routeProvider.
        /* Routing Conditions */
        when('/', { // Base URL - go to Login template page
            templateUrl: 'app/view/pages/templates/login.php',
            controller: 'loginController' // Use the loginController from the 'Controllers' module
        }).
        when('/home', { // Home - go to Dashboard tab template
            templateUrl: 'app/view/pages/templates/home.php'
        }).
        when('/calendar', { // Calendar - go to Calendar tab template
            templateUrl: 'app/view/pages/templates/calendar.php'
        }).
        when('/customers', { // Customer - go to Customer tab template
            templateUrl: 'app/view/pages/templates/customers.php'
        }).
        when('/inventory', { // Inventory - go to Inventory tab template
            templateUrl: 'app/view/pages/templates/inventory.php',
            controller: 'inventoryController' // Use the inventoryController from the 'Controllers' module
        }).
        when('/inventory/:filterResults', {
            templateUrl: 'app/view/pages/templates/inventory.php',
            controller: 'inventoryController'// Use the inventoryController from the 'Controllers' module
        }).
        when('/inventory/:openCount', {
            templateUrl: 'app/view/pages/templates/inventory.php',
            controller: 'inventoryController'// Use the inventoryController from the 'Controllers' module
        }).
        when('/settings', { // Settings - go to Settings tab template
            templateUrl: 'app/view/pages/templates/settings.php'
        }).
        when('/reports', { // Reports - go to Reports tab template
            templateUrl: 'app/view/pages/templates/reports.php'
        }).
        when('/:user/account', { // Specified User Account - go to User's Account template page
            templateUrl: 'app/view/pages/templates/user.php'
        }).
        when('/test', { // Test page - Test SQL queries and functions here
            templateUrl: 'app/view/pages/templates/test.php'
        }).
        otherwise({ // Otherwise - If anything is typed in the URL request other than these specified routes for this domain, redirect the user to the Login screen
            redirectTo: '/'
        });
    }]);