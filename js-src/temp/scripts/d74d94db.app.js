'use strict';

var jsSrcApp = angular.module('jsSrcApp', ['ngResource'])
  .config(['$routeProvider', function($routeProvider) {
    $routeProvider
      .when('/', {
        templateUrl: 'views/main.html',
        controller: 'MainCtrl'
      })
      .when('/product/:id', {
        templateUrl: 'views/product.html',
        controller: 'ProductCtrl'
      })
      .when('/product-edit/:id', {
        templateUrl: 'views/product-edit.html',
        controller: 'Product-EditCtrl'
      })
      .when('/product-edit', {
        templateUrl: 'views/product-edit.html',
        controller: 'Product-EditCtrl'
      })
      .when('/product-edit/:id', {
        templateUrl: 'views/product-edit.html',
        controller: 'Product-EditCtrl'
      })
      .otherwise({
        redirectTo: '/'
      });
  }]);
