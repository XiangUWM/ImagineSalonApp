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
            $scope.toggleModal = function ($id) {
                $($id).toggle('slow');
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
            $scope.findProductFromUPC = function ($product) {
                var $id = $("td:contains(" + $product + ")").filter(function () {
                    return $(this).text() === $product
                });
                console.log($id['length']);
                if ($id['length'] == 0) {
                    console.log('null');
                    return null;
                } else {
                    console.log($id.parent().children()[2].innerHTML);
                    return $id.parent().children()[1].innerHTML + ' ' + $id.parent().children()[2].innerHTML;
                }

            };
            $scope.update_hash = "q=remove-products!";
            $scope.makeRemovedProductsList = function () {


                var $product = $scope.updateProductId;
                var $quantity = $scope.updateQuantity;
                var $reason = $scope.updateReason;
                var $sold_for = 0;
                var $removal = null;
                if ($reason == 'Sold') {
                    $sold_for = 100;
                }
                if ($reason == null) {
                    $reason = 'Not Recorded';
                }
                if ($product.length > 3) {
                    var $product = $scope.findProductIDFromUPC($product);
                }
                var params = {
                    removal: 'next',
                    product_id: $product,
                    quantity_removed: $quantity,
                    reason: $reason,
                    sold_for: $sold_for
                };
                var query = jQuery.param(params);
                console.log("Remove product query: ", query);
                $scope.update_hash = $scope.update_hash + query + "&";
                console.log("Remove from inventory: ", $scope.update_hash);
                $("#update_url_hash").val($scope.update_hash);

            };
            $scope.applyChangesToInventory = function () {
                var $href = $("#update_url_hash").val();
                window.location.search = $href;
                console.log("variable: ", $href);
                console.log("href: ", $href);
                $scope.update_hash = "q=remove-products!";




            };
            $scope.clearChangesToInventory = function($queryName) {
                $('#update-header').append('<div class="alert alert-dismissible alert-danger"><button type="button" class="close" data-dismiss="alert">x</button><strong>Wait!</strong> Are you sure you want to clear this data? <a style="float:right; padding-right:1%"><button type="button" class="btn btn-default btn-xs" data-dismiss="alert">No</button> <button id="confirm-cancel-update-btn" type="button" class="btn btn-success btn-xs" data-dismiss="alert">Yes</button></a></div>');
                $('#confirm-cancel-update-btn').click(function() {
                    $('.'+$queryName+'-display').remove(); 
                console.log('clear updates...');  
                $scope.update_hash = 'q='+$queryName+'!';
                    $('input').val('');
                });
                
            };
            $scope.findProductIDFromUPC = function ($product) {
                var $id = $("td:contains(" + $product + ")").parent().children()[0].innerHTML;
                console.log($id);
                return $id;

            };
            $scope.addSoldRow = function() {
                console.log("Sold For...");
            };
            $scope.updateSoldForValue = $("#update-sold-for-input-"+$scope.updateProductId).val();
            $scope.printMesg = function () {console.log('something.......');};
            $scope.addNewLine = function () {
                if ($scope.findProductFromUPC($scope.updateProductId) == null) {
                    $('.text-danger').show();
                } else {
                    $('.text-danger').hide();
                    if ($scope.updateReason != 'Sold') {
                        $('#remove-product-tbody').append('<tr class="remove-product-display"><td>' + $scope.findProductFromUPC($scope.updateProductId) + '</td><td> (Qty ' + $scope.updateQuantity + ') - ' + $scope.updateReason + '</td><td></td><td></td></tr>');
                    } else
                        $('#remove-product-tbody').append('<tr ng-controller="addSoldRow()" class="remove-product-display"><td>' + $scope.findProductFromUPC($scope.updateProductId) + '</td><td> (Qty ' + $scope.updateQuantity + ') - ' + $scope.updateReason + '</td><td><div class="input-group"><span class="input-group-addon input-sm">$</span><input type="text" id="update-sold-for-input-'+$scope.updateProductId+'" class="form-control input-sm" model="updateSoldFor"></td><td><button class="btn-default btn-sm btn" id="update_row_'+$scope.updateProductId+'">Update</button></td></tr>');
                }
            }
            $('.update-menu-tab').click(function () {
                $('.update-menu-tab').removeClass('active');
                $('.dropdown').removeClass('active');
                $(this).addClass('active');
                var $tab = $(this).text();
                var $updateBody = $('#update-inventory-body');
                if ($(this).parent().parent().hasClass('dropdown')) {
                    $(this).parent().parent().addClass('active');
                    $('#update-inventory-header').text($tab);
                }
                $('#update-inventory-header').text($tab);

                console.log('The Tab', $tab, 'is active.');
                if ($tab == 'Remove Products') {
                    $('#remove-products-div').show();
                    $('#create-orders-div').hide();
                    $('#update-shipments-div').hide();
                    $('#orders-div').hide();

                }
                if ($tab == 'Create Orders') {
                    $('#remove-products-div').hide();
                    $('#create-orders-div').show();
                    $('#update-shipments-div').hide();
                    $('#orders-div').hide();

                }
                if ($tab == 'Update Shipments') {
                    $('#remove-products-div').hide();
                    $('#create-orders-div').hide();
                    $('#update-shipments-div').show();
                    $('#orders-div').hide();

                }
                if ($tab == 'Pending Orders') {
                    $('#remove-products-div').hide();
                    $('#create-orders-div').hide();
                    $('#update-shipments-div').hide();
                    $('#orders-div').show();

                }
                if ($tab == 'Active Orders') {
                    $('#remove-products-div').hide();
                    $('#create-orders-div').hide();
                    $('#update-shipments-div').hide();
                    $('#orders-div').show();

                }
                if ($tab == 'Shipped Orders') {
                    $('#remove-products-div').hide();
                    $('#create-orders-div').hide();
                    $('#update-shipments-div').hide();
                    $('#orders-div').show();
                
                }
                if ($tab == 'All Orders') {
                    $('#remove-products-div').hide();
                    $('#create-orders-div').hide();
                    $('#update-shipments-div').hide();
                    $('#orders-div').show();
                }

            });

        });
        // end document.ready()


}]); // end inventoryController