var app = angular.module('rafApp');
app.config(['$urlRouterProvider', '$stateProvider', function($urlRouterProvider, $stateProvider) {
	$urlRouterProvider.otherwise('/');

	$stateProvider.state('dashboard', {
		url: '/',
		templateUrl: 'templates/dashTest.html'
	})
	.state('products', {
		url: '/products',
		templateUrl: 'templates/products.html'
	})
	.state('booking', {
		url: '/booking',
		templateUrl: 'templates/booking.html'
	})
	.state('book', {
		url: '/book',
		templateUrl: 'templates/book.html'
	})
	.state('settings', {
		url: '/settings',
		templateUrl: 'templates/settings.html'
	})
	.state('help', {
		url: '/help',
		templateUrl: 'templates/help.html'
	})
}]);