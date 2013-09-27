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
        	<h4 class="page-color02">Logistics</h4>
        	</div><!-- end .sub-left -->
            
            <div class="sub-nav">
            	<ul>
                	<li><a href="environment-rec.php"><span id="rec-sub"></span>REDUCING ENERGY &amp; CARBON</a></li>
                    <li><a href="environment-zero-waste.php"><span id="zero-sub"></span>Zero Waste</a></li>
                    <li class="selected"><a href="environment-transportation.php"><span id="trans-sub"></span>LOGISTICS</a></li>
                </ul>
            </div><!-- end .subnav -->
        	
        </div><!-- end .subnav -->

        <div class="interior-row">
        
		  <div class="left-col">

                    <div class="enviro-trans"></div>
                

            
            	<div class="left-col-l">
                	<!--<p>Infograph &amp; truck pics</p>-->
                    <p>Our store delivery fleet of <strong>2,700</strong> tractors and <strong>10,000</strong> trailers makes almost <strong>5,400</strong> deliveries every day. In 2011, that translated to traveling almost <strong>297</strong> million miles to our stores and facilities.</p>
                    <p class="last">We measure transportation efficiency improvements by cases shipped per gallon used.  In 2012, we improved our fleet efficiency by <strong>5.1% compared to 2011</strong>.  Kroger has increased its fleet efficiency by <strong>33.1% since 2008</strong>.  Our goal is to improve our fleet efficiency by <strong>40% by 2014!</strong></p>
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



