
var app = angular.module("myMod",['ngRoute']);
app.config(["$routeProvider",function($routeProvider){
	$routeProvider.
	when("/page1",{

		templateUrl:"view/page1.html"
	}).

	when("/page2",{

		templateUrl:"view/page2.html"
	}).

	when("/page3",{

		templateUrl:"view/page3.html"
	}).

	when("/page4",{

		templateUrl:"view/page4.html"
	}).
	otherwise({
		redirectTo:"index.html"
	});

}]);

app.controller("myController",function($scope){


});