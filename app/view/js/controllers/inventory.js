Controllers.controller('inventoryController', ['$scope',
  function ($scope) {
        $(document).ready(function () {
            $scope.openCount = function() {
               $('#open-count').toggle('slow'); 
            };
            $scope.closeCount = function() {
               $('#close-count').toggle('slow'); 
            };
        })
  }]);