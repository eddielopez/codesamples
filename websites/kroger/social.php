<?php 
	
	//Use this template for all pages and change or add what you need for that specific page. 

   // specific css to appear on a specific page or on every page $css = array('css/name-of-style.css');
   $css = array();
   
   // specific js to appear on a specific page or on every page  ie: $js = array('js/name-of-script.js');
   $js = array();
   
   //Site Title
   $title = "Kroger | 2013 Corporate Sustainability Report";
   
   //page specific class
   $body_class = "social";
   
   //page selected
   $nav_selected_class = ".social-mn";
   
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
        
        <div id="social-head">
        	
            <div id="social-header"><img src="img/social/social-header.fw.png" width="415" height="129" alt="SOCIAL" /></div>
            <div id="social-cloud01"><img src="img/social/social-left-cloud.fw.png" width="328" height="147" alt="" /></div>
            <div id="social-cloud02"><img src="img/social/social-right-cloud.fw.png" width="328" height="142" alt="" /></div>
            <div id="social-sub"><p>Learn more about our social responsibility:</p></div>
            
        </div><!-- end .social-header -->
        
        	<div class="span-3">
            
            
            <a href="social-community.php" class="community"><span id="community-icon"></span>community</a>
            
            
            
          
            </div><!-- end .span-3 -->
            
            
            
            
            <div class="span-3">
            
            
            
            <a href="social-customers.php" class="customers"><span id="customers-icon"></span>customers</a>
            
           
            </div><!-- end .span-3 -->
            
            
            <div class="span-3 last">
            
            
            
            <a href="social-associates.php" class="associates"><span id="associates-icon"></span>associates</a>
            
            
            
            </div><!-- end .span-3 -->
            
            
            </div><!-- end .header-bkgrnd -->
            
            
            <div class="co-bar">
           	  	<div class="dec01"></div>
                <div class="callout01">
                	<p>
                	<span>200 Million</span><br>
                	      Meals Donated
                	</p>
                </div>
                <div class="callout02">
                	<p>
                	<span>259 Million</span><br>
                	      Cage-Free Eggs Sold
                	</p>
                </div>
                <div class="callout03">
                	<p>
                	<span>$1.5 Billion</span><br>
                	     Associate Benefits
                	</p>
                </div>
                <div class="dec02"></div>
            </div>

            <div class="sustainability-story">
                <a href="social-sustainability-stories.php">View Our Sustainability Stories</a>
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