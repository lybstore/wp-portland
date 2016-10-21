"use strict";

var app = angular.module('portlandApp');

// WEB SERVICE GET REQUEST
var NewsService = function ($http){
	this.$http = $http;
}

NewsService.prototype.getarticles = function () {
	return this.$http.get('app/data/news.json').then(function (response){
		return response.data;
	});
};

app.service("newsService", NewsService);

// WEB SERVICE PROMISE TO LOAD DATE FROM JSON FILE
angular
.module('portlandApp')
.controller('newsCtrl', ['$scope', 'newsService', '$location', function($scope, newsService, $location, $stateParams, $state) {

  var promise = newsService.getarticles();
  promise.then(function (data){
      $scope.news = data.news
    // console.log(data)
  });

  $scope.articleItems = 4;

  // AMOUNT OF ARTICLES
    $scope.articleLimit = function(){
        $scope.articleItems + 1;
    }

  $scope.CurrentDate = new Date();

}]);
