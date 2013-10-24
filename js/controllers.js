(function () {
  'use strict';

  var typeadheadDemoControllers = angular.module('typeaheadDemoControllers', []);

  typeadheadDemoControllers.controller('TypeaheadDemoCtrl', ['$scope', '$http', function($scope, $http) {
    $scope.selected  = '';
    $scope.states    = [];
    $scope.typeahead = function (query) {
      return $http.get('api/typeahead.php?q='+ encodeURIComponent(query)).then(function(response){
        return response.data;
      });
    };
}]);
})();
