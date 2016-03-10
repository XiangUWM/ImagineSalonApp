<div class="modal" id="daily-report" style="display:none; position: absolute; z-index:1000">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" ng-click="dailyReport()" aria-hidden="true">x</button>
                <h4 class="modal-title">Daily Inventory Report for {{ currentDate() }} </h4>
            </div>
            <div class="modal-body">
                <table class="table table-striped table-hover ">
                    <thead>
                        <tr>
                            <th>Product In</th>
                            <th>Cost</th>
                            <th>Product Out</th>
                            <th>Total Price</th>
                            <th>Revenue</th>
                        </tr>
                    </thead>
                    <tbody>
                        <td>10 items</td>
                        <td>$87.23</td>
                        <td>5 items</td>
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
                    </tbody>
                </table>
                <hr>
                <div class="panel panel-danger">
                    <div class="panel-heading">
                        <h3 class="panel-title">Warning! Item missing!</h3>
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

                </div>
                <button type="button" class="btn btn-default" ng-click="dailyReport()" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>