<!--
1. Physical Inventory Count
2. Reconcile Inventory Issues
3. Assess High-Value Products
4. Product Trends
5. Retail Adjustment
-->
<div class="modal" id="perform-audit" ng-controller="auditTabController">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">

                <button type="button" class="close" data-dismiss="modal" ng-click="performAudit()" aria-hidden="true">x</button>
                <h4 class="modal-title">Perform an Audit</h4>
            </div>
            <div class="modal-body">
                <p>Audit Progress</p>
                <div class="progress progress-striped">
                    <div class="progress-bar progress-bar-success"></div>
                </div>
                <ul class="navs nav nav-pills">
                    <li class="active perform-count"><a>Perform Count</a></li>
                    <li class="reconcile-inventory"><a>Reconcile Inventory</a></li>
                    <li class="assess-products"><a>Assess Products</a></li>
                    <li class="adjust-retail"><a>Adjust Retail</a></li>
                </ul>
                <h3 id="audit-step">Step 1</h3>

                <div class="fieldset-toggle">
                    <div class="jumbotron">
                        <fieldset class="modal-fieldset perform-count">
                            <legend>
                                <p>Perform a complete inventory count</p>
                            </legend>
                            <div class="form-group col-lg-7">
                                <!--   Input and label for UPC/Product Number  -->
                                <label class="control-label" for="auditUPCInput">Enter UPC Code OR Product Number</label>
                                <input class="form-control" id="auditUPCInput" type="text" value="Ex. '012345678910' or '92'">
                            </div>

                            <!--  Form group with column width of 3  -->
                            <div class="form-group col-lg-3">
                                <!--  Input and label for Quantity Number  -->
                                <label class="control-label" for="auditQuantityInput">Enter Quantity</label>
                                <input class="form-control" id="auditQuantityInput" type="text" value="Ex. '3'">
                            </div>

                            <br>

                            <!--  'Add' Button has a column width of 2  -->
                            <button type="button" style="margin-top:3px" class="btn btn-primary">Add</button>
                            <br>
                            <hr>
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
                        </fieldset>

                    </div>
                    <div class="jumbotron">
                        <fieldset class="modal-fieldset reconcile-inventory">

                            <legend>
                                <p>Compare inconsistencies in the inventory</p>
                            </legend>
                            <div>
                                <div class="panel panel-info">
                                    <div class="panel-heading">
                                        <h3 class="panel-title">Stock Errors</h3>
                                    </div>
                                    <div class="panel-body">
                                        <table class="table table-striped table-hover ">
                                            <thhead>
                                                <th>#</th>
                                                <th>Product Name</th>
                                                <th>Product Size</th>
                                                <th>Last Known Quantity</th>
                                                <th>Audit Quantity</th>
                                                <th>Correct Quantity</th>
                                            </thhead>
                                            <tbody>
                                                <tr>
                                                    <td>27</td>
                                                    <td>Unite Moisturizing Shampoo</td>
                                                    <td>1 liter</td>
                                                    <td>5</td>
                                                    <td>4</td>
                                                    <td>
                                                        <div class="form-group">
                                                            <input class="form-control input-sm" type="text" id="inputSmall">
                                                        </div>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </fieldset>
                    </div>
                    <div class="jumbotron">
                        <fieldset class="modal-fieldset assess-products">
                            <legend>
                                <p>Analyze product trends and adust inventory</p>
                            </legend>
                            <div id="assess-products-options">
                                <a href="#" class="btn btn-primary product-ranking">Product ranking</a>
                                <a href="#" class="btn btn-primary shipping-stats">Shipping statistics</a>
                                <a href="#" class="btn btn-primary stocking-stats">Stocking statistics</a>
                                <br>
                                <br>
                                <a href="#" class="btn btn-primary product-quantities">Product quantities</a>
                                <a href="#" class="btn btn-primary shrink-stats">Shrinkage statistics</a>
                                <a href="#" class="btn btn-primary shipping-freq">Shipping frequencies</a>
                            </div>
                            <hr>
                            <div id="assess-products-container">
                                <content class="product-ranking">
                                    <h4>Product Ranking</h4>
                                    <article>
                                        1. List of products in order of how many have been deducted from the inventory.
                                        <br> 2. List of products in order of how much each as sold.
                                        <br> 3. List of products in order of profit per volume (unit price). Include cost per oz.
                                        
                                        <br><br>Table
                                        <br>Header: #, Name Size, 
                                    </article>
                                </content>
                                <content class="shipping-stats">
                                    <h4>Shipping Statistics</h4>
                                    <article>
                                        1. Avg shipping cost per vendor
                                        <br> 2. Shipping costs per month
                                        <br> 3. Current shipping frequencies
                                        <br> 4. Shipping dates with product list.

                                    </article>
                                </content>
                                <content class="stocking-stats">
                                    <h4>Stocking Statistics</h4>
                                    <article>
                                        1. Min/Max/Avg time between statuses per vendor
                                        <br> 2. Avg time overall between statuses
                                        <br> 3. Avg time product sits on the shelf
                                    </article>
                                </content>
                                <content class="product-quantities">
                                    <h4>Product Quantities</h4>
                                    <article>
                                        1. Input values for minimum quantities
                                        <br> 2. Avg time overall between statuses
                                    </article>
                                </content>
                                <content class="shrink-stats">
                                    <h4>Shrinkage Statistics</h4>
                                    <article>
                                        1. Missing product list which includes cost and lost profits, organized by quantity
                                        <br> 2. Monthly shrink avg. and detail 
                                    </article>
                                </content>
                                <content class="shipping-freq">
                                    <h4>Shipping Frequencies</h4>
                                    <article>
                                        1. Input values for shipping frequency ('x times every y period')
                                        
                                    </article>
                                </content>
                            </div>
                        </fieldset>
                    </div>
                    <div class="jumbotron">
                        <fieldset class="modal-fieldset adjust-retail">
                            <legend>
                                <p>Make adjustments to retail pricing</p>
                                Input values for retail pricing.
                            </legend>
                        </fieldset>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" ng-click="performAudit()" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>
<script>
</script>