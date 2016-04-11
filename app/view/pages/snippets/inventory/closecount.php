<!--  Closing Inventory Count Form  -->
<?php require('../snippets/inventory/opencount.php'); ?>
<!--  Popup Modal (hidden, overlapping)  -->
<div class="modal" id="close-count" style="display:none; position: absolute; z-index:1000">
    <div class="modal-dialog">
        <div class="modal-content">
            <!--  Modal Header with closing icon  -->
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" ng-click="toggleModal('#close-count')" aria-hidden="true">x</button>
                <!--  NOTE: When user clicks close, ng-click calls the closeCount() function will be called from inventoryController located in app/view/js/controllers/inventory.js which is specified in the AngularJs RouteProvider in the config/routes/routes.js file.  -->

                <!--  Modal title  -->
                <h4 class="modal-title">Closing Inventory Count</h4>
            </div>
            <!--  /.modal-header  -->

            <!--  Modal Body  -->
            <div class="modal-body">

                <!--  Form group with column width of 7  -->
                <!--  NOTE: Max width of any line is 12 columns. If columns add up to more than 12, the overflowing objects will appear on the next line. -->

                <div class="form-group col-lg-7">
                    <!--   Input and label for UPC/Product Number  -->
                    <label class="control-label" for="closeUPCInput">Enter UPC Code OR Product Number</label>
                    <input class="form-control" id="closeUPCInput" type="text" value="Ex. '012345678910' or '92'">
                </div>

                <!--  Form group with column width of 3  -->
                <div class="form-group col-lg-3">
                    <!--  Input and label for Quantity Number  -->
                    <label class="control-label" for="closeQuantityInput">Enter Quantity</label>
                    <input class="form-control" id="closeQuantityInput" type="text" value="Ex. '3'">
                </div>

                <br>

                <!--  'Add' Button has a column width of 2  -->
                <button type="button" style="margin-top:3px" class="btn btn-primary">Add</button>
            </div>
            <!--  /.modal-body  -->

            <!--  Modal Footer  -->
            <div class="modal-footer">
                <!--  Table Output  -->
                <table class="table table-striped table-hover ">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Brand</th>
                            <th>Product</th>
                            <th>Quantity</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!--  Imaginary data not pulled from the Database. Query results will be shown here. -->
                        <tr>
                            <td>1</td>
                            <td>Goldwell</td>
                            <td>Kerasilk Rich Shampoo 8 oz</td>
                            <td>4</td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Goldwell</td>
                            <td>Kerasilk Rich Conditioner 8 oz</td>
                            <td>2</td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>Goldwell</td>
                            <td>Kerasilk Ultra Rich Shampoo 8 oz</td>
                            <td>3</td>
                        </tr>
                        <tr>
                            <td>4</td>
                            <td>Goldwell</td>
                            <td>Kerasilk Ultra Rich Conditioner 8 oz</td>
                            <td>1</td>
                        </tr>
                        <tr>
                            <td>5</td>
                            <td>Goldwell</td>
                            <td>Sleek Perfection 5 oz</td>
                            <td>2</td>
                        </tr>
                        <tr>
                            <td>6</td>
                            <td>Goldwell</td>
                            <td>Hot Form 3 oz</td>
                            <td>2</td>
                        </tr>
                        <tr>
                            <td>7</td>
                            <td>Goldwell</td>
                            <td>Flat Marvel 2 oz</td>
                            <td>1</td>
                        </tr>
                        <!--  End imaginary data  -->
                    </tbody>
                </table>

                <!--  Close Modal or Save Changes  -->
                <button type="button" class="btn btn-default" ng-click="toggleModal('#close-count')" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
            <!-- /.modal-footer -->
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->