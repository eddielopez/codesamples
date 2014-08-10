
    <div class="tab-pane active" id="all-exchange">
        <div class="col-sm-12">
            <div class="row">
              <div class="text-center">
                    <h1>Exchange Business Ideas, Resources, and More!</h1>
              </div>
                    <%@include file="contentFilter.jsp" %>
                    
                     <div infinite-scroll="loadmore()" infinite-scroll-distance="0">
                     	<div ng-repeat="exchange in allExchangeList track by $index" b2b-exchange portlet-path="<%=request.getContextPath()%>"></div>
                     </div><!-- loadMore -->
                             
                	<div ng-show='loadmore.isBusy' class="text-center">
                		<img src="/WinWinTheme-theme/images/assets/ajax-loader.gif" alt=""/>
                	</div>
            </div>
        </div>
    </div>
    <%@include file="../modals/editB2b.html"%>
    <%@include file="../modals/alert/removeB2b.html"%>
    <!-- <script type="text/javascript">
	     $(function(){
	    	 $('.media-body').readmore({
	    			 moreLink: '<div class="expand-post text-center"><a href="#" class="text-muted"><img src="/WinWinTheme-theme/images/assets/opportunities/arrow-down.png" /><span>Open Posting</span></a></div>',
	    	        lessLink: '<div class="expand-post text-center"><a href="#" class="text-muted"><img src="/WinWinTheme-theme/images/assets/opportunities/arrow-up.png" /><span>Close Posting</span></a></div>',
	    	        startOpen: false,
	    	        sectionCSS:false,
	    	        afterToggle: function(trigger, element, expanded) {
	    	            if(! expanded) { // The "Close" link was clicked
	    	              $('html, body').animate( { scrollTop: element.offset().top }, {duration: 100 } );
	    	            }
	    	          }
	    	 }); 
	     });
    </script> -->