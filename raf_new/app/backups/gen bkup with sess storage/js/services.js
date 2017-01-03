/*!
 * 
 * RAF Ventures Online Mall app
 * 
 * Author: @dhaveed
 * Website: http://syndic8tech.tk
 * 
 */

if (typeof $ === 'undefined') { throw new Error('This application\'s JavaScript requires jQuery'); }

var app = angular.module('rafApp');

app.service('getProducts', ["$rootScope", "$http", function($rootScope, $http) {
  'use strict';
  var productList = 'data/products.json',
      productListUrl  = productList + '?v=' + (new Date().getTime()); // jumps cache

  return {
    load: function() {

      $http.get(productListUrl)
        .success(function(res) {

           $rootScope.products = res;

        })
        .error(function(data, status, headers, config) {

          console.log('Failure loading products api');

        });
    }
  };

}]);
