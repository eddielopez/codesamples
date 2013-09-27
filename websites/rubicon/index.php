<?php 

   // Site Assests
   $css = array('css/normalize.min.css','css/style.css', 'css/webfonts.css');
   $js = array('js/rubicon.js', 'js/cycle.js', 'js/home.js');
   
   //Site Title
   $title = "Rubicon | 2012 Annual Report";
   
   $body_id = "home";
   
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
    <body id="<?=$body_id?>">
    
   		<?php include('inc/nav.php') ?>
        
        <?php include('inc/downloads.php') ?>
        
        
    	
        <div id="home-wrapper">
        
                
        
        
        </div><!-- end #home-container -->
        
        
        	<div class="container">
        
        
                
             
             
        		<div id="unparalled-box">
                
                	<div id="unparalled-arrow"></div><!--end #unparalled-arrow-box-->
                    	
                        <div class="home-slider" id="text-cycle">
                        
                        		<div> 
                                	
                                    <div class="text-offset1"><span id="opp-text"></span></div>
                            	
                                </div>
                            
                            
                                <div>
                            	
                                	<div class="text-offset1">
                                    	<span id="lead-text"></span>
                                    
                                    </div>
                                
                                </div>
                                
                                
                                <div> 
                                
                                	<div class="text-offset1">
                                        
                                        <span id="innov-text"></span>
                                    
                                    </div>
                                
                                </div>
                        
                        </div><!-- end .home-sloder #text-cycle -->
                        
                        <div id="difference-container">
                        
                        	<div id="difference">
                            	
                                <a href="unparalleled">Come See Our <span>Difference</span>
                                
                                <a href="unparalleled" class="blue-arrow"></a>
                            
                            </div>
                         
                        </div>
            
        
        		</div><!-- end #unparalleed-box -->
                
                
                </div><!-- end .container -->
                
        
        
        
        
        
        
		<?php include('inc/footer.php') ?>
        
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.9.1.min.js"><\/script>')</script>  
        <?php include('inc/scripts.php') ?>       
    </body>
</html>
