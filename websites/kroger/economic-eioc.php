<?php 
	
	//Use this template for all pages and change or add what you need for that specific page. 

   // specific css to appear on a specific page or on every page $css = array('css/name-of-style.css');
   $css = array();
   
   // specific js to appear on a specific page or on every page  ie: $js = array('js/name-of-script.js');
   $js = array('js/stories-tooltip.js');
   
   //Site Title
   $title = "Kroger | 2013 Corporate Sustainability Report";
   
   //page specific class
   $body_class = "economic";
   
   //page selected
   $nav_selected_class = ".economic-mn";
   
   ?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<?php include_once('inc/head.php')?>

    <body class="<?=$body_class?>">
    
    
    	<?php include_once('inc/header.php'); ?>

	<div class="subnav-bar">
        
        	<div class="sub-left">
   	    <img src="img/economic/economic-sub-head.png" width="189" height="30" alt="" />
        	<h4 class="page-color">Economic Impact to Communities</h4>
        	</div><!-- end .sub-left -->
            
            <div class="sub-nav">
            	<ul>
                	<li><a href="economic-supplier-diversity.php"><span id="supplier-sub"></span>Supplier Diversity</a></li>
                    <li class="selected"><a href="economic-eioc.php"><span id="economic-sub"></span>Economic Impact to Communities</a></li>
                </ul>
            </div><!-- end .subnav -->
        	
        </div><!-- end .subnav -->

        <div class="interior-row">
        
		  <div class="left-col">
		  	
		  	<div class="col-3 col-left">
		  		<div id="first">
		  			<p>
                	<span>$96.8B</span><br>
                	      in total sales
                	</p>
		  		</div><!-- end #first -->
		  		<div id="second">
		  			<p>
                	<span>130 years</span><br>
                	      in business
                	</p>
		  		</div><!-- end #second -->
		  	</div><!-- end .col-3 .col-left-->
		  	
		  	<div class="col-3 col-middle">
		  		<div id="first">
		  			<p>
		  				<span>37 plants</span><br>
                              producing corporate<br>
                              brand product
                	</p>
		  		</div><!-- end #first -->
		  		<div id="second">
		  			<p>
                	<span>2,424</span><br>
                	      grocery stores<br>
                	      in 31 states
                	</p>
		  		</div><!-- end #second -->
		  	</div><!-- end .col-3 .col-middle -->
		  	
		  	<div class="col-3 col-right">
		  		<div id="first">
		  			<p>
                	<span>343,000<br> associates</span><br>
                		  who make a difference<br>

                	</p>
		  		</div><!-- end #first -->
		  		<div id="second">
		  			<div class="inner-2-col" id="inner-first">
		  				<p>
                		<span>$1.5B</span><br>
                	     	returned to<br> shareholders
                		</p>
		  			</div><!-- end .second-col2 -->
		  			<div class="inner-2-col last" id="inner-second">
		  				<p>
                		<span>$2B</span><br>
                	     	  in capital<br>
                	     	  investment
                		</p>
		  			</div><!-- end .second-col2 -->		  			
		  		</div><!-- end #second -->
		  	</div><!-- <!-- end .col-3 .col-right -->
  
        	<div class="left-col-l">
            		
            		<p class="last">Customers trust us each and every day to help feed their 
            			families and we are grateful for that trust.  We’re proud to be part 
            			of your neighborhood and we will continue to use our resources to reinvest 
            			in our communities, associates, shareholders, and customers.</p>
            			
                </div><!-- end .left-col-l -->
          
          </div><!-- end .left-col -->
            
          <div class="right-col">
            
           	<h5 class="page-color">Sustainability Stories</h5>
            
           <?php include_once ('inc/eco-stories.php') ?>
            
        
            <p class="last"></p>
            
            </div><!-- end .left-col -->
        
        </div><!-- end .interiror-row -->
        
        
        <?php include_once('inc/footer.php');?>

        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.9.1.min.js"><\/script>')</script>
        <script src="js/plugins.js"></script>
        <script src="js/main.js"></script>
        
        <script>
			$(document).ready(function () {
				$("<?=$nav_selected_class?>").addClass("selected");
			});
		</script>
        
        <?php include_once('inc/scripts.php')?>
    </body>
</html>