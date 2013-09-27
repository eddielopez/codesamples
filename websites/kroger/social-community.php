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
        	<h4>Fighting Hunger</h4>
        	</div><!-- end .sub-left -->
            
            <div class="sub-nav">
            	<ul>
                	<li class="selected"><a href="social-community.php"><span id="comm-sub"></span>community</a></li>
                    <li><a href="social-customers.php"><span id="cust-sub"></span>customers</a></li>
                    <li><a href="social-associates.php"><span id="assoc-sub"></span>associates</a></li>
                </ul>
            </div><!-- end .subnav -->
        	
        </div><!-- end .subnav -->

        <div class="interior-row">
        
		  <div class="left-col">
            




                    <div class="soc-info"></div>
                

            
            	<div class="left-col-l">
                	<p>Our number one community priority is to support organizations that 
                		bring food and hope to our hungry neighbors.  In 2012, we provided 
                		the largest donation in our company’s history.  A founding partner 
                		of Feeding America, the nation’s largest domestic hunger agency, 
                		we work with more than 80 local food banks, and have done so for 
                		more than 30 years. Kroger is among the top tier of donors to Feeding&nbsp;America.</p>
                	<p class="last">Kroger annually partners with our customers and vendors in the nationwide cause marketing program <strong>Bringing Hope to the Table.</strong> To learn more about this program, please visit <a class="page-color" href="http://www.bringinghopetothetable.com" target="_blank">www.bringhopetothetable.com</a>.</p>
              </div><!-- end .left-col-l -->
              
              <div class="left-col-r">
              	
              <a href="http://www.bringinghopetothetable.com " target="_blank"><img src="img/social/bringing-hope.jpg" width="198" height="92" alt="Bringing Hope To the Table" /></a></div><!-- end .left-col-r -->
            
            
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