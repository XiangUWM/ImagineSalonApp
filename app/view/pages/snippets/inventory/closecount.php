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
                    <h4 class="modal-title">Opening Inventory Count</h4>
                </div>
                <!--  /.modal-header  -->
                <!--  Modal Body  -->
                <div class="modal-body">

                    <form name="close_count_add" id="close_count_form" onsubmit="addToOpenCount()">
                        <!--  Form group with column width of 7  -->
                        <!--  NOTE: Max width of any line is 12 columns. If columns add up to more than 12, the overflowing objects will appear on the next line. -->

                        <div class="form-group col-lg-7">
                            <!--   Input and label for UPC/Product Number  -->
                            <label class="control-label" for="closeUPCInput">Enter UPC Code OR Product Number</label>
                            <input class="form-control" id="closeUPCInput" name="close-product-code-or-number" type="text" placeholder="Ex. '012345678910' or '92'">
                        </div>

                        <!--  Form group with column width of 3  -->
                        <div class="form-group col-lg-3">
                            <!--  Input and label for Quantity Number  -->
                            <label class="control-label" for="closeQuantityInput">Enter Quantity</label>
                            <input class="form-control" id="closeQuantityInput" name="close-product-quantity" type="text" placeholder="Ex. '3'">
                        </div>

                        <br>

                        <!--  'Add' Button has a column width of 2  -->
                        <button type="button" name="submit" style="margin-top:3px" type="submit" class="btn btn-primary" id="addOpenCountRow" onclick="addToOpenCount()" form="close_count_add">Add</button>
                    </form>

                </div>
                <!--  /.modal-body  -->
                <p id="closeCountProductAddedText" style="padding-right:3%; float:right">This is text.</p>
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
                        <tbody id="close-count-tbody">
                            <?php runCount('close'); ?>
                        </tbody>
                    </table>
                    <input id="url_hash" type="hidden" name="url_hash" hidden="true" />
                    <!--  Close Modal or Save Changes  -->
                    <button type="button" class="btn btn-default" ng-click="toggleModal('#close-count')" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary" onclick="saveOpenCount()" type="submit">Save changes</button>

                </div>
                <!-- /.modal-footer -->
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
    <!-- /.modal -->
    <script>
        var hash = "q!";
        var addToOpenCount = function () {
            var $product = $("#closeUPCInput").val();
            var $quantity = $("#closeQuantityInput").val();
            if ($product.length > 3) {
                var $product = findProductIDFromUPC($product);
            }
                var params = {
                    product_id: $product,
                    quantity: $quantity
                };
                var query = jQuery.param(params);
                console.log("product query: ", query);
                hash = hash + query + "&";
                console.log("addToOpenCount: ", hash);
                $("#url_hash").val(hash);
                $("#close-count").show();
                $("#closeCountProductAddedText").text($quantity + " unit(s) of item #" + $product + " have been added.");
                addProductToOpenCountTable($product, $quantity);
            }
        
        var saveOpenCount = function () {
            $href = $("#url_hash").val();
            window.location.search = $href;
            console.log("variable: ", $href);
            console.log("href: ", $href);
            hash = "q!";

        }
        var addProductToOpenCountTable = function ($product, $quantity) {
            $(document).ready(function () {
                $id = document.getElementById("inventory-row_" + $product).children[0].innerHTML;
                $brand = document.getElementById("inventory-row_" + $product).children[1].innerHTML;
                $name = document.getElementById("inventory-row_" + $product).children[2].innerHTML;
                $size = document.getElementById("inventory-row_" + $product).children[4].innerHTML;

                $closeCountTbody = $('#close-count-tbody');
                $tr = $('<tr></tr>');
                $id_td = $('<td>' + $id + '</td>');
                $brand_td = $('<td>' + $brand + '</td>');
                $product_td = $('<td>' + $name + ' ' + $size + '</td>');
                $quantity_td = $('<td>' + $quantity + '</td>');
                $tr.append($id_td).append($brand_td).append($product_td).append($quantity_td);
                $closeCountTbody.append($tr);
            });
        }
        var findProductIDFromUPC = function ($product) {
            var $id = $("td:contains("+$product+")").parent().children()[0].innerHTML;
            console.log($id);
            return $id;
            
        };
    </script>