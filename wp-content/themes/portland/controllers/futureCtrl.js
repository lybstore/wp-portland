"use strict";

var app = angular.module('portlandApp');

angular
.module('portlandApp')
.controller('futureCtrl', ['$scope', function($scope){


	$scope.hiddenToggleOne = false;
	$scope.hiddenToggleTwo = false;
	$scope.hiddenToggleThree = false;
	$scope.hiddenToggleFour = false;
	$scope.hiddenToggleFive = false;

	$scope.frqToggle = function (toggleElem) {
		resetAllToFalse();
		$scope[toggleElem] = !$scope[toggleElem];
	}

	var resetAllToFalse = function() {
		$scope.hiddenToggleOne = false;
		$scope.hiddenToggleTwo = false;
		$scope.hiddenToggleThree = false;
		$scope.hiddenToggleFour = false;
		$scope.hiddenToggleFive = false;
	}

}]);
