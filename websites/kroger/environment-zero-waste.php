<?php 
	
	//Use this template for all pages and change or add what you need for that specific page. 

   // specific css to appear on a specific page or on every page $css = array('css/name-of-style.css');
   $css = array();
   
   // specific js to appear on a specific page or on every page  ie: $js = array('js/name-of-script.js');
   $js = array('js/stories-tooltip.js');
   
   //Site Title
   $title = "Kroger | 2013 Corporate Sustainability Report";
   
   //page specific class
   $body_class = "environment waste";
   
   //page selected
   $nav_selected_class = ".environment-mn";
   
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
   	    <img src="img/environment/environment-rec.png" width="269" height="31" alt="" />
        	<h4 class="page-color02">Zero Waste</h4>
        	</div><!-- end .sub-left -->
            
            <div class="sub-nav">
            	<ul>
                	<li><a href="environment-rec.php"><span id="rec-sub"></span>REDUCING ENERGY &amp; CARBON</a></li>
                    <li class="selected"><a href="environment-zero-waste.php"><span id="zero-sub"></span>Zero Waste</a></li>
                    <li><a href="environment-transportation.php"><span id="trans-sub"></span>LOGISTICS</a></li>
                </ul>
            </div><!-- end .subnav -->
        	
        </div><!-- end .subnav -->

        <div class="interior-row">
        
		  <div class="left-col">
            
            	<div class="left-col-l ww">
                	  <img src="img/environment/waste-wise.jpg" width="214" height="237" alt="" class="waste-wise" />
                	  <span class="disclaimer"><p>Use of this logo does not imply EPA endorsement.</p></span>
                    <p class="last">Moving our facilities toward &ldquo;Zero Waste&rdquo; is one of Kroger’s key sustainability priorities.  In 2012, Kroger joined the EPA’s WasteWise Program and adopted the EPA’s &ldquo;zero waste&rdquo; definition for our company-wide sustainability efforts. This nationally recognized program gives us a way to benchmark, measure and communicate our efforts in a more consistent and cohesive way. It allows us to track individual waste streams and track our progress over time. Our goal is to ultimately meet and exceed the EPA’s Zero Waste threshold of 90%, in all our facilities.</p>
              </div><!-- end .left-col-l -->
              
            
          </div><!-- end .left-col -->
            
          <div class="right-col">
            
           	<h5 class="page-color">Sustainability Stories</h5>
            
            <?php include_once('inc/enviro-stories.php')?>
            
            
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