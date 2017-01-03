/*!
 * 
 * RAF Ventures app
 * 
 * Author: @dhaveed
 * Website: http://ssyndicatetechnologies.net
 * 
 */

if (typeof $ === 'undefined') { throw new Error('This application\'s JavaScript requires jQuery'); }
var app = angular.module('rafApp');
	app.controller('orderCtrl', ['$scope', function($scope){
		$scope.pickedProducts = 
		[
			{id: 1, name: "Milk Powder", size: "Medium", brand: "Peak", quantity: "2", unit: "24", total: 48},
			{id: 2, name: "Air Conditioner", size: "Small", brand: "Haier Thermocool", quantity: "3", unit: "500", total: 1500},
			{id: 3, name: "Refined Sugar", size: "Medium", brand: "Dangote", quantity: "20", unit: "600", total: 12000},
			{id: 4, name: "Cement", size: "Big", brand: "Elephant", quantity: "60", unit: "5", total: 300},
		];

		$scope.id = function(){
			return $scope.pickedProducts.length + 1;
		}

		$scope.pick = function(){
			$scope.pickedProducts.push({id: $scope.id(), name: $scope.name,size: $scope.size,brand: $scope.brand,quantity: $scope.quantity,unit: 600,total: 12000});
			 $scope.name = "";
			 $scope.size = "";
			 $scope.brand = "";
			 $scope.quantity = "";
		};
	}]);



/*=========================================================
 * Module: products controller
 * Functions :
 * Provides functions for product fetching and display.
 * also controls adding of items to cart
 * by @dhaveed_adegoke ;-)
 =========================================================*/


	app.controller('productsCtrl', function($rootScope,$scope,$http){
		$scope.test = "testing scopes";
		$scope.productList = {};

		//reading the products array from the json
		 $http.get('data/products.json').then(function(response){

		 	//storing the array from the json in the variable productList
				return	$scope.productList = response.data;
				});
	});


	app.controller('sidebarCtrl', ['$scope', function($scope){

		var sidebar = function(){
 	$('#side-menu li').on('click', function(){
    $('li.active').removeClass('active');
    $(this).addClass('active');
	});
 }
 	$(document).ready(sidebar);
		
	}]);

app.controller('signupCtrl', function($scope,$http){
	$scope.status = "false";



	$scope.signUp = function(info){
		$scope.status = "true";

		$scope.sent = info;

		$http.post('server/signup.php', $scope.sent).success(function(res){
			if(res == "user already exists"){
				swal(
  					'Oops...',
  					'Sorry that email address is already taken!',
  					'error'
					);
			} else if(res == "successfully inserted into db"){
				swal({
  					title: 'Success!',
  					text: 'Successfully Registered',
  					type:'success',
  					timer: 2000
				});
			}
			else{
				swal(
  					'Oops...',
  					'Sorry an error occured while registering you',
  					'error'
				);
			}
		});

	};
	
});

app.controller('loginCtrl', ['$scope', '$http', function($scope,$http){
	// $scope.testing = "controller works";

	$scope.loginFunc = function(details){
		$scope.logDetails = details;

		$http.post('server/loginApi.php', $scope.logDetails).success(function(res){
			if(res == "invalid credentials"){
				swal(
  					'Error...',
  					'Invalid credentials. <br><br> Check your details and try again',
  					'error'
					);
			} else if(res == "user already logged in"){
				swal({
  					title: 'Success!',
  					text: 'user already logged in!',
  					type:'success',
  					timer: 2000
				})
			}else if (res == "login successfull "){
				swal({
  					title: 'Success!',
  					text: 'Login Successful!',
  					type:'success',
  					timer: 2000
				})
			}
			else {
				swal(
  					'Error...',
  					'An unknown error occured',
  					'error'
					);	
			}

		})
	}
}])