Controllers.controller('inventoryController', ['$scope',
  function ($scope) {
        $(document).ready(function () {
            $scope.openCount = function () {
                $('#open-count').toggle('slow');
            };
            $scope.closeCount = function () {
                $('#close-count').toggle('slow');
            };
            $scope.dailyReport = function () {
                $('#daily-report').toggle('slow');
            };
            $scope.currentDate = function () {
                var today = new Date();
                var dd = today.getDate();
                var mm = today.getMonth() + 1;
                var yyyy = today.getFullYear();

                if (dd < 10) {
                    dd = '0' + dd
                }

                if (mm < 10) {
                    mm = '0' + mm
                }

                today = mm + '/' + dd + '/' + yyyy;
                return today;
            };
        })
  }]);