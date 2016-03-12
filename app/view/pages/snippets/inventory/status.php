<!--  Product Status Report  -->

<!--  Popup Modal (hidden, overlapping)  -->
<div class="modal" id="status-report" style="display:none; position: absolute; z-index:1000">
    <div class="modal-dialog">
        <div class="modal-content">
            <!--  Modal Header with closing icon  -->
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" ng-click="statusReport()" aria-hidden="true">x</button>
                <!--  NOTE: When user clicks close, ng-click calls the statusReport() function will be called from inventoryController located in app/view/js/controllers/inventory.js which is specified in the AngularJs RouteProvider in the config/routes/routes.js file.  -->

                <!--  Modal title  -->
                <h4 class="modal-title">Product Status Report</h4>
            </div>
            <!--  /.modal-header  -->

            <!--  Modal Body  -->
            <div class="modal-body">
                <form class="form-horizontal">
                    <fieldset>
                        <legend>Legend</legend>
                        <div class="form-group">
                            <label for="select" class="col-lg-2 control-label">Status</label>
                            <select multiple="" style="" class="form-control">
                                <option>All</option>
                                <option>In-Stock</option>
                                <option>Ordered</option>
                                <option>Out-of-Stock</option>
                                <option>Shipped</option>
                                <option>Unavailable</option>
                            </select>
                        </div>
                    </fieldset>
                </form>
            </div>
            <!--  /.modal-body  -->

            <!--  Modal Footer  -->
            <div class="modal-footer">
                <table class="table table-striped table-hover">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Brand</th>
                            <th>Name</th>
                            <th>Vendor</th>
                            <th>Size</th>
                            <th>Quantity</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- Call SQL query from databse instance in model to load data -->
                        <tr class="danger">
                            <td>18</td>
                            <td>Goldwell</td>
                            <td>Full Rebel</td>
                            <td>Premier Beauty Systems</td>
                            <td>3 oz</td>
                            <td>-1</td>
                            <td>Unavailable</td>
                        </tr>
                        <tr class="info">
                            <td>10</td>
                            <td>Goldwell</td>
                            <td>Mellogoo</td>
                            <td>Premier Beauty Systems</td>
                            <td>3 oz</td>
                            <td>4</td>
                            <td>Ordered</td>
                        </tr>
                        <tr class="success">
                            <td>11</td>
                            <td>Goldwell</td>
                            <td>Sprayer Hair Sprayer</td>
                            <td>Premier Beauty Systems</td>
                            <td>8 oz</td>
                            <td>0</td>
                            <td>Shipped</td>
                        </tr>
                    </tbody>
                </table>
                <!--  Close Modal or Save Changes  -->
                <button type="button" class="btn btn-default" ng-click="statusReport()" data-dismiss="modal">Close</button>
                <!--                <button type="button" class="btn btn-primary">Save changes</button>-->
            </div>
            <!-- /.modal-footer -->
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->