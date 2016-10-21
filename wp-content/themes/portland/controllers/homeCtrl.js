"use strict";

var app = angular.module('portlandApp');

var HomeService = function ($http) {
  this.$http = $http;
}

HomeService.prototype.gethomeContent = function () {
  return this.$http.get('app/data/home.json').then(function (response){
    return response.data;
  });
};

app.service("homeService", HomeService);

angular
.module('portlandApp')
.controller('homeCtrl', ['$scope','homeService', '$location', function($scope, homeService, $location){

  var promise = homeService.gethomeContent();
    promise.then(function (data) {
      $scope.homeContent = data;
  });

  if($('html').hasClass('fp-enabled')){
      $.fn.fullpage.destroy('all');
  }

  $("#frqModal").on('hidden.bs.modal', function () {
      $(this).removeClass('fade').modal('hide');
  });

}]);
