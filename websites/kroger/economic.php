<?php 
	
	//Use this template for all pages and change or add what you need for that specific page. 

   // specific css to appear on a specific page or on every page $css = array('css/name-of-style.css');
   $css = array();
   
   // specific js to appear on a specific page or on every page  ie: $js = array('js/name-of-script.js');
   $js = array();
   
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

        <div class="interior-row">
        
        
        <div id="header-bkgrnd">
        
        <div id="economic-head">
        
        	<div id="economic-buildings"><img src="img/economic/ecomomic-buildings.fw.png" width="261" height="130" alt="" /></div>
        	
            <div id="economic-header"><img src="img/economic/economic-head.fw.png" width="522" height="90" alt="ECONOMIC" /></div>
            
        </div><!-- end .economic-header -->
        
        
        <div id="eco-left"></div>
        
        	<div class="span-3">
            
            
            <a href="economic-supplier-diversity.php" class="supplier-diversity"><span id="supplier-icon"></span>SUPPLIER DIVERSITY</a>
            
            
            
          
            </div><!-- end .span-3 -->
            

            
            
            <div class="span-3 last">
            
            
            
            <a href="economic-eioc.php" class="economic-impact"><span id="economic-icon"></span>ECONOMIC IMPACT<br>
TO COMMUNITIES</a>
            
            
            
            </div><!-- end .span-3 -->
            
            <div id="eco-right"></div>
            
            
            </div><!-- end .header-bkgrnd -->
            
            
            <div class="co-bar">
           	  <div class="dec01"></div>
                <div class="callout01">
                	<p>
                	<span>$96.8 Billion</span><br>
                	      Revenue
                	</p>
                </div>
                <div class="callout02">
                	<p>
                	<span>33,000</span><br>
                	      Jobs Created
                	</p>
                </div>
                <div class="callout03">
                	<p>
                	<span>Billion Dollar</span><br>
                	<span>Roundtable</span><br>
                          Member
                	</p>
                </div>
                <div class="dec02"></div>
            </div>

            <div class="sustainability-story">
                <a href="economic-sustainability-stories.php">View Our Sustainability Stories</a>
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