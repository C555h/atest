<!DOCTYPE html>
<html>

<head>
	<title> Simple App</title>
	<script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.3.10/angular.js"></script>
</head>

<body ng-app="oneTimeBidingExampleApp">
	
<div ng-controller="EventController">
  <button ng-click="clickMe($event)">Click Me</button>
  <p id="one-time-binding-example">One time binding: {{::name}}</p>
  <p id="normal-binding-example">Normal binding: {{name}}</p>
</div
	
</body>
<script type="text/javascript">
	angular.module('oneTimeBidingExampleApp', []).
controller('EventController', ['$scope', function($scope) {
  var counter = 0;
  var names = ['Igor', 'Misko', 'Chirayu', 'Lucas'];
  /*
   * expose the event object to the scope
   */
  $scope.clickMe = function(clickEvent) {
    $scope.name = names[counter % names.length];
    counter++;
  };
}]);
</script>
</html>