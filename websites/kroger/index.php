<?php 
	
	//Use this template for all pages and change or add what you need for that specific page. 

   // specific css to appear on a specific page or on every page $css = array('css/name-of-style.css');
   $css = array('css/jquery.fancybox.css');
   
   // specific js to appear on a specific page or on every page  ie: $js = array('js/name-of-script.js');
   $js = array('js/vendor/jquery.fancybox.pack.js', 'js/vendor/jquery.fancybox-media.js');
   
   //Site Title
   $title = "Kroger | 2013 Corporate Sustainability Report";
   
   //page specific class
   $body_class = "home";
   
   //page selected
   $nav_selected_class = "";
   
   ?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<?php include_once('inc/head.php')?>

    <body class="<?=$body_class?>">
    

        <div id="home-container">
        
        	<div id="home01"  class="small col01 row01 fade"><a href="index.php"><img src="img/home/home-logo.png" width="150" height="150" alt="kroger | 2013 Sustainability Report" /></a></div>
            <div id="home02"  name="0" class="small col02 row01 fade"><img src="img/home/home-02.jpg" width="150" height="150" alt="" /></div>
            <div id="home03"  name="1" class="small col03 row01 fade"><img src="img/home/home-03.jpg" width="150" height="150" alt="" /></div>
            <div id="home04"  name="3" class="small col04 row01 fade"><img src="img/home/home-04.jpg" width="150" height="150" alt="" /></div>
            <div id="home05"  name="4" class="small col05 row0 fade"><a href="http://sustainability.kroger.com/sustainability_sustainable_seafood/index.shtml" target="_blank"><img src="img/home/home-05.jpg" width="150" height="150" alt="" /></a></div>
            <div id="home06" class="small col06 row01 fade"><a target="_blank" href="pdf/kroger_2013_CSR.pdf"><img src="img/home/home-06.jpg" width="150" height="150" alt="Download Full Report" /></a></div>
            <div id="home07" name="13" class="large col01 row02"><img class="fade-1" src="img/home/home-07.jpg" width="470" height="310" alt="sustainability | Improving today to protect tomorrow." /></div>
            <div id="home08" class="medium col04 row02 fade-2"><a href="social.php"><img src="img/home/home-08.jpg" width="309" height="150" alt="Social" /></a></div>
            <div id="home09" name="5" class="small col06 row02 fade"><img src="img/home/home-09.jpg" width="150" height="150" alt="" /></div>
            <div id="home10" name="6" class="small col04 row03 fade"><img src="img/home/home-10.jpg" width="150" height="150" alt="" /></div>
            <div id="home11" class="medium col05 row03 fade-3"><a href="environment.php"><img src="img/home/home-11.jpg" width="310" height="150" alt="Environment" /></a></div>
            <div id="home12" name="7" class="small col01 row04 fade"><img src="img/home/home-12.jpg" width="150" height="150" alt="" /></div>
            <div id="home13" name="8" class="small col02 row04 fade"><img src="img/home/home-13.jpg" width="310" height="150" alt="" /></div>
            <div id="home15" class="medium col04 row04 fade-4"><a href="economic.php"><img src="img/home/home-15.jpg" width="309" height="150" alt="Economic" /></a></div>
            <div id="home16" name="9" class="small col06 row04 fade"><img src="img/home/home-16.jpg" width="150" height="150" alt="" /></div>
            <div id="home17" name="10" class="small col01 row05 fade"><img src="img/home/home-17.jpg" width="150" height="150" alt="" /></div>
            <div id="home18" name="11" class="small col02 row05 fade"><img src="img/home/home-18.jpg" width="150" height="150" alt="" /></div>
            <div id="home19" name="12" class="small col03 row05 fade"><img src="img/home/home-19.jpg" width="150" height="150" alt="" /></div>
            <div id="home20" class="medium col04 row05 fade"><a href="letter.php"><img src="img/home/home-20.jpg" width="310" height="150" alt="Read the Letter from the Chairman/CEO" /></a></div>
            <div id="home21" class="small col06 row05 fade"><a class="fancybox-media" href="http://www.youtube.com/embed/krnIYGy8IQE" ><img src="img/home/home-21.jpg" width="150" height="150" alt="Watch the What If? Video" /></a></div>
        
        </div>



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
        <script type="text/javascript">
            $(document).ready(function() {
                $('.fancybox-media').fancybox({
                    openEffect  : 'none',
                    closeEffect : 'none',
                    helpers : {
                        media : {}

                    },
                    afterLoad : function(){

                        $('<div class="fancybox-header"><div class="fancybox-content"><span class="pull-left"><p>What If?</p></span><span class="pull-right"><p>The What If? Video reflects data from the year 2010.</p></span></div></div>').prependTo('.fancybox-wrap');
                    }


                });

            });
        </script>


    </body>
</html>
