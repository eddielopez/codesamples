    <div class="tab-pane" id="our-exchange">
        <div class="col-sm-12">
            <div class="row">
                <div class="text-center">
                    <h1>Our Exchange</h1>
                </div>
                <div infinite-scroll="loadmoreBusiness()" infinite-scroll-distance="0">
                	<div ng-repeat="exchange in allBusinessList track by $index" b2b-exchange b2b-business-tab="true" portlet-path="<%=request.getContextPath()%>"></div>
                </div><!-- loadMore -->
                
                <div ng-show='businessIsBusy' class="text-center">
                	<img src="/WinWinTheme-theme/images/assets/ajax-loader.gif" alt=""/>
                </div>
            </div>
        </div>
    </div>