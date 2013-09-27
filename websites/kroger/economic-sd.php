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

	<div class="subnav-bar">
        
        	<div class="sub-left">
   	    <img src="img/economic/economic-sub-head.png" width="189" height="30" alt="" />
        	<h4 class="page-color">Supplier Diversity</h4>
        	</div><!-- end .sub-left -->
            
            <div class="sub-nav">
            	<ul>
                	<li></li>
                    <li></li>
                </ul>
            </div><!-- end .subnav -->
        	
        </div><!-- end .subnav -->

        <div class="interior-row">
        
		  <div class="left-col">
            
            
            	<div class="left-col-l">
                	<p>Diversity is one of Kroger’s core values and we have actively sought diversity among our vendor partners for more than 25 years. Minority- owned, and women-owned business enterprises (MBEs and WBEs); along with other diverse-owned businesses, provide products, services and perspectives that align with our business strategies and help us better understand both our customers’ needs and trends in the marketplace. We value our business relationships with these M/WBEs because they continue to facilitate employment opportunities in our local communities and their products and services produce positive sales results.</p>
               	    <p class="last"><strong>Supplier Diversity Champions</strong><br>
Each Kroger division and buying group has supplier diversity champions committed to ensuring that our supplier diversity goals and initiatives are communicated throughout the organization. These champions hold a variety of positions within the company and their valuable insights support our continued growth.</p>
              </div><!-- end .left-col-l -->
              
              <div class="left-col-r">
              	
                <blockquote class="page-color">
                	<span><strong>&ldquo;</strong></span>This recognition is especially important to us because it indicates that our supplier diversity initiatives continue to have a positive effect on the lives of our suppliers, customers and the communities in which we&nbsp;operate.<strong>&rdquo;</strong> 
                </blockquote>
                
              </div><!-- end .left-col-r -->
            
            
          </div><!-- end .left-col -->
            
          <div class="right-col">
            
           	<h5 class="page-color">Sustainability Stories</h5>
            
            <a href="#" class="page-color">
            <img src="img/social/story-01.jpg" width="150" height="100" alt="" /><br>
Sustainability Story 01&raquo;</a>
            
            
            <a href="#" class="page-color"><img src="img/social/story-02.jpg" width="150" height="100" alt="" /><br>
Sustainability Story 02&raquo;</a>
            
            
            <a href="#" class="page-color"><img src="img/social/story-03.jpg" width="150" height="100" alt="" /><br>
Sustainability Story 03&raquo;</a>
            
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