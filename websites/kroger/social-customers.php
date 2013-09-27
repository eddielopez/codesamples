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
        	<h4>Sustainable Seafood</h4>
        	</div><!-- end .sub-left -->
            
            <div class="sub-nav">
            	<ul>
                	<li><a href="social-community.php"><span id="comm-sub"></span>community</a></li>
                    <li class="selected"><a href="social-customers.php"><span id="cust-sub"></span>customers</a></li>
                    <li><a href="social-associates.php"><span id="assoc-sub"></span>associates</a></li>
                </ul>
            </div><!-- end .subnav -->
        	
        </div><!-- end .subnav -->

        <div class="interior-row">
        
		  <div class="left-col">
            

                
                	<div class="soc-com"></div>
                

            
            	<div class="left-col-l">
                	<p>In 2009, Kroger began a partnership with the World Wildlife Fund (WWF). This partnership helps us make determinations about the sustainability of fisheries where we source our seafood.</p>
                	<p>By 2015, our goal is to source 100% of our top 20 wild-caught species from fisheries that are Marine Stewardship Council (MSC) certified, in MSC full assessment, or engaged in a WWF fishery improvement project. Today, we are at <strong>68%</strong> of our goal.</p>
               	    <p class="last">To learn more  about how we are positively impacting our oceans, visit our Sustainable Seafood microsite <a class="page-color" target="_blank" href="http://sustainability.kroger.com/sustainability_sustainable_seafood/wild-caught.shtml">here</a>.</p>

              </div><!-- end .left-col-l -->
              
              <div class="left-col-r">
              	
                
                
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