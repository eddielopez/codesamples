<?php 
	
	//Use this template for all pages and change or add what you need for that specific page. 

   // specific css to appear on a specific page or on every page $css = array('css/name-of-style.css');
   $css = array();
   
   // specific js to appear on a specific page or on every page  ie: $js = array('js/name-of-script.js');
   $js = array('js/stories-tooltip.js');
   
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

	<div class="subnav-bar">
        
        	<div class="sub-left">
   	    <img src="img/social/social-fight-hunger.png" width="139" height="34" alt="" />
        	<h4>Associate Safety</h4>
        	</div><!-- end .sub-left -->
            
            <div class="sub-nav">
            	<ul>
                	<li><a href="social-community.php"><span id="comm-sub"></span>community</a></li>
                    <li><a href="social-customers.php"><span id="cust-sub"></span>customers</a></li>
                    <li class="selected"><a href="social-associates.php"><span id="assoc-sub"></span>associates</a></li>
                </ul>
            </div><!-- end .subnav -->
        	
        </div><!-- end .subnav -->

        <div class="interior-row">
        
		  <div class="left-col">
            <div class="soc-info-associates">

            </div>
            	<div class="left-col-l">
                	<p>We believe our industry-leading safety results make our stores, manufacturing plants and facilities among the safest places to work in America. Safety is a core value at Kroger. Keeping our 343,000 associates safe is one way we demonstrate our commitment to them.</p>
                    <p class="last"><img src="img/social/associate-photos.jpg" width="492" height="103" alt="" /></p>
              </div><!-- end .left-col-l -->
              
              <div class="left-col-r">
              	
                <blockquote class="page-color">
                	<span><strong>&ldquo;</strong></span>In 1995, Kroger launched a safety initiative that has <strong>reduced our overall accident rate by 76.3%.</strong><strong>&rdquo;</strong> 
                </blockquote>
                
              </div><!-- end .left-col-r -->
            
            
          </div><!-- end .left-col -->
            
          <div class="right-col">
            
           	<h5 class="page-color">Sustainability Stories</h5>
            
           <?php include_once('inc/social-stories.php') ?>
            
            
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