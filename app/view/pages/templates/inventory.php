<!-- Require Snippets (modal popups) -->
<?php 
require('../snippets/inventory/opencount.php');
require('../snippets/inventory/closecount.php'); 
require('../snippets/inventory/dailyreport.php');
require('../snippets/inventory/dailyreports.php'); 
require('../snippets/inventory/status.php'); 
require('../snippets/inventory/audit.php');

?>

    <!--  Require Inventory model (SQL queries) -->
    <?php
$db_path = '../../../model/inventory.php';
if (file_exists($db_path)) {
    require($db_path);
    echo '<script>console.log("query is found");</script>';
} else {
        echo '<script>console.log("query is not found");</script>';
}
?>
        <!-- Inventory Form Container with Bootswatch Theme Class 'Jumbotron'-->
        <div class="jumbotron" id="inventory-form-container">

            <!-- Modal Popup Buttons 
              - When clicked, they activate an AngularJs function specified in apps/view/js/controllers/inventory.js -->
            <content>
                <h4 class="inventory-form-headers">Daily Activities</h4>
                <a ng-click="openCount()" class="btn btn-default btn-sm">Opening Count</a>
                <a ng-click="closeCount()" class="btn btn-default btn-sm">Closing Count</a>
                <a ng-click="dailyReport()" class="btn btn-default btn-sm">Today's Report</a>
            </content>
            <content>
                <h4 class="inventory-form-headers">Reports</h4>
                <a ng-click="dailyReports()" class="btn btn-default btn-sm">View Daily Reports</a>
                <a ng-click="statusReport()" class="btn btn-default btn-sm">View Product Status</a>
                <a ng-click="performAudit()" class="btn btn-default btn-sm">View Audit Reports</a>
            </content>
            <content>
                <h4 class="inventory-form-headers">Auditing</h4>
                <a ng-click="performAudit()" class="btn btn-default btn-sm">Perform Audit</a>
                <a ng-click="currentAudit()" class="btn btn-default btn-sm">Current Audit Report</a>
                <a ng-click="updateProducts()" class="btn btn-default btn-sm">Update Product List</a>
            </content>
        </div>

        <!-- Fielded Search -->
        <form name="inventory-form" id="inventory-form" class="">
            <fieldset id="inventory-filter">

                <!-- Legend & Filter form toggle switch - Span tag holds two icon images that are toggled which is called in view/js/controllers/inventory.js as 'toggleFilterSwitch()' -->
                <legend>Filter Results <span id="icon-toggler" ng-click="toggleFilterSwitch()"> <img src="app/view/img/icons/toggle_on-icon.png"/><img src="app/view/img/icons/toggle_off-icon.png" style="display:none"/></span></legend>
                <br>
                <div class="form-group filter-results">
                    <label for="select" class="control-label">Brands</label>
                    <select class="form-control" id="select">
                        <option>All</option>
                        <option>Goldwell</option>
                        <option>Morgan Taylor Polish</option>
                        <option>Moroccin</option>
                        <option>Unite</option>
                    </select>
                </div>
                <div class="form-group filter-results">
                    <label for="select" class="control-label">Vendors</label>
                    <select class="form-control" id="select">
                        <option>All</option>
                        <option>Premier Beauty Systems</option>
                        <option>Beauty Craft</option>
                        <option>National Salon Services</option>
                    </select>
                </div>
                <div class="form-group filter-results">
                    <label for="select" class="control-label">Status</label>
                    <select class="form-control" id="select">
                        <option>All</option>
                        <option>In-Stock</option>
                        <option>Ordered</option>
                        <option>Out-of-Stock</option>
                        <option>Shipped</option>
                    </select>
                </div>
                <div class="form-group filter-results">
                    <label for="select" class="control-label">Categories</label>
                    <select class="form-control" id="select">
                        <option>All</option>
                        <option>Shampoo</option>
                        <option>Conditioner</option>
                        <option>Styling Aid</option>
                        <option>Mousse</option>
                        <option>Hairspray</option>
                        <option>Nail Polish</option>
                        <option>Gift Bag</option>
                    </select>
                </div>
                <div class="form-group filter-results">
                    <label for="select" class="control-label">Wholesale Cost</label>
                    <select class="form-control" id="select">
                        <option>All</option>
                        <option>$0 - $9.99</option>
                        <option>$10-$14.99</option>
                        <option>$15-$19.99</option>
                        <option>$20-24.99</option>
                        <option>$25-$29.99</option>
                        <option>$30+</option>
                    </select>
                </div>
                <div class="form-group filter-results">
                    <label for="select" class="control-label">Retail Price</label>
                    <select class="form-control" id="select">
                        <option>All</option>
                        <option>$0 - $9.99</option>
                        <option>$10-$14.99</option>
                        <option>$15-$19.99</option>
                        <option>$20-$24.99</option>
                        <option>$25-$29.99</option>
                        <option>$30-$39.99</option>
                        <option>$40-$49.99</option>
                        <option>$50-$59.99</option>
                        <option>$60+</option>
                    </select>
                </div>
                <div class="form-group filter-results">
                    <label class="control-label" for="search-inventory">Search inventory</label>
                    <input class="form-control" id="search-inventory" type="text" value="Search">
                </div>
            </fieldset>
        </form>
        <!-- Product list -->
        <table class="table table-striped table-hover ">
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
            <tbody>
                <!-- Call SQL query from databse instance in model to load data -->
                <?php getInventory(); ?>
            </tbody>
        </table>