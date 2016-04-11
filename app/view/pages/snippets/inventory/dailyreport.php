<!--  Daily Report Output Screen  -->
<?php require('../snippets/inventory/closecount.php'); ?>

<!--  Popup Modal (hidden, overlapping)  -->
<div class="modal" id="daily-report" style="display:none; position: absolute; z-index:1000">
    <div class="modal-dialog">
        <div class="modal-content">

            <!--  Modal Header with closing icon  -->
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" ng-click="toggleModal('#daily-report')" aria-hidden="true">x</button>
                <!--  NOTE: When user clicks close, ng-click calls the dailyReport() function will be called from inventoryController located in app/view/js/controllers/inventory.js which is specified in the AngularJs RouteProvider in the config/routes/routes.js file.  -->

                <!--  Modal title  -->
                <h4 class="modal-title">Daily Inventory Report for {{ currentDate() }} </h4>
            </div>

            <!--  Modal Body  -->
            <div class="modal-body">
                <!--  Output Data  -->
                <table class="table table-striped table-hover ">
                    <thead>
                        <tr>
                            <th>Product In</th>
                            <th>Product Out</th>
                            <th>Cost</th>
                            <th>Revenue</th>
                            <th>Profit</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!--  Imaginary Data not retrieved from the database  -->
                        <td>10 items</td>
                        <td>5 items</td>
                        <td>$87.23</td>
                        <td>$49.56</td>
                        <td>($37.67)</td>
                    </tbody>
                </table>
            </div>

            <h4 style="text-align:center">Changes</h4>
            <div class="modal-footer">
                <table class="table table-striped table-hover ">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Brand</th>
                            <th>Product</th>
                            <th>Quantity Changed</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!--  Imaginary data  -->
                        <tr>
                            <td>1</td>
                            <td>Goldwell</td>
                            <td>Kerasilk Rich Shampoo 8 oz</td>
                            <td>+4</td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Goldwell</td>
                            <td>Kerasilk Rich Conditioner 8 oz</td>
                            <td>-2</td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>Goldwell</td>
                            <td>Kerasilk Ultra Rich Shampoo 8 oz</td>
                            <td>+3</td>
                        </tr>
                        <tr>
                            <td>4</td>
                            <td>Goldwell</td>
                            <td>Kerasilk Ultra Rich Conditioner 8 oz</td>
                            <td>-1</td>
                        </tr>
                        <tr>
                            <td>5</td>
                            <td>Goldwell</td>
                            <td>Sleek Perfection 5 oz</td>
                            <td>+2</td>
                        </tr>
                        <tr>
                            <td>6</td>
                            <td>Goldwell</td>
                            <td>Hot Form 3 oz</td>
                            <td>-2</td>
                        </tr>
                        <tr>
                            <td>7</td>
                            <td>Goldwell</td>
                            <td>Flat Marvel 2 oz</td>
                            <td>+1</td>
                        </tr>
                        <!--  End imaginary data  -->
                    </tbody>
                </table>
                <hr>
                <!--  Toggle Div - Will show success panel if no product is missing, error panel if product is missing -->
                <div class="toggle-daily-report">

                    <!--  Success Panel  -->
                    <div class="panel panel-success">
                        <div class="panel-heading">
                            <h3 class="panel-title">Everything is OK!</h3>
                        </div>
                        <div class="panel-body">
                            <h4>No product status errors!</h4>
                        </div> <!-- /.panel-heading -->
                    </div> <!-- /.panel panel-success -->

                    <!--  Warning Panel  -->
                    <div class="panel panel-danger">
                        <div class="panel-heading">
                            <h3 class="panel-title">Warning! Item(s) missing!</h3>
                        </div>
                        <div class="panel-body">
                            <table class="table table-striped table-hover ">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Brand</th>
                                        <th>Name</th>
                                        <th>Vendor</th>
                                        <th>Size</th>
                                        <th>Quantity</th>
                                        <th>UPC</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <!-- Imaginary data -->
                                    <tr>
                                        <td>18</td>
                                        <td>Goldwell</td>
                                        <td>Full Rebel</td>
                                        <td>Premier Beauty Systems</td>
                                        <td>3 oz</td>
                                        <td>-1</td>
                                        <td>306597988121</td>
                                    </tr>
                                    <tr>
                                        <td>10</td>
                                        <td>Goldwell</td>
                                        <td>Mellogoo</td>
                                        <td>Premier Beauty Systems</td>
                                        <td>3 oz</td>
                                        <td>0</td>
                                        <td>798387357034</td>
                                    </tr>
                                    <tr>
                                        <td>11</td>
                                        <td>Goldwell</td>
                                        <td>Sprayer Hair Sprayer</td>
                                        <td>Premier Beauty Systems</td>
                                        <td>8 oz</td>
                                        <td>0</td>
                                        <td>791675744579</td>
                                    </tr>
                                </tbody>
                            </table>
                            <h4><b>Total Loss from Missing Items:</b> ($63.43)</h4>
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel panel-danger -->
                </div>
                <!-- /.toggle-div-daily-report -->
                <button type="button" class="btn btn-default" ng-click="dailyReport()" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Next</button>
            </div>
        </div>
    </div>
</div>