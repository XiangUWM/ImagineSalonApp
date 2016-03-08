<table class="table table-striped table-hover ">
    <div class="jumbotron" id="inventory-form-container">

        <content>
            <h4 class="inventory-form-headers">Daily Activities</h4>
            <a href="#" class="btn btn-default btn-sm">Opening Count</a>
            <a href="#" class="btn btn-default btn-sm">Closing Count</a>
            <a href="#" class="btn btn-default btn-sm">Today's Report</a>
        </content>
        <content>
            <h4 class="inventory-form-headers">Reports</h4>
            <a href="#" class="btn btn-default btn-sm">View Daily Reports</a>
            <a href="#" class="btn btn-default btn-sm">View Current Stock</a>
            <a href="#" class="btn btn-default btn-sm">View Audit Reports</a>
        </content>
        <content>
            <h4 class="inventory-form-headers">Auditing</h4>
            <a href="#" class="btn btn-default btn-sm">Perform Audit</a>
            <a href="#" class="btn btn-default btn-sm">Current Audit Report</a>
            <a href="#" class="btn btn-default btn-sm">Update Product List</a>
        </content>
    </div>
    <form name="inventory-form" id="inventory-form" class="jumbotron form-horizontal">
        <fieldset id="inventory-filter">

            <legend>Filter Results</legend>
            <div class="form-group">
                <label for="select" class="col-lg-2 control-label">Brands</label>
                <div class="col-lg-10">
                    <select class="form-control" id="select">
                        <option>All</option>
                        <option>Goldwell</option>
                        <option>Morgan Taylor Polish</option>
                        <option>Moroccin</option>
                        <option>Unite</option>
                    </select>
                </div>
                <div class="form-group">
                    <label class="control-label" for="search-inventory">Search inventory</label>
                    <input class="form-control" id="search-inventory" type="text" value="Search">
                </div>
        </fieldset>
    </form>

    <thead>
        <tr>
            <th>#</th>
            <th>Brand</th>
            <th>Name</th>
            <th>vendor</th>
            <th>Size</th>
            <th>Wholesale Cost</th>
            <th>Retail Price</th>
            <th>Quantity</th>
            <th>UPC</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>1</td>
            <th>Column heading</th>
            <th>Column heading</th>
            <th>Column heading</th>
            <th>Column heading</th>
            <th>Column heading</th>
            <th>Column heading</th>
            <th>Column heading</th>
            <th>Column heading</th>
        </tr>
        <tr>
            <td>2</td>
            <th>Column heading</th>
            <th>Column heading</th>
            <th>Column heading</th>
            <th>Column heading</th>
            <th>Column heading</th>
            <th>Column heading</th>
            <th>Column heading</th>
            <th>Column heading</th>
        </tr>
        <tr class="info">
            <td>3</td>
            <th>Column heading</th>
            <th>Column heading</th>
            <th>Column heading</th>
            <th>Column heading</th>
            <th>Column heading</th>
            <th>Column heading</th>
            <th>Column heading</th>
            <th>Column heading</th>
        </tr>
        <tr class="success">
            <td>4</td>
            <th>Column heading</th>
            <th>Column heading</th>
            <th>Column heading</th>
            <th>Column heading</th>
            <th>Column heading</th>
            <th>Column heading</th>
            <th>Column heading</th>
            <th>Column heading</th>
        </tr>
        <tr class="danger">
            <td>5</td>
            <th>Column heading</th>
            <th>Column heading</th>
            <th>Column heading</th>
            <th>Column heading</th>
            <th>Column heading</th>
            <th>Column heading</th>
            <th>Column heading</th>
            <th>Column heading</th>
        </tr>
        <tr class="warning">
            <td>6</td>
            <th>Column heading</th>
            <th>Column heading</th>
            <th>Column heading</th>
            <th>Column heading</th>
            <th>Column heading</th>
            <th>Column heading</th>
            <th>Column heading</th>
            <th>Column heading</th>
        </tr>
        <tr class="active">
            <td>7</td>
            <th>Column heading</th>
            <th>Column heading</th>
            <th>Column heading</th>
            <th>Column heading</th>
            <th>Column heading</th>
            <th>Column heading</th>
            <th>Column heading</th>
            <th>Column heading</th>
        </tr>
    </tbody>
</table>