app.directive('transition', Transition);
Transition.$inject = ['$timeout']
function Transition($timeout) {
  return {
    restrict: 'AE',
    scope: {
      show: '='
    },
    controllerAs: 'vm',
    link: function(scope, elem, attr) {
      if($('html').hasClass('fp-enabled', 'fp-viewing-0', 'fp-viewing-1', 'fp-viewing-2', 'fp-viewing-3', 'fp-viewing-4')){
          $.fn.fullpage.destroy('all');
      }
      $('#fullpage').fullpage({
      });
    }
  }
}