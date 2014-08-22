'use strict';

/**
 * @ngdoc function
 * @name readitApp.controller:MainCtrl
 * @description
 * # MainCtrl
 * Controller of the redditApp
 */
angular.module('redditApp')
  .controller('MainCtrl', function ($scope, $http) {

    $scope.rootUrl = 'http://api.reddit.com'; //api root

    //variable initalization 
  	$scope.username = ''; 
    $scope.after = null;
    $scope.before = null;
    $scope.limit = 5;
    

  	$scope.searchReddit = function(after, before){

      $scope.listings = []; //array of listings 
      $scope.data = [];  //inital listing data has before/after params
      $scope.after = after;

      //console.log("inside of function"+ $scope.before);
      $scope.before = before;
         

      $scope.username = $scope.name;
      $scope.limit = $scope.limit;

  		var query = $scope.rootUrl+'/user/'+$scope.username+'/comments';
      
      $http.get(query, {
        params: {
            limit: $scope.limit,
            count: $scope.count,
            after: $scope.after,
            before: $scope.before
        }
     }).
        success(function(data){
          //console.log(query);
          $scope.data = data.data;

          var dataset = data.data.children;
          console.log(JSON.stringify($scope.data));

            for(var i = 0; i < dataset.length; i++){
                $scope.listings.push(dataset[i].data);
            }
            $scope.count = $scope.limit; 
        }); 
    
  	}; //searchReddit


  });
