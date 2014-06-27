// JavaScript Document
angular.module("myApp",[])
.controller('Example1',['$scope',function(scope1){
	scope1.people = [
		{ name: "Gabriela", age:"27"},
		{ name: "María", age:"28"}, 
		{ name: "Toscano", age:"30"}
		];
	scope1.name1 = "Parent";
}])
.controller('Example2',['$scope',function(scope1){
	scope1.people = [
		{ name: "Luis", age:"27"},
		{ name: "Humberto", age:"28"}, 
		{ name: "Gonzalez", age:"30"}
		];
	//scope1.name1 = "Child";
}]);
var Ctrl = function($scope){
	$scope.name = "Luis";
	$scope.age = 27;
};
var AnotherCtrl = function($scope){
	$scope.name = "Humberto";
	$scope.age = 28;
	$scope.$watch('name',function(){
		$scope.CtrlResult = "R: "+$scope.name;
	});
};
var List = function ($scope){
	$scope.people = [
		{ name: "Luis", age:"27"},
		{ name: "Humberto", age:"28"}, 
		{ name: "González", age:"30"}
		];
	$scope.add = function(e){
		e.preventDefault();
		e.stopPropagation();
		//console.log(e.currentTarget);
		$scope.people.push({
			name: $scope.new_name,
			age: $scope.new_age
		});
		$scope.new_name = "";
		$scope.new_age = "";
	}
	$scope.remove = function(index){
		$scope.people.splice(index,1);
	}
};
var ngChangeDiv = function($scope){
	$scope.people = [
		{ name: "Luis", number:"999"},
		{ name: "Humberto", number:"888"}, 
		{ name: "González", number:"777"}
		];
	$scope.clean = function(){
		$scope.url = $scope.url.replace(/\s+/g,'-').replace(/[^a-z0-9-\.]/i,'');
	}
}
