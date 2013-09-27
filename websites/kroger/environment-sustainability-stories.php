<?php

//Use this template for all pages and change or add what you need for that specific page.

// specific css to appear on a specific page or on every page $css = array('css/name-of-style.css');
$css = array();

// specific js to appear on a specific page or on every page  ie: $js = array('js/name-of-script.js');
$js = array('js/stories-tooltip.js');

//Site Title
$title = "Kroger | 2013 Corporate Sustainability Report";

//page specific class
$body_class = "environment envi-stories sus";

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
        <img src="img/environment/social-stories-logo.jpg" width="239" height="31" alt="" />

        <h4>Sustainability Stories</h4>

    </div><!-- end .sub-left -->



</div><!-- end .subnav -->

<div class="interior-row">

    <div class="left-col">

        <div class="left-col-l">

         <div class="logo-layout">

            <img class="info" src="img/environment/story-4-infograph.jpg" />

            <h4>Food Waste</h4>

            <p>One way we will meet our “zero waste” goal is by focusing on food waste.  Kroger uses the EPA’s Food Waste Hierarchy as a framework
                to track and quantify our food waste reduction and diversion efforts.<br><br> In fact, we have a goal to increase our waste diversion
                to 65% by the end of 2013. And an additional 10% by the end of 2015.  Today, our stores divert 58% of their waste.</p>

         </div><!-- end .logo-layout -->

            <span class="story-divider clear-both"></span>

         <div class="info-logo-layout">

            <img class="info" src="img/environment/story-5-infograph.jpg" />

             <img class="logo" src="img/environment/story-5-logo.png" />

          <div class="content">

            <h4>Food Power</h4>

            <p>Regal Springs, one of our farm raised tilapia suppliers, lets nothing go to waste. After filleting the fish, the carcasses are transported to their bioplant, where the fish oil is extracted and then processed
                into biodiesel.  This biodiesel is used to run the company's boilers, energy generation plant, all the machinery at the processing plant and farms, as well as all the company trucks and vehicles!  Kroger supports
                the social and environmental efforts that Regal Springs brings to life.  They are a true supplier-partner in providing us some of the highest quality, freshest, most sustainable tilapia available.</p>




          </div><!-- end .content -->

         </div><!-- end .info-logo-layout -->
            <span class="story-divider clear-both"></span>

          <div class="logo-layout">



            <div class="plastic-content">

            <h4>Reusable Plastic Containers</h4>

            <p>We continue to increase our volume of fresh produce shipped in reusable plastic containers (RPCs). RPCs improve product quality and significantly reduce waste.</p>

            <p>This year, we will use an additional <strong>ten million</strong> for more fresh produce like oranges, grapefruit, lemons as well as fresh eggs.  We estimate that the use of RPCs will eliminate the use of more than <strong>60 million pounds</strong> of waxed and corrugated boxes.</p>

           </div><!-- end .content -->

              <img  src="img/environment/story-6-infograph.jpg" />


          </div><!-- end .logo-layout -->






        </div><!-- end .left-col-l -->

        <div class="left-col-r">



        </div><!-- end .left-col-r -->


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
