"use strict";

var app = angular.module('portlandApp');

angular
.module('portlandApp')
.controller('widgetCtrl', ['$scope', function($scope){
  $scope.widgetContent = [
    {lexiconContent: 'We created a name and brand identity that included PR, merchandise, events, hoardings and exhibitions. We also designed the website and app, marketing suite itself. We created a catalyst for community. New benchmark for town branding.'},
    {}
  ];
}])
