<?php 
	
	//Use this template for all pages and change or add what you need for that specific page. 

   // specific css to appear on a specific page or on every page $css = array('css/name-of-style.css');
   $css = array();
   
   // specific js to appear on a specific page or on every page  ie: $js = array('js/name-of-script.js');
   $js = array('js/stories-tooltip.js');
   
   //Site Title
   $title = "Kroger | 2013 Corporate Sustainability Report";
   
   //page specific class
   $body_class = "environment";
   
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
        	<h4 class="page-color02">Energy &amp; Carbon Footprint</h4>
        	</div><!-- end .sub-left -->
            
            <div class="sub-nav">
            	<ul>
                	<li class="selected"><a href="environment-rec.php"><span id="rec-sub"></span>ENERGY &amp; CARBON FOOTPRINT</a></li>
                    <li><a href="environment-zero-waste.php"><span id="zero-sub"></span>Zero Waste</a></li>
                    <li><a href="environment-transportation.php"><span id="trans-sub"></span>LOGISTICS</a></li>
                </ul>
            </div><!-- end .subnav -->
        	
        </div><!-- end .subnav -->

        <div class="interior-row">
        
		  <div class="left-col">
            


                    <div class="enviro-nrg"></div>

            
            	<div class="left-col-l">
                	<!--<p>Energy info graph</p>-->
                	  <p>Kroger continues to work aggressively in all areas of our business to reduce energy consumption. Our new and remodeled stores use the latest technology to make a big difference in energy efficiency. This translates into a significant reduction in operating costs and our carbon footprint.</p>
<p>Kroger uses the ENERGY STAR program to track and assess energy consumption across our retail locations. We can benchmark building energy performance, assess energy management goals over time, and identify strategic opportunities for savings. </p>
                      <p class="last">In part, this work resulted in a <strong>4.85% reduction of our carbon footprint</strong>, compared to&nbsp;2011.</p>
              </div><!-- end .left-col-l -->
              
              <div class="left-col-r">
              	
               
                
              </div><!-- end .left-col-r -->
            
            
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