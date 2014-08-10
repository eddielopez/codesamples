				<div class="content-filter">
                    	<form class="form-inline" role="form" ng-submit="search()">
                       		<div class="form-group">
                            	<select class="form-control selectpicker" id="filter_type" ng-model="searchRequest.exchange">
	                                <option value="none">- Select Exchange -</option>
	                                <option value="Concert">Concert</option>
	                                <option value="Conference">Conference</option>
	                                <option value="Conference Call">Conference Call</option>
	                                <option value="Convention">Convention</option>
	                                <option value="Educational">Educational</option>
	                                <option value="Fundraiser">Fundraiser</option>
	                                <option value="Networking">Networking</option>
	                                <option value="Open House">Open House</option>
	                                <option value="Other Event">Other Event</option>
	                                <option value="Political">Political</option>
	                                <option value="Seminar">Seminar</option>
	                                <option value="Show">Show</option>
	                                <option value="Technology">Technology</option>
	                                <option value="Webinar">Webinar</option>
	                            </select>
	                        </div>
	                        <div class="form-group">
	                            <select class="form-control selectpicker" id="filter_dist" ng-model="searchRequest.distance">
	                                <option value="none">- Within -</option>
	                                <option value="5">5 Miles</option>
	                                <option value="10">10 Miles</option>
	                                <option value="15">15 Miles</option>
	                                <option value="20">20 Miles</option>
	                                <option value="25">25 Miles</option>
	                                <option value="50">50 Miles</option>
	                                <option value="100">100 Miles</option>
	                                <option value="250">250 Miles</option>
	                                <option value="500">500 Miles</option>
	                                <option value="1000">1000 Miles</option>
	                            </select>
	                        </div>
	                        <div class="form-group">
	                            <label for="filter_zip_address" class="sr-only">Zip Code</label>
	                            <input type="text" id="filter_zip_address" placeholder="Zip Code" ng-model="searchRequest.zipcode" />
	                        </div>
	                        <button class="btn btn-warning" type="submit">Search</button>
	                    </form>
	                </div><!-- end .content-filter -->