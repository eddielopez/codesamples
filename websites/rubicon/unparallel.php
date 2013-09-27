<?php 

   // Site Assests
   $css = array('css/normalize.min.css', 'css/style.css', 'css/webfonts.css');
   
   $js = array('js/cycle.js', 'js/unparalled.js', 'js/rubicon.js', 'js/fixScroll.js');
   
   //Site Title
   $title = "Rubicon | 2012 Annual Report";
   
   
   $body_class = "interior-page";
?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
		<?php include('inc/head.php') ?>
		
      
        
		<script src="js/vendor/modernizr-2.6.2.min.js"></script>
    
    </head>
    <body class="<?=$body_class?>">
   		<?php include('inc/nav.php') ?>
        <?php include('inc/downloads.php') ?>
        
        
        <div class="content">
            
            	<div class="col2" id="unparalleld-page">
                	
                    <ul id="unparalleled-nav">
                    	
                        <li><a id="opportunity">Opportunity</a><span class="blue-arrow"></span></li>
                        
                                                
                        
                        <li><a id="leadership">Leadership</a><span class="blue-arrow"></span></li>
                        
                        <li><a id="innovation">Innovation</a><span class="blue-arrow"></span></li>
                
                	</ul>
                
      
                </div><!-- end .2col .left-->

		  <div class="col2 last" id="unparalleled-page" style="float:right;" >
                
                	<div class="mega-intro">
                    	
                        <div class="titlebg"> 
                        	<div class="page-title">       
                            
								<?php include_once('inc/opportunity/title.php')?>
                                <?php include_once('inc/leadership/title.php')?>
                                <?php include_once('inc/innovation/title.php')?>
                           
                                
                             </div><!-- end .page-title -->
                          </div><!-- end .titlbg -->
                		
                        
                        <div class="page-img behind">
                       	
                         <img src="img/opportunitylarge.jpg" />
                         <img src="img/leadershiplarge.jpg" />
                          <img src="img/innovationlarge.jpg" />
                       
                       </div>
                        
                
                 	</div><!-- end .mega-intro -->
                
                	
                
                
                
                
         
                </div><!-- end .2col .main-rcol --> 
                
                <div class="content-right behind">
                
                
                	<?php include_once('inc/opportunity/content.php') ?>
                    <?php include_once('inc/leadership/content.php') ?>
					<?php include_once('inc/innovation/content.php')?>
                
                
                </div><!-- end .content-right -->
                
                
                <div class="clearfix"></div>               
                
        
        </div><!-- end .content -->
    
        
        
        
        
        
		<?php include('inc/footer.php') ?>
        
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.9.1.min.js"><\/script>')</script>  
        <?php include('inc/scripts.php') ?>      
    </body>
</html>
