<!DOCTYPE html>
<html lang="en">
<head>
 <title>SPA template using Angular</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <script src = "http://ajax.googleapis.com/ajax/libs/angularjs/1.3.14/angular.min.js"></script>
  <script src = "http://ajax.googleapis.com/ajax/libs/angularjs/1.3.14/angular-route.min.js"></script>
  <style>
  .container .jumbotron, .container-fluid .jumbotron
  {
    margin:0px !important;
  }
  .navbar
  {
   border-radius:0px;
   margin:0px;
  }
  .panel-body
  {
  height:500px;
  margin-top:0px !important;
  border-radius:0px !important;
  }
  h5
  {
  margin-left: 50px;
  }
  </style>
</head>

<body ng-app="mainApp">
<!--header page-->
<div class="container">
 <div class="jumbotron">
 <h1>SPA - ANGULAR JS</h1>  
</div>
 
<!--navbar-->
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">SPA</a>
    </div>
    <ul class="nav navbar-nav">
      <li ><a href="#home">Home</a></li>
      <li><a href="#about">About Us</a></li>
      <li><a href="#services">Service</a></li>
      <li><a href="#contact">Contact us</a></li>
    </ul>
  </div>
</nav>

<!--panel body-->
<div class="panel panel-default">
  <div class="panel-body">
    <div ng-view>
	 
	</div>  
  </div>
</div>

    <div class="panel-footer"> 
	Copyrights @ vaghela.virendra
	</div>

    
</div>

      <script>
         var mainApp = angular.module("mainApp", ['ngRoute']);
         mainApp.config(['$routeProvider', function($routeProvider) {
            $routeProvider.
            when('/', {
               templateUrl: 'home.php',
               controller: 'homeController'
            }).
            
            when('/about', {
               templateUrl: 'about.php',
               controller: 'aboutController'
            }).
			
			when('/services', {
               templateUrl: 'services.php',
               controller: 'servicesController'
            }).
			
			when('/contact', {
               templateUrl: 'contact.php',
               controller: 'contactController'
            }).
            
            otherwise({
               redirectTo: '/'
            });
         }]);
        
      </script>

</body>
</html>
