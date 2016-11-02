app.directive('video', Video);
Video.$inject = ['$timeout']
function Video($timeout) {
  return {
    restrict: 'AE',
    scope: {
      show: '='
    },
    controllerAs: 'vm',
    link: function(scope, elem, attr) {
      $('.video-wrapper').click(function () {
    var videoEl = $(this).find("video").get(0);
    if( videoEl.paused ){
        videoEl.play();
        $(this).find(".playpause").fadeOut();
    }else{
        videoEl.pause();
        $(this).find(".playpause").fadeIn();
    }
    });
    }
  }
}
