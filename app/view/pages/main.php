<!doctype HTML>
<!-- ng-app - AngularJs Application Declaration ("imagineSalonApp") -->
<html ng-app="imagineSalonApp">

<!-- require HEAD content for CSS links and JavaScripting -->
<?php require('snippets/head.html'); ?>

    <body>

        <!-- require HEADER content for utilities -->
        <?php require('snippets/header.html'); ?>

            <!-- require NAVBAR content for primary navigation -->
            <?php require('snippets/nav.html'); ?>

        <!-- specify where in the main HTML document to load the templates provided in the routeProvider. The templates that load into this view are located at app/pages/templates -->
        <main ng-view></main>

        <!-- require FOOTER - file is blank -->
        <?php require('snippets/footer.html'); ?>
    </body>

</html>