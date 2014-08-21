<%@page import="com.liferay.portal.kernel.util.WebKeys"%>
<%@page import="com.liferay.portal.theme.ThemeDisplay"%>
<%@ taglib uri="http://java.sun.com/portlet_2_0" prefix="portlet" %>

<portlet:defineObjects />
<%
	ThemeDisplay td = (ThemeDisplay) request.getAttribute(WebKeys.THEME_DISPLAY);
%>

<script type="text/javascript" src="/Events-portlet/js/jquery.min.js"></script>
<script type="text/javascript">var userId=<%=td.getUserId()%></script>


<div ng-controller="B2bExchgCntrl">
    <%@include file="tabs.jsp" %>
        <div class="col-lg-12">
            <div class="tab-content opporunities">
                <%@include file="allExchange.jsp" %>
                <%@include file="ourExchange.jsp" %>
                <%@include file="savedExchange.jsp" %>
                <%@include file="help.jsp" %>
            </div>
        </div>
</div><!--  end exchangecntrl -->