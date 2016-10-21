"use strict";

var app = angular.module('portlandApp');

angular
.module('portlandApp')
.controller('navCtrl', ['$scope', function($scope){
	$scope.navToggle = function () {
		$scope.navSlide = !$scope.navSlide;
		$scope.overlay = !$scope.overlay;
	}

	$scope.close = function () {
		$scope.navSlide = !$scope.navSlide;
		$scope.overlay = !$scope.overlay;
		$scope.toggleMenu = false;
	}

	// SHOW AND HIDE FUNCTION

	$scope.workToggle = function () {
		$scope.toggleMenu = !$scope.toggleMenu;
	}

}])