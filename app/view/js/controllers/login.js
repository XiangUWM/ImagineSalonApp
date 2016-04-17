/* Declare AngularJs Custom Module:  'Controllers' NOTE: This only needs to be done once. */
var Controllers = angular.module('Controllers', []);

/* Declare individual controller in Module:  loginController 
 * @param $scope Object - Scope is a universal document object that makes dynamic variables available inside the * template that you call in HTML using curly braces. Ex.: {{ variable }} in HTML would refer to $scope.variable * in the JavaScript file. 
 *
 * NOTE: These vairables can only be used in the login.php template where the controller is routed to in the routeProvider in config/routes/routes.js
 */
Controllers.controller('loginController', ['$scope',
  function ($scope) {
        /* Runs function when the HTML/CSS is fully loaded (jQuery) */
        $(document).ready(function () {

            /* Hide all links (jQuery)*/
            $('a').hide();
        });

        /* Function: login() */
        $scope.login = function () {
            // $scope.user.name refers to ng-model in line 8 of app/pages/templates/login.php
            // $scope.user.password refers to ng-model in line 14 of app/pages/templates/login.php
            $scope.greeting = "Welcome " + $scope.user.name + "!";

            // Declare form response
            $scope.response = "";

            // If the username and password are not validated show an error message in the response.
            if (!$scope.validate($scope.user.name, $scope.user.password)) {
                $scope.response = "Your username/password combination was not recognized.";
                // Color the response red using jQuery.
                $('#login-response').css('color', 'red');
            } else { // If the password/username combination are valid...
                $scope.response = $scope.greeting;  //1. Greet user specifically
                $('.username').text($scope.user.name);         //2. Update user's name in the header
                $('a').show();                      //3. Show all links
                window.location = "#/home";         //4. Redirect to the home.php page
            }
        };

        /** 
        * Username/Password validation 
        * @param user - $scope.user.name
        * @param password - $scope.user.password
        * return boolean - True if valid combination, false if not.
        */
        $scope.validate = function (user, password) {
            // Loop through each account... 
            for (var i = 0; i < $scope.users.length; i++) {
                // If user input matches the users Object array 'name' property...
                if (user == $scope.users[i]['name']) {
                    
                    // Check if password input matches the the password listed under the same object
                    if (password == $scope.users[i]['password']) {
                        return true;

                    }
                }
            }
            return false;
        };

        // users Object array: Chaz is the object located in the array at position [0], Lee is at position [1]
        $scope.users = [
            {
                'name': 'Chaz',
                'password': '1111'
            },
            {
                'name': 'Lee',
                'password': '2222'
            },
             {
                'name': 'Admin',
                'password': 'admin'
            }
        ];
  }]);