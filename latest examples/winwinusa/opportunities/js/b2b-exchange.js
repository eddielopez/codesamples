(function(Liferay, angular, window, undefined) {
	angular.portlet.add("b2b-exhange", "b2b-exhange",
		function() {

			var myModule = angular.module("myModule", ['infinite-scroll']);
			
			myModule.directive('b2bExchange', function($http) {
			      return {
			    	  restrict: 'EA',
			    	  
			    	  templateUrl: function(tElement, tAttrs) {
			    		  return tAttrs.portletPath + '/html/b2bexchange/b2b-exchange-template.html';
			    	  },
			    	 /*scope: {
			    		  showSave: '='
			    	  },*/
			  		controller: function($scope, $http) {
						
						$scope.commentsExpanded = false;
						$scope.comment = "";
						$scope.comments;
						//console.log($scope.showSave);
						
						$scope.toggleComments = function() {
							console.log("directive.b2bexchange: toggleComments=" + $scope.commentsExpanded);
							// get the comments when expanding the comments section
							if (!$scope.commentsExpanded) {
								$scope.commentsExpanded = true;
								$http.get("/api/jsonws/Events-portlet.b2bexchangecomment/get-by-exchange" +
			            			"/exchange-id/" + $scope.exchange.exchangeId
									).
						        success(function(data, status, headers) {
						        	//TODO check for exception
						        	$scope.comments = data;
						        });
								
								//TODO start auto refresh
							}
							else {
								$scope.commentsExpanded = false;
								$scope.comments = [];
								//TODO stop auto refresh
							}
						};

						$scope.addComment = function() {
							console.log("directive.b2bexchange: addComment=" + $scope.comment);
							$http.post("/api/jsonws/Events-portlet.b2bexchangecomment/add" +
		            			"/exchange-id/" + $scope.exchange.exchangeId +
		            			"/comment/" + encodeURI($scope.comment)            		
								).
					        success(function(data, status, headers) {
					        	// clear out the comment text
					        	$scope.comment = "";
					        	
					        	// add new comment to the list
					        	$scope.comments.unshift(data);
					        });
		            	};
					}
			    	  
			      };
			    });

			myModule.controller("B2bExchgCntrl", function($scope, $http) {
				console.log("B2bExchgAllCntrl");


				//infinite scroll for all listings
				$scope.length = 5;
				$scope.totalLoaded = 0;
				$scope.isBusy = false;
				
				//infinite scroll for saved listings
				$scope.savedLength = 5;
				$scope.savedTotalLoaded = 0;
				$scope.savedIsBusy = false;

				$scope.user = userId
				$scope.allExchangeList = [];
				$scope.allSavedList = [];
				$scope.searchRequest = {};
				$scope.newListing = {};
				$scope.toggleListing = 'save';
				$scope.listingIdToRemove = 0;
				$scope.listingIdtoEdit = 0;
				
				
				
            	/*
            	 * 
            	 * INDIVUDAL TABS example -> Saved Exchange and Our Exchange
            	 *  
            	 * */
            	
            	$scope.loadOurListing = function (){
            		alert("load our listings");
            		
            	};
            	
            	$scope.loadSavedListing = function(){
            		alert("load saved listings");
            		
            		if($scope.savedTotalLoaded == 0){
            			$scope.loadmoreSaved();
            		}
            	};
				
				
				/*
				 * 
				 * SEARCH LISTINGS
				 * 
				 * */
				
				$scope.search = function() {
					console.log("B2bExchgAllCntrl: search=" + $scope.searchRequest);
            		
//					$http.post("/api/jsonws/Events-portlet.b2bexchange/add" +
//            			"/group-id/" + encodeURI($scope.exchange.groupid) +
//            			"/company-id/" + encodeURI($scope.exchange.companyid) +
//            			"/user-id/" + encodeURI(uid) +
//            			"/exchange/" + encodeURI($scope.exchange.exchange) +
//            			"/headline/" + encodeURI($scope.exchange.headline) +
//            			"/message/" + encodeURI($scope.exchange.message) +
//            			"/youtube-url/" + encodeURI($scope.exchange.youtube)            		
//						).
//			        success(function(data) 
//			        {
//			        	alert('exchange created. id: ' + JSON.stringify(data));
//			        	//TODO add to list of exchange posting
//			        });
            	};
            	
				
				/*
				 * 
				 * LOAD LISTINGS
				 * 
				 * */
				
				// get all the exchanges
				/*$http.post("/api/jsonws/Events-portlet.b2bexchange/get-all").
			        success(function(data) 
			        {
			        	$scope.allExchangeList = data;
						console.log("B2bExchgAllCntrl: allExchangeList=" + $scope.allExchangeList);
			        });*/


            	$scope.loadListings = function(){
    				/*$http.post("/api/jsonws/Events-portlet.b2bexchange/get-all").
			        success(function(data) 
			        {
			        	$scope.allExchangeList = data;
						console.log("B2bExchgAllCntrl: allExchangeList=" + $scope.allExchangeList);
			        });*/
            	};
            	
            	
            	$scope.loadmore = function()
            	{
					if($scope.isBusy) 
						return; // request in progress, return
				
					$scope.isBusy = true;
			
					var query = '/api/jsonws/Events-portlet.b2bexchange/get-all-order-by-updated/start/' + $scope.totalLoaded + '/count/' + $scope.length;
					
					$http.get(query).
			        success(function(data) 
			        {
			        	for(var i = 0; i < data.length; i++)
			        	{
			        		$scope.allExchangeList.push(data[i]);
			        		//console.log(JSON.stringify(data[i]));

			        	}
			        	
			        	$scope.totalLoaded +=  data.length;
			        	
			        	$scope.isBusy = false;
			        	
			        });
            	};
            	/*
            	 * 
            	 * When our saved tab is clicked fire this function 
            	 *
            	 * */
            	
            	$scope.loadmoreSaved = function(){
            		
            		if($scope.savedIsBusy)
            			return;
            		
            		$scope.savedIsBusy = true;
            		
            		var query = '/api/jsonws/Events-portlet.b2bexchange/get-all-by-saved/start/' + $scope.savedTotalLoaded + '/count/' + $scope.savedLength;
            		
            		$http.get(query).
            			success(function(data)
            			{
            				for(var i = 0; i < data.length; i++)
            				{
            					$scope.allSavedList.push(data[i]);
            					//console.log(JSON.stringify(data[i]));
            				}
            				
            				$scope.savedTotalLoaded += data.length;
            				
            				$scope.savedIsBudy = false;
            				
            				
            			});
            	};
            	
            	/*
            	 * 
            	 * CLEAR LISTING FORM 
            	 * 
            	 * */
            	
            	$scope.clearListing = function(){
					$scope.newListing.exchange = '';
        			$scope.newListinge.headline = '';
        			$scope.newListing.message = '';
        			$scope.newListing.youtube = '';
            	};
            	
            	
            	
            	/*
            	 * 
            	 * SAVE LISTINGS
            	 * 
            	 * */
            	
            	
            	$scope.saveListing = function(index, event, exchangePost){
     
            		//alert("calling save listing function");
            		console.log("saving exchange " + exchangePost + " at index: " + index);
            		
            		var query = 'http://test.winwinusa.com/api/jsonws/Events-portlet.b2bexchangesaved/add-user-entry/exchange-id/' + exchangePost;
            		
            		$http.post(query)
            			.success(function(data){
            				alert(JSON.stringify(data));
            				$scope.allExchangeList.splice(index, 1);
            			});
            		
            		/*if($scope.toggleListing == 'save'){
            			
            			
            			//TODO make http request to save listing for business
            			//place inside of http request
            			$scope.toggleListing = 'unsave';
            			$("#save-"+exchangePost).toggle();
            			
            			
            		}
            		*/
            		
            		/*if($scope.toggleListing == 'unsave'){
            		
            			
            			//TODO make http request to unsave listing for business
            			
            			//place inside of http request
            			$scope.toggleListing = 'save';
            			$("#unsave-"+exchangePost).toggle();
            			
            			
            		}*/
            		
            		
            	};
            	
            	
            	/*
            	 * 
            	 * REMOVE LISTING
            	 * 
            	 * */
            	
            	$scope.applyListingToRemove = function(exchange){
            		//alert('exchange: ' + JSON.stringify(exchange));
            		$scope.listingIdToRemove = exchange.exchangeId;
            	};
            	
            	$scope.removeListing = function(){
            		
            		
            		var deleteQuery = $http.post('/api/jsonws/Events-portlet.b2bexchange/remove-b2b-exchange/'+
            				'/id/' + $scope.listingIdToRemove);
            		
            		$http.get(deleteQuery).
            			success(function(data){
            				//console error happening here i think.
    			        	$scope.loadListings(); //TODO after deleting a listing lets reload the listings.
    			        	$scope.listingIdToRemove = 0;
    			        	console.log('deleting the following listing: ' + JSON.stringify(data));
            			});
            	};
            	
            	
            	/*
            	 * 
            	 * EDIT LISTING
            	 * 
            	 * */
            	
            	$scope.editListing = function(exchange){
            		alert('edit exchange: ' + JSON.stringify(exchange));
            		$scope.newListing = exchange;
            		
            	};
            	
            	/*
            	 * 
            	 * POST EDITED LISTING
            	 * 
            	 * */
            	
            	$scope.postListing = function(){
            		alert("post listing");
            		
            	/*
            	 *  UNCOMMENT ME WHEN YOUR READY TO WORK ON THIS METHOD
            	 *  
            	 
            	  	var saveQuery = //TODO need to create update service
                	
                	
                	$http.get(saveQuery).
			        success(function(data) 
			        {			        	
			        	if (data > 0)
	                	{
			        		//TODO need to implement loading of listings
	                		$scope.loadListings();
	                	}	          
			        	
			        	$scope.clearListing();
			        });
            		
                	*
                	* END OF COMMENT
                	*/
            		
            	};
            	

			});

			return [ myModule.name ];
	});

})(Liferay, angular, window, undefined);