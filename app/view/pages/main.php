<!doctype HTML>
<!-- ng-app - AngularJs Application Declaration ("imagineSalonApp") -->
<html ng-app="imagineSalonApp">
    <?php require('snippets/head.html'); ?> // require HEAD content for CSS links and JavaScripting 
<body>
    <?php require('snippets/header.html'); ?> // require HEADER content for utilities 
    <?php require('snippets/nav.html'); ?> // require NAVBAR content for primary navigation  
<!--  Specify where in the main HTML document to load the templates provided in the routeProvider  -->
    <main ng-view></main>
    <?php require('snippets/footer.html'); ?> // require FOOTER - file is blank
</body>

</html>