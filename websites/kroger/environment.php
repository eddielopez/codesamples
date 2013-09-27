<?php 
	
	//Use this template for all pages and change or add what you need for that specific page. 

   // specific css to appear on a specific page or on every page $css = array('css/name-of-style.css');
   $css = array();
   
   // specific js to appear on a specific page or on every page  ie: $js = array('js/name-of-script.js');
   $js = array();
   
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

        <div class="interior-row">
        
        
        <div id="header-bkgrnd">
        
        <div id="environment-head">
        	
            <div id="e-header"><img src="img/environment/environment-headline.fw.png" width="638" height="221" alt="ENVIRONMENT" /></div>
            
        </div><!-- end .social-head -->
        
        	<div class="span-3">
            
            
            <a href="environment-rec.php" class="rec"><span id="rec-icon"></span>ENERGY &amp; CARBON<br>
 FOOTPRINT</a>
            
            
            
          
            </div><!-- end .span-3 -->
            
            
            
            
            <div class="span-3">
            
            
            
            <a href="environment-zero-waste.php" class="zero-waste"><span id="zero-waste-icon"></span>ZERO WASTE</a>
            
           
            </div><!-- end .span-3 -->
            
            
            <div class="span-3 last">
            
            
            
            <a href="environment-transportation.php" class="transportation"><span id="transportation-icon"></span>LOGISTICS</a>
            
            
            
            </div><!-- end .span-3 -->
            
            
            </div><!-- end .header-bkgrnd -->
            
            
            <div class="co-bar">
           	  <div class="dec01"></div>
               <div class="callout01">
                	<p>
                	<span>4.85%</span><br>
                	      Reduction of<br> 
                	      Carbon Footprint
                	</p>
                </div>
                <div class="callout02">
                	<p>
                	<span>32 Million Lbs.</span><br>
                	      Plastics Recycled
                	</p>
                </div>
                <div class="callout03">
                	<p>
                	<span>33.1%</span><br>
                	     Improved Fleet<br> 
                	     Productivity
                	</p>
                </div>
                <div class="dec02"></div>
            </div>

            <div class="sustainability-story">
                <a href="environment-sustainability-stories.php">View Our Sustainability Stories</a>
                <span class="arrow"></span>
            </div>
        
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