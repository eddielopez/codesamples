(function(Liferay, angular, window, undefined) {
	angular.portlet.add("b2b-exhange", "b2b-exhange",
		function() {

			var myModule = angular.module("myModule", ['infinite-scroll', 'angularMoment']);
			
			myModule.directive('b2bExchange', function($http) {
			      return {
			    	  restrict: 'EA',
			    	  
			    	  templateUrl: function(tElement, tAttrs) {
			    		  return tAttrs.portletPath + '/html/b2bexchange/b2b-exchange-template.html';
			    	  },
			    	 /*scope: {
			    		  showSave: '='
			    	  },*/
			  		controller: function($scope, $attrs, $http) {
			  			
			  			$scope.allTab = $attrs.b2bAllTab;
			  			$scope.savedTab = $attrs.b2bSavedTab;
			  			$scope.businessTab = $attrs.b2bBusinessTab;
			  			
						$scope.commentsExpanded = false;
						$scope.replyComment = false;
						$scope.comment = "";
						$scope.commentReply = "";
						$scope.comments = {};
						
						//$scope.comments.replies;
						//console.log($scope.showSave);
						
						$scope.toggleComments = function() {
							console.log("directive.b2bexchange: toggleComments=" + $scope.commentsExpanded);
							// get the comments when expanding the comments section
							if (!$scope.commentsExpanded) {
								$scope.commentsExpanded = true;
								$http.get("/api/jsonws/Events-portlet.b2bexchangecomment/get-by-exchange-with-replies" +
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
		            			"/comment/" + encodeURIComponent($scope.comment)            		
								).
					        success(function(data, status, headers) {
					        	// clear out the comment text
					        	$scope.comment = "";
					        	
					        	// add new comment to the list
					        	$scope.comments.unshift(data);
					        	
					        	// updated the comment count
					        	$scope.exchange.commentCount++;
					        });
		            	};

		            	$scope.addCommentReply = function(comment, message) {
		
                            console.log(JSON.stringify(comment));
		            		$scope.commentReply = message;
                            $scope.comment.exchangeCommentId = comment.exchangeCommentId;
                            alert( $scope.comment.exchangeCommentId);
							//console.log("directive.b2bexchange: addCommentReply=" + $scope.commentReply);
							/*$http.post("/api/jsonws/Events-portlet.b2bexchangecomment/add-reply" +
		            			"/exchange-comment-id/" + $scope.comment.exchangeCommentId +
		            			"/comment/" + encodeURIComponent($scope.commentReply)            		
								).
					        success(function(data, status, headers) {
					        	
					        	console.log(JSON.stringify(data));
					        	//clear out the comment text
					        	$scope.commentReply = "";
					        	
					        	//add new comment to the list
					        	$scope.comments.replies.unshift(data);
					        });*/
		            	};
					}
			    	  
			      };
			    });

			myModule.controller("B2bExchgCntrl", function($scope, $http) {
				console.log("B2bExchgAllCntrl");

				// indicated which tab is active.
				// used when load more methods are called for
				// the infinite scrolling, The values are all, saved, business
				$scope.activeTab = "all";
				
				
				//infinite scroll for all listings
				$scope.length = 5;
				$scope.totalLoaded = 0;
				$scope.isBusy = false;
				
				//infinite scroll for saved listings
				$scope.savedLength = 5;
				$scope.savedTotalLoaded = 0;
				$scope.savedIsBusy = false;

				//infinite scroll for business listings
				$scope.businessLength = 5;
				$scope.businessTotalLoaded = 0;
				$scope.businessIsBusy = false;

				$scope.user = userId
				$scope.allExchangeList = [];
				$scope.allSavedList = [];
				$scope.allBusinessList = [];
				$scope.searchRequest = {
					exchange: "all",
					distance: "0",
					zipcode: ""
				};
				$scope.copyEditListing = {};
				$scope.newShare = {};
				$scope.newShareRequest = {
					message: ""
				};
				$scope.toggleListing = 'save';
				$scope.indexOfListingToRemove = 0;
				$scope.listingIdtoEdit = 0;
				
				
            	/*
            	 * 
            	 * INDIVUDAL TABS example -> Saved Exchange and Our Exchange
            	 *  
            	 * */

            	$scope.loadAllListing = function() {
            		console.log("load all listings");
            		$scope.activeTab = "all";
            	};
				
            	$scope.loadOurListing = function (){
            		console.log("load business listings");
            		
            		$scope.activeTab = "business";
            	};
            	
            	$scope.loadSavedListing = function() {
            		
            		console.log("load saved listings");
            		
            		$scope.activeTab = "saved";
            	};
				
				/*
				 * 
				 * SEARCH LISTINGS
				 * 
				 * */
				
				$scope.search = function() {
					console.log('search');
					$scope.totalLoaded = 0;
					$scope.isBusy = false;
					$scope.allExchangeList = [];
		           	$scope.loadmore();
            	};
				
				/*
				 * LOAD LISTINGS
				 * 
				 * */
            	
            	$scope.loadmore = function() {
            		
            		console.log("loadmore");

            		// ignore if not the active tab
            		if ($scope.activeTab != "all") {
            			return;
            		}
            		
            		console.log("loadmore - active");
            		
					if($scope.isBusy) {
	            		console.log("loadmore - busy");
						return; // request in progress, return
					}
				
					$scope.isBusy = true;
					
					var exchange = encodeURIComponent($scope.searchRequest.exchange);
					var distance = encodeURIComponent($scope.searchRequest.distance);
					var zipcode = encodeURIComponent($scope.searchRequest.zipcode.length > 0 ? $scope.searchRequest.zipcode : " ");
			
					var query = "/api/jsonws/Events-portlet.b2bexchange/search-all/exchange/" + exchange + "/zipcode/" + zipcode + "/distance/" + distance + "/start/" + $scope.totalLoaded + "/count/" + $scope.length;

            		console.log("loadmore - query " + query);

					$http.get(query).
			        success(function(data) 
			        {
			        	for(var i = 0; i < data.length; i++)
			        	{
			        		$scope.allExchangeList.push(data[i]);
			        	}
			        	
			        	$scope.totalLoaded +=  data.length;
			        	
			        	$scope.isBusy = false;
			        	
			        });
            	};

            	/*
            	 * 
            	 * load saved listings 
            	 *
            	 * */
            	$scope.loadmoreSaved = function() {

            		console.log("loadmoreSaved");

            		// ignore if not the active tab
            		if ($scope.activeTab != "saved") {
            			return;
            		}

            		console.log("loadmoreSaved - active");

            		if($scope.savedIsBusy) {
                		console.log("loadmoreSaved - busy");
            			return;
            		}
            		
            		$scope.savedIsBusy = true;
            		
            		var query = '/api/jsonws/Events-portlet.b2bexchange/get-all-by-saved/start/' + $scope.savedTotalLoaded + '/count/' + $scope.savedLength;

            		console.log("loadmoreSaved - query " + query);

            		$http.get(query).
            			success(function(data)
            			{
            				for(var i = 0; i < data.length; i++)
            				{
            					console.log(data[i]);
            					$scope.allSavedList.push(data[i]);
            				}
            				
            				$scope.savedTotalLoaded += data.length;
            				
            				$scope.savedIsBusy = false;
            			});
            	};

            	/*
            	 * 
            	 * load business listings 
            	 *
            	 * */
            	$scope.loadmoreBusiness = function() {

            		console.log("loadmoreBusiness");

            		// ignore if not the active tab
            		if ($scope.activeTab != "business") {
            			return;
            		}

            		console.log("loadmoreBusiness - active");

            		if($scope.businessIsBusy) {
                		console.log("loadmoreBusiness - busy");
            			return;
            		}
            		
            		$scope.businessIsBusy = true;
            		
            		var query = '/api/jsonws/Events-portlet.b2bexchange/get-all-by-business/start/' + $scope.businessTotalLoaded + '/count/' + $scope.businessLength;

            		console.log("loadmoreBusiness - query " + query);

            		$http.get(query).
            			success(function(data)
            			{
            				for(var i = 0; i < data.length; i++)
            				{
            					console.log(data[i]);
            					$scope.allBusinessList.push(data[i]);
            				}
            				
            				$scope.businessTotalLoaded += data.length;
            				
            				$scope.businessIsBusy = false;
            			});
            	};

            	/*
            	 * 
            	 * CLEAR LISTING FORM 
            	 * 
            	 * */
            	
            	$scope.clearListing = function(){
					$scope.copyEditListing.exchange = '';
        			$scope.copyEditListing.headline = '';
        			$scope.copyEditListing.message = '';
        			$scope.copyEditListing.youtubeUrl = '';
            	};
            	
            	/*
            	 * 
            	 * SAVE LISTINGS
            	 * 
            	 * */
            	$scope.saveListing = function(index){
     
            		var ex = $scope.allExchangeList[index];
            		
            		console.log("saving exchange index: " + index + ", exchangeId:" + ex.exchangeId);
            		
            		var query = '/api/jsonws/Events-portlet.b2bexchangesaved/add-user-entry/exchange-id/' + ex.exchangeId;
            		
            		$http.post(query).
            			success(function(data){
                    		console.log("saving exchange success. " + data);
                    		
                    		// reset the saved list
                    		$scope.allSavedList = [];
                    		$scope.savedTotalLoaded = 0;
                    		
                    		// Remove entry from all exchange list
            				$scope.allExchangeList.splice(index, 1);
            				
    			        	// decrement total loaded
            				$scope.totalLoaded--;

    			        	// check if more need to be loaded
    			        	if ($scope.totalLoaded < $scope.length) {
    			        		$scope.loadmore();
    			        	}

            			});
            	};

            	$scope.unsaveListing = function(index){
            	     
            		var ex = $scope.allSavedList[index];
            		
            		console.log("unsave exchange index: " + index + ", exchangeId:" + ex.exchangeId);
            		
            		var query = '/api/jsonws/Events-portlet.b2bexchangesaved/remove-user-entry/exchange-id/' + ex.exchangeId;
            		
            		$http.post(query).
            			success(function(data){
                    		console.log("unsave exchange success. " + data);
                    		
                    		// reset the saved list
                    		$scope.allExchangeList = [];
                    		$scope.totalLoaded = 0;
                    		
                    		// Remove entry from saved exchange list
            				$scope.allSavedList.splice(index, 1);
            				
    			        	// decrement total loaded
            				$scope.savedTotalLoaded--;

    			        	// check if more need to be loaded
    			        	if ($scope.savedTotalLoaded < $scope.savedLength) {
    			        		$scope.loadmoreSaved();
    			        	}

            			});
            	};

            	
            	/*
            	 * 
            	 * Share
            	 * 
            	 * */
            	
            	
            	$scope.listingToShare = function(exchange){
            		console.log("listingToShare: " + JSON.stringify(exchange));
            		
            		//TODO make http call to service
            		
            		$scope.newShare = exchange;

            		// clear request
		        	$scope.newShareRequest.message = "";
            	};
            	
            	$scope.shareListing = function() {
            		console.log("shareListing: " + JSON.stringify($scope.newShare));

            		$http.post("/api/jsonws/Events-portlet.b2bexchange/share-b2b-exchange" +
	            			"/exchange-id/" + $scope.newShare.exchangeId +
	            			"/message/" + encodeURIComponent($scope.newShareRequest.message)
							).
				        success(function(data) {
				        	console.log("shareListing success:");
				        	
				        	// clear request
				        	$scope.newShareRequest.message = "";
				        	
				        	//TODO close modal window
				        });
            		
            	};
            	
            	
            	/*
            	 * 
            	 * REMOVE LISTING
            	 * 
            	 * */
            	
            	$scope.applyListingToRemove = function(index) {
            		$scope.indexOfListingToRemove = index;
            	};
            	
            	$scope.removeListing = function() {
            		
            		var ex = $scope.allBusinessList[$scope.indexOfListingToRemove];
            		
            		var query = '/api/jsonws/Events-portlet.b2bexchange/remove-b2b-exchange/id/' + ex.exchangeId;
            		
            		console.log('deleting the following listing: ' + JSON.stringify(ex));
            		$http.post(query).
            			success(function(data) {
    			        	$scope.listingIdToRemove = 0;
    			        	
    			        	// remove entry for list
    			        	$scope.allBusinessList.splice($scope.indexOfListingToRemove, 1);
    			        	
    			        	// decrement total loaded
    			        	$scope.businessTotalLoaded--; 

    			        	// check if more need to be loaded
    			        	if ($scope.businessTotalLoaded < $scope.businessLength) {
    			        		$scope.loadmoreBusiness();
    			        	};
            			});
            	};
            	
            	
            	/*
            	 * 
            	 * EDIT LISTING
            	 * 
            	 * */
            	$scope.editListing = function(index) {
            		var ex = $scope.allBusinessList[index];
            		
               		console.log('edit exchange: ' + JSON.stringify(ex));
            		$scope.copyEditListing = {
           				exchangeId: ex.exchangeId,
        				exchange: ex.exchange,
                		headline: ex.headline,
                		message: ex.message,
                		youtubeUrl: ex.youtubeUrl
            		};
            	};
            	
            	/*
            	 * 
            	 * POST EDITED LISTING
            	 * 
            	 * */
            	
            	$scope.updateListing = function(){
            		console.log("update listing: " + JSON.stringify($scope.copyEditListing));
            		
            		var youtube;
            		if ($scope.copyEditListing.youtubeUrl.length > 0) {
            			youtube = "/youtube-url/" + encodeURIComponent($scope.copyEditListing.youtubeUrl);
            		}
            		else {
            			 youtube = "/-youtube-url/";
            		}
            		
					$http.post("/api/jsonws/Events-portlet.b2bexchange/update" +
            			"/exchange-id/" + $scope.copyEditListing.exchangeId +
            			"/exchange/" + encodeURIComponent($scope.copyEditListing.exchange) +
            			"/headline/" + encodeURIComponent($scope.copyEditListing.headline) +
            			"/message/" + encodeURIComponent($scope.copyEditListing.message) +
            			youtube            		
						).
			        success(function(data) 
			        {
			        	console.log("update listing success:" + JSON.stringify(data));
			        });
            		
            	};
            	

			});

			return [ myModule.name ];
	});
})(Liferay, angular, window, undefined);