var Controllers = angular.module('Controllers', []);

Controllers.controller('loginController', ['$scope', '$http',
  function ($scope, $http) {
        $http.get('app/model/data/admin.json').success(function (data) {
            $scope.accounts = data;
        });

        $scope.property = 'user';
  }]);