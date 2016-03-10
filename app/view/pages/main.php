<!doctype HTML>
<!-- ng-app - AngularJs Application Declaration ("imagineSalonApp") -->
<html ng-app="imagineSalonApp">
    <?php require('snippets/head.html'); ?>
<body>
    <?php require('snippets/header.html'); ?>
    <?php require('snippets/nav.html'); ?>
<!--  Specify where in the main HTML document to load the templates provided in the routeProvider  -->
    <main ng-view></main>
    <?php require('snippets/footer.html'); ?>
</body>

</html>