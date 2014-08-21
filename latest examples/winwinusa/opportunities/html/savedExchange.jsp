    <div class="tab-pane" id="saved-exchange">
        <div class="col-sm-12">
            <div class="row">

                <div class="text-center">
                  <h1>Saved Items</h1>
                </div>
                <div infinite-scroll="loadmoreSaved()" infinite-scroll-distance="0">
                	<div ng-repeat="exchange in allSavedList track by $index" b2b-exchange b2b-saved-tab="true" portlet-path="<%=request.getContextPath()%>"></div>
                </div><!-- loadMore -->
                
                <div ng-show='savedIsBusy' class="text-center">
                	<img src="/WinWinTheme-theme/images/assets/ajax-loader.gif" alt=""/>
                </div>
            </div>
        </div>
    </div>