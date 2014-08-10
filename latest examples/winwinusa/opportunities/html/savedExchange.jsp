    <div class="tab-pane" id="saved-exchange">
        <div class="col-sm-12">
            <div class="row">

                <div class="text-center">
                  <h1>Saved Items</h1>
                </div>
                <div infinite-scroll="loadmoreSaved" infinite-scroll-distance="0">
                	<div class="media" ng-repeat="saved in allSavedList track by $index">
                		<div class="pull-left content-left">
                                  <a href="#">
                                    <img class="media-object img-responsive" src="/WinWinTheme-theme/images/assets/opportunities/profile-pic1.png" alt="">
                                  </a>
                                  <ul class="text-center options list-unstyled">
                                    <li>
                                      <a href="#">
                                        <img src="/WinWinTheme-theme/images/assets/opportunities/pin.png" />
                                        <small>Unsave Listing</small>
                                      </a>
                                    </li>
                                  </ul>
                                </div>
                                <div class="pull-right post-info text-center">
                                  <p><small class="text-muted">Tuesday</small></p>
                                  <img src="/WinWinTheme-theme/images/assets/opportunities/loudspeaker.png" />
                                </div>
                                <div class="media-body">
                                  <h4 class="media-heading">{{saved.headline}}</h4>
                                  <p>{{saved.message}}</p>
                                  <div class="expand-post text-center">
                                    <a href="#" class="text-muted">
                                      <span>Expand Posting</span>
                                      <img src="/WinWinTheme-theme/images/assets/opportunities/arrow-down.png" />
                                    </a>
                                  </div>
                                </div>
                  	</div><!-- saved item -->
                  </div><!--  infinite scroll -->



            </div>
        </div>
    </div>