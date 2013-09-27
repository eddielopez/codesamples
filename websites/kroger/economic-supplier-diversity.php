<?php 
	
	//Use this template for all pages and change or add what you need for that specific page. 

   // specific css to appear on a specific page or on every page $css = array('css/name-of-style.css');
   $css = array();
   
   // specific js to appear on a specific page or on every page  ie: $js = array('js/name-of-script.js');
   $js = array('js/stories-tooltip.js');
   
   //Site Title
   $title = "Kroger | 2013 Corporate Sustainability Report";
   
   //page specific class
   $body_class = "economic diversity";
   
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
                	<li class="selected"><a href="economic-supplier-diversity.php"><span id="supplier-sub"></span>Supplier Diversity</a></li>
                    <li><a href="economic-eioc.php"><span id="economic-sub"></span>Economic Impact to Communities</a></li>
                </ul>
            </div><!-- end .subnav -->
        	
        </div><!-- end .subnav -->

        <div class="interior-row">
        
		  <div class="left-col">
            
            
            	<div class="left-col-l" style="margin-top: 0;">
               	    <p class="last">Diversity is one of Kroger’s core values and we have actively sought diversity among our vendor partners for more than 30 years. Minority-owned and women-owned business enterprises (MBEs and WBEs) along with other diverse-owned businesses provide products, services and perspectives that align with our strategies and help us better understand both our customers’ needs and trends in the marketplace.</p>
              </div><!-- end .left-col-l -->
              
              <div class="left-col-r">
              	
               <img src="img/values-logo.jpg"  width="114" height="95"/>
                
              </div><!-- end .left-col-r -->
            
            
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