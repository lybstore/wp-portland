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

	//  $('.video-wrapper').click(function () {
	//     var videoEl = $(this).find("video").get(0);
	//     if( videoEl.paused ){
	//         videoEl.play();
	//         $(this).find(".playpause").fadeOut();
	//     }else{
	//         videoEl.pause();
	//         $(this).find(".playpause").fadeIn();
	//     }
	// });

	// $('.coffee').click(function() {
	//   if (this.paused == false) {
	//       this.pause();
	//       alert('music paused');
	//   } else {
	//       this.play();
	//       alert('music playing');
	//   }
	// });
}]);
