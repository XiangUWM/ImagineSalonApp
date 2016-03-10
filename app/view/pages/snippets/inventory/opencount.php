<div class="modal" id="open-count" style="display:none; position: absolute; z-index:1000">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" ng-click="openCount()" aria-hidden="true">x</button>
                <h4 class="modal-title">Opening Inventory Count</h4>
            </div>
            <div class="modal-body">
                <div class="form-group col-lg-7">
                    <label class="control-label" for="focusedInput">Enter UPC Code OR Product Number</label>
                    <input class="form-control" id="focusedInput" type="text" value="Ex. '012345678910' or '92'">
                </div>
                <div class="form-group col-lg-3">
                    <label class="control-label" for="focusedInput">Enter Quantity</label>
                    <input class="form-control" id="focusedInput" type="text" value="Ex. '3'">
                </div>
                <br>
                <button type="button" style="margin-top:3px" class="btn btn-primary">Add</button>
            </div>
            <div class="modal-footer">
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
                <button type="button" class="btn btn-default" ng-click="openCount()" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
            <!-- /.modal-footer -->
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->