"use strict";

var app = angular.module('portlandApp');

angular
.module('portlandApp')
.controller('workCtrl', ['$sce', function($sce){

	$(document).ready(function() {
		if($('html').hasClass('fp-enabled', 'fp-viewing-0', 'fp-viewing-1', 'fp-viewing-2', 'fp-viewing-3', 'fp-viewing-4')){
		    $.fn.fullpage.destroy('all');
		}

		$('#fullpage').fullpage({

		});
	})
}]);
