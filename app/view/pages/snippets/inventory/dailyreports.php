<!--  Daily Reports List ]Output Screen  -->
<?php require('../snippets/inventory/dailyreport.php');?>
<!--  Popup Modal (hidden, overlapping)  -->
<div class="modal" id="daily-reports" style="display:none; position: absolute; z-index:1000">
    <div class="modal-dialog">
        <div class="modal-content">

            <!--  Modal Header with closing icon  -->
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" ng-click="dailyReports()" aria-hidden="true">x</button>
                <!--  NOTE: When user clicks close, ng-click calls the dailyReports() function will be called from inventoryController located in app/view/js/controllers/inventory.js which is specified in the AngularJs RouteProvider in the config/routes/routes.js file.  -->

                <!--  Modal title  -->
                <h4 class="modal-title">Daily Inventory Report List </h4>
            </div>

            <!--  Modal Body  -->
            <div class="modal-body">
                <h5>Select a report that you would like to view</h5>
                <!--  Output Data  -->
                <table class="table table-striped table-hover ">
                    <thead>
                        <tr>
                            <th>Date</th>
                            <th>Counting Errors</th>
                            <th>Cost</th>
                            <th>Revenue</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!--  Imaginary Data not retrieved from the database  -->
                        <tr>
                            <td>2016-03-04</td>
                            <td>0 Errors</td>
                            <td>($37.29)</td>
                            <td>$49.56</td>
                        </tr>
                        <tr>
                            <td>2016-03-03</td>
                            <td>1 Errors</td>
                            <td>($20.78)</td>
                            <td>$30.03</td>
                        </tr>
                        <tr>
                            <td>2016-03-02</td>
                            <td>4 Errors</td>
                            <td>($20.78)</td>
                            <td>$30.03</td>
                        </tr>
                        <tr>
                            <td>2016-03-01</td>
                            <td>0 Errors</td>
                            <td>($15.78)</td>
                            <td>$131.47</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <!-- /.modal-body -->
        </div>
        <!-- /.toggle-div-daily-report -->
        <button type="button" class="btn btn-default" ng-click="dailyReport()" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Next</button>
    </div>
</div>
</div>
</div>