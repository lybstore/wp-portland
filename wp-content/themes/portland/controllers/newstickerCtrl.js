"use strict";

var app = angular.module('portlandApp');

angular
.module('portlandApp')
.controller('newstickerCtrl', ['$scope', '$interval', '$timeout', function($scope, $interval, $timeout){

	$scope.moving = false;
	$scope.news = [];
	$scope.moveLeft = function() {
	  $scope.moving = true;
	  $timeout($scope.switchFirst, 20000);
	};
	$scope.switchFirst = function() {
	  $scope.news.push($scope.news.shift());
	  $scope.moving = false;
	  if (!$scope.$$phase) $scope.$apply()
	};

	$interval($scope.moveLeft, 20000);

}]);