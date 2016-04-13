<!-- Require Snippets (modal popups) -->
<?php
$snippet_paths = '../snippets/inventory/audit.php';
if (file_exists($snippet_paths)) {
    require($snippet_paths);
    echo '<script>console.log("Inventory snippets are found");</script>';
} else {
        echo '<script>console.log("Inventory snippets are not found");</script>';
}
?>
<!--  Require Inventory model (SQL queries) -->

<div id="appendFilterResults"></div>
        <!-- Inventory Form Container with Bootswatch Theme Class 'Jumbotron'-->
        <div class="jumbotron" id="inventory-form-container">

            <!-- Modal Popup Buttons 
              - When clicked, they activate an AngularJs function specified in apps/view/js/controllers/inventory.js -->
            <content>
                <h4 class="inventory-form-headers">Daily Activities</h4>
                <a ng-click="toggleModal('#open-count')" class="btn btn-default btn-sm">Opening Count</a>
                <a ng-click="toggleModal('#close-count')" class="btn btn-default btn-sm">Closing Count</a>
                <a ng-click="toggleModal('#daily-report')" class="btn btn-default btn-sm">Today's Report</a>
            </content>
            <content>
                <h4 class="inventory-form-headers">Reports</h4>
                <a ng-click="toggleModal('#daily-reports')" class="btn btn-default btn-sm">View Daily Reports</a>
                <a ng-click="toggleModal('#status-report')" class="btn btn-default btn-sm">View Product Status</a>
                <a ng-click="toggleModal('#audit-reports')" class="btn btn-default btn-sm">View Audit Reports</a>
            </content>
            <content>
                <h4 class="inventory-form-headers">Auditing</h4>
                <a ng-click="toggleModal('#perform-audit')" class="btn btn-default btn-sm">Perform Audit</a>
                <a ng-click="toggleModal('#current-audit')" class="btn btn-default btn-sm">Current Audit Report</a>
                <a ng-click="toggleModal('#update-products')" class="btn btn-default btn-sm">Update Product List</a>
            </content>
        </div>

        <!-- Fielded Search -->
        <form name="inventory-form" id="inventory-form" action="#/inventory/:filterResults">
            <fieldset id="inventory-filter">

                <!-- Legend & Filter form toggle switch - Span tag holds two icon images that are toggled which is called in view/js/controllers/inventory.js as 'toggleFilterSwitch()' -->
                <legend>Filter Results 
                    <span id="icon-toggler" ng-click="toggleFilterSwitch()"> 
                        <img src="app/view/img/icons/toggle_on-icon.png"/>
                        <img src="app/view/img/icons/toggle_off-icon.png" style="display:none"/>
                    </span>
                </legend>
                <br>
                <div class="form-group filter-results">
                    <label for="select" class="control-label">Brands</label>
                    <select class="form-control" name="brands" id="select">
                        <option value="brand">All</option>
                        <option value="'Goldwell'">Goldwell</option>
                        <option value="'Morgan Taylor Polish'">Morgan Taylor Polish</option>
                        <option value="'Moroccan'">Moroccan</option>
                        <option value="'Unite'">Unite</option>
                    </select>
                </div>
                <div class="form-group filter-results">
                    <label for="select" class="control-label">Vendors</label>
                    <select class="form-control" name="vendors" id="select">
                        <option value="product.vendor_id">All</option>
                        <option value="1000">Premier Beauty Systems</option>
                        <option value="2000">Beauty Craft</option>
                        <option value="3000">National Salon Services</option>
                    </select>
                </div>
                <div class="form-group filter-results">
                    <label for="select" class="control-label">Status</label>
                    <select class="form-control" name="status" id="select">
                        <option value="status_code">All</option>
                        <option value="400">In-Stock</option>
                        <option value="300">Ordered</option>
                        <option value="500">Out-of-Stock</option>
                        <option value="600">Shipped</option>
                    </select>
                </div>
                <div class="form-group filter-results">
                    <label for="select" class="control-label">Categories</label>
                    <select class="form-control" name="categories" id="select">
                        <option value="category">All</option>
                        <option value="'Shampoo'">Shampoo</option>
                        <option value="'Conditioner'">Conditioner</option>
                        <option value="'Styling Aid'">Styling Aid</option>
                        <option value="'Mousse'">Mousse</option>
                        <option value="'Hairspray'">Hairspray</option>
                        <option value="'Nail Polish'">Nail Polish</option>
                        <option value="'Git Bag'">Gift Bag</option>
                    </select>
                </div>
                <div class="form-group filter-results">
                    <label for="select" class="control-label">Wholesale Cost</label>
                    <select class="form-control" name="wholesaleCost" id="select">
                        <option value="IS NOT NULL">All</option>
                        <option value="BETWEEN 0 and 9.99">$0-$9.99</option>
                        <option value="BETWEEN 10 and 14.99">$10-$14.99</option>
                        <option value="BETWEEN 15 and 19.99">$15-$19.99</option>
                        <option value="BETWEEN 20 and 24.99">$20-24.99</option>
                        <option value="BETWEEN 25 and 29.99">$25-$29.99</option>
                        <option value=">29.99">$30+</option>
                    </select>
                </div>
                <div class="form-group filter-results">
                    <label for="select" class="control-label">Retail Price</label>
                    <select class="form-control" name="retailPrice" id="select">
                        <option value="IS NOT NULL">All</option>
                        <option value="BETWEEN 0 and 9.99">$0-$9.99</option>
                        <option value="BETWEEN 10 and 14.99">$10-$14.99</option>
                        <option value="BETWEEN 15 and 19.99">$15-$19.99</option>
                        <option value="BETWEEN 20 and 24.99">$20-$24.99</option>
                        <option value="BETWEEN 25 and 29.99">$25-$29.99</option>
                        <option value="BETWEEN 30 and 39.99">$30-$39.99</option>
                        <option value="BETWEEN 40 and 49.99">$40-$49.99</option>
                        <option value="BETWEEN 50 and 59.99">$50-$59.99</option>
                        <option value="> 59.99">$60+</option>
                    </select>
                </div>
                <div class="form-group filter-results">
                    <label class="control-label" for="search-inventory">Search inventory</label>
                    <input class="form-control" name="search" id="search-inventory" type="text" placeholder="Search" onclick="$(this).val('')">
                </div>
                <div class="form-group filter-results">
                    <input class="btn btn-success" id="inventory-form-submit" ng-click="appendFilterResults()" type="submit" placeholder="submit"/></div>
            </fieldset>
        </form>
        <!-- Product list -->
        <table class="table table-striped table-hover">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Brand</th>
                    <th>Name</th>
                    <th>Vendor</th>
                    <th>Size</th>
                    <th>Wholesale Cost</th>
                    <th>Retail Price</th>
                    <th>Quantity</th>
                    <th>UPC</th>
                </tr>
            </thead>
            <tbody id="inventory-tbody">
                <?php
                    $http_referer = $_SERVER['HTTP_REFERER'];
                    $needle = '?brand';
                    $haystack = $http_referer;
                    if(strrpos($haystack, $needle) >= 1){
                        getQuery();
                    } else
                        echo '<script>console.log("Getting full inventory...")</script>';
                        getInventory(null); ?>
            </tbody>
        </table>
