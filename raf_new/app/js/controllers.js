/*!
 * 
 * RAF Ventures app
 * 
 * Author: @dhaveed
 * Website: http://syndicatetechnologies.net
 * 
 */
if (typeof $ === 'undefined') { 
	throw new Error('This application\'s JavaScript requires jQuery');
}
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

app.controller('mainCtrl', ['$scope', '$http', function($scope, $http){
		$http.get("server/sessmgr").success(function(res){
			if (res == "not logged in") {
				window.location.assign("login");
				console.log(res);
			}
			else{
			$scope.user = res[0];
			console.log($scope.user);
			}
		});
	}]);
/*=========================================================
 * Module: products controller
 * Functions :
 * Provides functions for product fetching and display.
 * also controls adding of items to cart
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

app.controller('sidebarCtrl', ['$scope','$http', function(){
		var sidebar = function(){
 	$('#side-menu li a').on('click', function(){
    $('a.active').removeClass('active');
    $(this).addClass('active');
	});
 	};
 	$(document).ready(sidebar);
 			
}]);
/*=========================================================
 * Module: signup controller
 * Functions :
 * controls the user signup methods.
 =========================================================*/
app.controller('signupCtrl', function($scope,$http){
	$scope.status = "false";
	$scope.signUp = function(info){
		$scope.loading = true;
		$scope.status = "true";
		$scope.sent = info;
		/*$http.post('server/apis/signup.php', $scope.sent).success(function(res){
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
*/
	};
});

/*=========================================================
 * Module: login controller
 * Functions :
 * Controls user login and session creation
 * also controls adding of items to cart
 =========================================================*/
app.controller('loginCtrl', ['$scope', '$http', function($scope,$http){

	$scope.login = {
		email : "",
		password : "",
		remember: false,
		loading: false
	};

	console.log(JSON.stringify($scope.login));

	$scope.loginFunc = function(details){
		$scope.logDetails = details;
		$scope.loading = true;

		console.log($scope.login.remember);

		$http.post('server/apis/loginApi.php', $scope.logDetails).success(function(res){
			if(res == "invalid credentials"){
				swal(
  					'Error...',
  					'Invalid credentials. <br><br> Please check your details and try again',
  					'error'
					);
				$scope.loading = false;
			} else if(res == "user already logged in"){
				swal({
  					title: 'Success!',
  					text: 'user already logged in!',
  					type:'info',
  					timer: 2000
				});
				$scope.loading = false;
			console.log(window.location.assign("main"));
			}else if (res == "yes"){
				swal({
  					title: 'Success!',
  					text: 'Login Successful!',
  					type:'success',
  					timer: 2000
				});
				$scope.loading = false;
			console.log(window.location.assign('main'));
			}
			else {
				swal(
  					'Error...',
  					res,
  					'error'
					);
					$scope.loading = false;	
			}
		})
	}
}]);


/*=========================================================
 * Module: help controller
 * Functions :
 * Controls the contact form and its api
 * Controls the  FAQs
 =========================================================*/

 app.controller('helpCtrl', ['$scope','$http', function($scope,$http){
 	$scope.user = "";

 	$scope.contact = function(user){
 		$scope.formData = user;

 		$scope.testing = "nothing";

 		$scope.showLoader = true;
 		$scope.hideForm = true;

 		$http.post('server/apis/contact', $scope.formData).success(function(res){
 			if(res == "sent"){
 				console.log(res);
 				$scope.help = res;
 				swal({
  					title: 'Success!',
  					text: 'Your message was sent successfully!',
  					type:'success',
  					timer: 2000
				})
				$scope.user = "";
 			}
 			else{
 				swal(
  					'Oops...',
  					'Your Message was not sent!',
  					'error'
					);
				}
 			
 		});
 	};
 }]);