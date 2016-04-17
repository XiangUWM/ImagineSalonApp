/* Declare individual controller in Module:  inventoryController 
 * @param $scope Object - Scope is a universal document object that makes dynamic variables available inside the * template that you call in HTML using curly braces. Ex.: {{ variable }} in HTML would refer to $scope.variable * in the JavaScript file. 
 *
 * NOTE: These vairables can only be used in the inventory.php template where the controller is routed to in the routeProvider in config/routes/routes.js
 */
Controllers.controller('inventoryController', ['$scope',

  function ($scope) {
        // Run everything inside of this function when HTML/CSS is fully loaded...
        $(document).ready(function () {

                //openCount() function: Toggles the visibility of the Opening Inventory Count modal
                $scope.openCount = function () {
                    $('#open-count').toggle('slow');
                };

                //closeCount() function: Toggles the visibility of the Closing Inventory Count modal
                $scope.closeCount = function () {
                    $('#close-count').toggle('slow');
                };

                //dailyReport() function: Toggles the visibility of the Open Inventory Count modal
                $scope.dailyReport = function () {
                    $('#daily-report').toggle('slow');
                };
                $scope.dailyReports = function () {
                    $('#daily-reports').toggle('slow');
                };
                $scope.statusReport = function () {
                    $('#status-report').toggle('slow');
                };
                $scope.performAudit = function () {
                    $('#perform-audit').toggle('slow');
                    $('.modal-fieldset').parent().hide();
                    $('.perform-count').parent().show();
                    $('.progress-bar').css('width', 25 + '%');
                };
                $scope.auditTabController = function () {
                    $tabs = ['perform-count', 'reconcile-inventory', 'assess-products', 'adjust-retail'];
                    $('.navs li').click(function () {
                        $switchActive = function ($tab) {
                            $tab.addClass('active');
                            $tab.siblings().removeClass('active');
                            $('.modal-fieldset').parent().hide();
                        };
                        for (var i = 0; i < $tabs.length; i++) {
                            if ($(this).hasClass($tabs[i])) {
                                $switchActive($(this));
                                $('.' + $tabs[i]).parent().fadeIn('slow');
                                $('#audit-step').text('Step ' + (++i))
                                $('.progress-bar').css('width', 25 * i + '%');
                            }
                        }
                    });
                };

                //currentDate() function: Returns the present date in mm/dd/yyyy format
                $scope.currentDate = function () {
                    // instantiate new JavaScript Date Object
                    var today = new Date();
                    // call Date functions built into JavaScript library for getting the day/month/year
                    var dd = today.getDate();
                    var mm = today.getMonth() + 1;
                    var yyyy = today.getFullYear();

                    // Day and Month start at 0 instead of 1 so we have to make some adjustments to the formatting
                    if (dd < 10) {
                        dd = '0' + dd
                    }

                    if (mm < 10) {
                        mm = '0' + mm
                    }

                    today = mm + '/' + dd + '/' + yyyy;
                    return today;
                }; // end currentDate()
                $scope.toggleFilterSwitch = function () {
                    $('.filter-results').toggle('slow');
                    $('#icon-toggler').find('img').toggle('fast');
                };
            }) // end document.ready()
        

}]); // end inventoryController