<!--  Opening Inventory Count Form  -->
<?php require('../snippets/inventory/dailyreport.php');?>


    <!--  Popup Modal (hidden, overlapping)  -->
    <div class="modal" id="update-count" style="display:none; position: absolute; z-index:1000">
        <div class="modal-dialog">
            <div class="modal-content">
                <!--  Modal Header with closing icon  -->
                <div class="modal-header" id="update-header">
                    <button type="button" class="close" data-dismiss="modal" ng-click="toggleModal('#update-count')" aria-hidden="true">x</button>
                    <!--  NOTE: When user clicks close, ng-click calls the updateCount() function will be called from inventoryController located in app/view/js/controllers/inventory.js which is specified in the AngularJs RouteProvider in the config/routes/routes.js file.  -->

                    <!--  Modal title  -->
                    <h4 class="modal-title">Update Inventory</h4>
                </div>
                <!--  /.modal-header  -->
                <!--  Modal Body  -->
                <div class="modal-body">

                    <ul class="nav nav-pills" id="update-inventory-menu">
                        <li class="active update-menu-tab"><a>Remove Products</a></li>
                        <li class="update-menu-tab"><a>Create Orders</a></li>
                        <li class="update-menu-tab"><a>Update Shipments</a></li>
                        <li class="dropdown">
                            <a class="dropdown-toggle" data-toggle="dropdown">Order Status<span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li class="update-menu-tab"><a>Pending Orders</a></li>
                                <li class="update-menu-tab"><a>Active Orders</a></li>
                                <li class="update-menu-tab"><a>Shipped Orders</a></li>
                                <li class="update-menu-tab"><a>Accepted Orders</a></li>
                                <li class="divider"></li>
                                <li class="update-menu-tab"><a>All Orders</a></li>
                            </ul>
                        </li>
                    </ul>
                    <div>
                        <h3 id="update-inventory-header"></h3>
                        <div id="update-inventory-body"></div>
                        <p class="text-danger" hidden="true">Please enter a valid UPC or Product ID.</p>
                        <input id="update_url_hash" type="hidden" name="url_hash" hidden="true" />

                        <div id="remove-products-div">
                            <table>
                                <thead>
                                    <tr>
                                        <th class="col-lg-6">UPC OR Product Number</th>
                                        <th class="col-lg-3">Quantity</th>
                                        <th class="col-lg-2">Reason</th>
                                        <th class="col-lg-1"></th>
                                    </tr>
                                </thead>
                                <tbody id="remove-product-tbody">
                                    <tr>
                                        <td class="col-lg-6">
                                            <input class="form-control" id="updateUPCInput" name="update-product-code-or-number" type="text" placeholder="Ex. '012345678910' or '92'" ng-model="updateProductId">
                                        </td>
                                        <td class="col-lg-3">
                                            <input class="form-control" id="updateQuantityInput" name="update-product-quantity" type="text" placeholder="Ex. '3'" ng-model="updateQuantity">
                                        </td>
                                        <td class="col-lg-2">
                                            <div class="radio">
                                                <label>
                                                    <input type="radio" name="optionsRadios" value="Sold" ng-model="updateReason" checked="" required> Sold
                                                </label>
                                            </div>
                                            <div class="radio">
                                                <label>
                                                    <input type="radio" name="optionsRadios" value="Missing" ng-model="updateReason" required> Missing
                                                </label>
                                            </div>
                                            <div class="radio">
                                                <label>
                                                    <input type="radio" name="optionsRadios" value="Damaged" checked="" ng-model="updateReason" required> Damaged
                                                </label>
                                            </div>
                                        </td>
                                        <td class="col-lg-1">
                                            <button type="button" class="btn btn-success add-line-btn" ng-click="addNewLine(); makeRemovedProductsList()" data-dismiss="modal">+</button>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div id="create-orders-div" hidden="true">
                            <fieldset class="jumbotron">
                                <div class="form-group col-lg-4">
                                    <label for="select" class="control-label">Date of order</label>
                                    <input type="date" class="form-control input-sm">
                                </div>
                                <div class="form-group col-lg-4">
                                    <label for="select" class="control-label">Date order ships</label>
                                    <input type="date" class="form-control input-sm">
                                </div>
                                <div class="form-group col-lg-4">
                                    <label for="select" class="control-label">Expected arrival</label>
                                    <input type="date" class="form-control input-sm">
                                </div>
                                <div class="form-group col-lg-6">
                                    <label for="select" class="control-label">Choose a vendor</label>
                                    <select class="form-control input-sm" name="vendors" id="select_order_vendor">
                                        <option value="product.vendor_id">All</option>
                                        <option value="1000">Premier Beauty Systems</option>
                                        <option value="2000">Beauty Craft</option>
                                        <option value="3000">National Salon Services</option>
                                    </select>
                                    <br>
                                    <button class="btn btn-success col-lg-8 col-lg-offset-2">Make Order</button>
                                </div>
                                <div class="form-group col-lg-6">
                                    <label for="select" class="control-label">Select product(s)</label>
                                    <select multiple="" class="form-control">
                                        <option>1 Product</option>
                                        <option>2 Product</option>
                                        <option>3 Product</option>
                                        <option>4 Product</option>
                                        <option>5 Product</option>
                                    </select>
                                </div>

                            </fieldset>
                            <p id="order-confirmation"></p>
                        </div>
                        <div id="update-shipments-div" hidden="true">
                            <div class="form-group col-lg-6">
                                <label for="select" class="control-label">Select Order(s)</label>
                                <select multiple="" class="form-control">
                                    <option>1 Product</option>
                                    <option>2 Product</option>
                                    <option>3 Product</option>
                                    <option>4 Product</option>
                                    <option>5 Product</option>
                                </select>
                            </div>
                            <div class="form-group col-lg-6">
                                <label style="text-align:center" class="control-label" style="text-align:center">Order Status
                                <div class="checkbox col-lg-10 col-lg-offset-1">
                                    <label class="control-label">
                                        <input type="checkbox"> Shipped
                                    </label>
                                    <input type="date" class="form-control input-sm">
                                </div>
                                <div class="checkbox col-lg-10 col-lg-offset-1">
                                    <label class="control-label">
                                        <input type="checkbox"> Accepted
                                    </label>
                                    <input type="date" class="form-control input-sm">
                                    </label>
                                </div>
                                </label>
                            </div>
                        </div>
                    <div id="update-shipments-div" hidden="true">
                        
                    </div>
                    </div>
                    <!--  /.modal-body  -->

                    <!--  Modal Footer  -->
                    <div class="modal-footer">

                        <!--  Close Modal or Save Changes  -->
                        <button type="button" class="btn btn-default" ng-click="toggleModal('#update-count')" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-danger" ng-click="clearChangesToInventory('remove-product')" data-dismiss="modal">Clear</button>
                        <button type="button" class="btn btn-primary" ng-click="applyChangesToInventory()" type="submit">Save changes</button>

                    </div>
                    <!-- /.modal-footer -->
                </div>
                <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
        </div>
        <!-- /.modal -->
        <script>
        </script>