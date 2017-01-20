var app = angular.module('main-App', ['ngRoute', 'toaster']);
app.config(['$routeProvider',
  function ($routeProvider) {
    $routeProvider.when('/', {
      templateUrl: 'resource/home',
      controller: 'MainCrtl'
    }).when('/student', {
      templateUrl: 'resource/student',
      controller: 'StdCtrl'

    }).when('/product', {
      templateUrl:'resource/product',
      controller:'product'
    })
      .otherwise({
      templateUrl: 'resource/404'
    });
  }]);


